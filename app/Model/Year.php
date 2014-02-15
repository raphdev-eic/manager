<?php
App::uses('AppController','Controller');
class Year extends AppModel{

	public $hasMany = array(
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'year_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}