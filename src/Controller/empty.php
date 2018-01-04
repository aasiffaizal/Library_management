<? php
public function addBook()
        {
            $book = $this->Books->newEntity();
            $this->loadModel('Authors');
            $authors_obj=$this->Authors->find()->select(['Name'])->toArray(); //retrieves all the names of the authors as an object
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
                    //$this->Flash->success(__('Your Book has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your Book.'));
            }
            $this->set('authors',$authors);
            $this->set('book', $book);
        }

        public function addAuthor()
        {   
            
            $this->loadModel('Authors');
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
                    $this->Flash->success(__('Your Author has been saved.'));
                    return $this->redirect(['action' => 'authors']);
                }
                $this->Flash->error(__('Unable to add the Author.'));
            }
            $this->set('author',$author);
        }

?>