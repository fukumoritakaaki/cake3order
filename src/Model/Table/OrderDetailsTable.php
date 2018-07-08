<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrderDetailsTable extends Table
{
    
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('order_details');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Orders' , [
            'foreignKey' => 'order_id',
            'JoinType' => 'INNER'
        ]);
        $this->belongsTo('Products' , [
            'foreignKey' => 'product_id',
            'JointType' => 'INNER'
        ]);
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');
        $validator
            ->integer('unit')
            ->requirePresence('unit', 'create')
            ->notEmpty('unit');
        return $validator;
    }
    
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}