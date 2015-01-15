<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 */
class Address extends AppModel {
	
	public $recursive = -1;

	/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'name2' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
		'address1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'An address is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'address2' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
		'city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A city is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A state is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'postal_code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A zip code is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
//		'country' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
	);
	
	/**
	 * Clone an address based on its id and return the new record
	 * 
	 * @param string $id
	 * @param boolean $force Insist that a new record is created even if no source is found
	 * @return array
	 */
	public function duplicate($id) {
		if (!$this->exists($id)) {
			return array();
		}
		$this->read(NULL, $id);
		$this->data['Address']['id'] = NULL;
		$this->save($this->data);
		$this->data['Address']['id'] = $this->getLastInsertID();
		return $this->data;
	}
	
	/**
	 * Get or set the Address record link
	 * 
	 * @param string $id The id of the record to modify
	 * @param string $model The value to set
	 * @param string $foreign_key The value to set
	 * @return array
	 */
	public function link($id, $model = NULL, $foreign_key = NULL) {
		if (is_null($model) || is_null($foreign_key)) {
			return $this->find('first', array(
				'conditions' => array('Address.id' => $id),
				'fields' => array('id', 'foreign_table', 'foreign_key')
				));
		} else {
			return $this->save(array(
				'id' => $id,
				'foreign_table' => $model,
				'foreign_key' => $foreign_key
			));
		}
	}
	
	/**
	 * Get or set the Address record type
	 * 
	 * @param string $id The id of the record to read/modify
	 * @param string $type The value to set
	 * @return array
	 */
	public function type($id, $type = NULL) {
		if (is_null($type)) {
			return $this->find('first', array(
				'conditions' => array('Address.id' => $id),
				'fields' => array('id', 'type')
				));
		} else {
			return $this->save(array(
				'id' => $id,
				'type' => $type
			));
		}
	}
}
