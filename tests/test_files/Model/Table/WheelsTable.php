<?php
namespace TestApp\Model\Table;

use Cake\ORM\Table;

/**
 * @method \TestApp\Model\Entity\Wheel newEntity(array $data, array $options = [])
 * @property \TestApp\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @method \TestApp\Model\Entity\Wheel newEmptyEntity()
 * @method \TestApp\Model\Entity\Wheel[] newEntities(array $data, array $options = [])
 * @method \TestApp\Model\Entity\Wheel get($primaryKey, $options = [])
 * @method \TestApp\Model\Entity\Wheel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \TestApp\Model\Entity\Wheel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \TestApp\Model\Entity\Wheel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \TestApp\Model\Entity\Wheel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \TestApp\Model\Entity\Wheel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \TestApp\Model\Entity\Wheel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \TestApp\Model\Entity\Wheel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \TestApp\Model\Entity\Wheel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \TestApp\Model\Entity\Wheel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class WheelsTable extends Table {

	/**
	 * @param array $config
	 * @return void
	 */
	public function initialize(array $config): void {
		parent::initialize($config);

		$this->belongsTo('Cars');

		$this->addBehavior('Tree');
	}

}
