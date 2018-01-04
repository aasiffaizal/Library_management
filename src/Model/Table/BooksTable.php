<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class BooksTable extends Table
{
    public function initialize(array $config)
    { 
        $this->setPrimaryKey("Id");    
    }
    public function validationDefault(Validator $validator)
    {
    	$validator
    	->notempty('Name')
    	->requirePresence('Name')
        ->notempty('Author')
        ->requirePresence('Author')
    	->notempty('ISBN')
    	->requirePresence('ISBN');

    	return $validator;
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['Name','Author'],'This Book is already added'));
        return $rules;
    }
}
?>