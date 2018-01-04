<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class AuthorsTable extends Table
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
        ->notempty('Age')
        ->requirePresence('Age')
    	->notempty('Gender')
    	->requirePresence('Gender')
        ->notempty('Born_in')
    	->requirePresence('Born_in');
    	return $validator;
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['Name','Age','Born_in','Gender'],'This Author is already added'));
        return $rules;
    }
}
?>