<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table
{
    
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('orders');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Customers' , [
            'foreignKey' => 'customer_id',
            'JoinType' => 'INNER'
        ]);
        $this->hasMany('OrderDetails' , [
            'foreignKey' => 'order_id'
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
        return $validator;
    }
    
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}