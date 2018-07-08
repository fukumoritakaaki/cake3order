<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{
    
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->hasMany('OrderDetails' , [
            'foreignKey' => 'product_id'
        ]);
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');
        
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
                ->integer('price')
                ->requirePresence('price', 'create')
                ->notEmpty('price');
        
        return $validator;
    }
}