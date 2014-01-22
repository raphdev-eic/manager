<?php
App::uses('AppModel', 'Model');
/**
 * Value Model
 *
 * @property Fund $Fund
 */
class Value extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Fund' => array(
			'className' => 'Fund',
			'foreignKey' => 'fund_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function ListFund(){
        $lists = $this->Fund->find('list');
        return $lists;
    }
}
