<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Author Model
 *
 * @method \App\Model\Entity\Author get($primaryKey, $options = [])
 * @method \App\Model\Entity\Author newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Author[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Author|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Author patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Author[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Author findOrCreate($search, callable $callback = null, $options = [])
 */
class AuthorTable extends Table
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

        $this->setTable('author');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');        
        // $this->hasMany('authorID', ['className' => 'Books']);       
        // public $hasMany = array(
        //     'books'=>array(
        //         'className'    => 'books',
        //         'foreignKey'   => 'author' 
        //     )
        // );
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

        // $validator
        //     ->requirePresence('name', 'create')
        //     ->notEmpty('name')
        //     ->add('role', 'Check_author_name', [
        //         'rule' => 'author_name_exists',
        //         'message' => __('Sorry author name already exists'),
        //         'provider' => 'table',
        //     ]);            

        return $validator;
    }

    // public function author_name_exists($value, array $context)
    // {
    //     return false;
    // }
}
