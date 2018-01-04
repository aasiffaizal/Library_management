<?php
    namespace App\Controller;
    use Cake\Routing\Router;
    use Cake\ORM\Table;
    use Cake\ORM\TableRegistry;
    use Cake\Event\Event;
    use Cake\I18n\Time;
    use Cake\Network\Exception\NotFoundException;

    class BooksController extends AppController
    {
        public function index()
        {
            $books = $this->Books->find('all'); //Gets all the books in the database
            $count = $this->Books->find('all')->count();
            $book = $this->Books->newEntity();
            $this->set('count',$count);
            $this->set(compact('books'));
            $this->loadModel('Authors');
            $authors_obj=$this->Authors->find()->select(['Name'])->order(['Name'=>'ASC'])->toArray(); //retrieves all the names of the authors as an object
            $authors=array();
            foreach($authors_obj as $author_obj)
                {
                    $authors[]=$author_obj['Name']; //forming an array of author names
                }
            if ($this->request->is('post')) 
            {
                $book = $this->Books->patchEntity($book, $this->request->getData());
                $index= $book['Author']; //author index is returned and saved in variable $index
                $book['Author']=$authors[$index]; //name of the author is found using the index 
                $slug=$this->createSlug($book['Name']);
                $book['Slug']=$slug;
                if ($this->Books->save($book)) 
                {
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Your Book already exist'));
            }
            $this->set('authors',$authors);
            $this->set('book', $book);
            
        }    
        
        

        public function authors()
        {
            $this->loadModel('Authors');
            $authors = $this->Authors->find('all'); //Gets all the authors in the database
            $count = $this->Authors->find('all')->count();
            $this->set('count',$count);
            $this->set(compact('authors'));

            $message=null;
            $author = $this->Authors->newEntity();
            $gender=array('Male','Female','Other');
            if ($this->request->is('post')) 
            { 
                $author = $this->Authors->patchEntity($author, $this->request->getData());
                $index= $author['Gender']; //Gender index is returned and saved in variable $index
                $author['Gender']=$gender[$index]; //gender is found using the index
                $slug=$this->createSlug($author['Name']); //creating slug with the author's name
                $author['Slug']=$slug;
                //print_r($author);exit;
                if ($this->Authors->save($author)) 
                {
                    //$this->Flash->success(__('Your Author has been saved.'));
                    return $this->redirect(['action' => 'authors']);
                }
                $this->Flash->error(__('Author Already Exist'));
                //$message="error";
                
            }
            $this->set('message',$message);
            $this->set('author',$author);
        }

        public function bookview($Slug=null)
        {
            $books = $this->Books->find()->where(['Slug'=>$Slug])->toArray(); //Gets all the authors in the database
            $id=$books[0]['Id'];
            $prev = $this->Books->find()->where(['Id <'=>$id])->order(['Id' => 'DESC'])->first();
            $next = $this->Books->find()->where(['Id >'=>$id])->first();
            //print_r($prev);exit;
            $prev=$prev['Slug'];
            $next=$next['Slug'];
            
            $this->set(compact('books'));
            $this->set('prev',$prev);
            $this->set('next',$next);
        }

        

        public function authorview($Slug=null)
        {
            $this->loadModel('Authors');
            $authors = $this->Authors->find()->where(['Slug'=>$Slug])->toArray(); //Gets all the authors in the database
            $a_name=$authors[0]['Name'];
            $a_id=$authors[0]['Id'];
            $books = $this->Books->find()->where(['Author'=>$a_name])->toArray(); //Gets all the authors in the database
            $count = $this->Books->find()->where(['Author'=>$a_name])->count();
            $prev = $this->Authors->find()->where(['Id <'=>$a_id])->order(['Id' => 'DESC'])->first();
            $next = $this->Authors->find()->where(['Id >'=>$a_id])->first();
            $prev=$prev['Slug'];
            $next=$next['Slug'];
            $this->set(compact($authors));
            $this->set('books',$books);
            $this->set('count',$count);
            $this->set(compact('authors'));
            $this->set('prev',$prev);
            $this->set('next',$next);
        }
    }
    
?>