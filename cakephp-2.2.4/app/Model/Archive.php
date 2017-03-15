<?php
App::uses('AppModel', 'Model');
/**
 * Archive Model
 *
 */
class Archive extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'archive';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'archive_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'archive_name';

/**
 * Validation rules
 *
 * @var array
 */
 public static function type($value = null) {
	$options = array(
		self::CONSULTANCY => __('Consultancy',true),
		self::DEVELOPMENT => __('Development',true),
		self::BID => __('Bid',true),
		self::PROJECT => __('Project',true),
		
	);
	return parent::enum($value, $options);
}
const CONSULTANCY = 0; # causes sound, then marks itself as "unread"
const DEVELOPMENT = 1;
const BID = 2 ;
const PROJECT = 3 ;



public static function location($value = null) {
	$options = array(
		self::LONDON => __('London',true),
		self::EDINBURGH => __('Edinburgh',true),
		
	);
	return parent::enum($value, $options);
}
const LONDON = 0; # causes sound, then marks itself as "unread"
const EDINBURGH = 1;




	public $validate = array(
		'archive_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'archive_start_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_end_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_budget' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_expenditure' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_description' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archive_owner_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
