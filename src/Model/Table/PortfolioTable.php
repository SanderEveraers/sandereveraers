<?php
namespace App\Model\Table;

use App\Model\Entity\Portfolio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Portfolio Model
 *
 */
class PortfolioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('portfolio');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('Website', 'create')
            ->notEmpty('Website');

        $validator
            ->requirePresence('Address', 'create')
            ->notEmpty('Address');

        $validator
            ->date('Date')
            ->requirePresence('Date', 'create')
            ->notEmpty('Date');

        $validator
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        return $validator;
    }
}
