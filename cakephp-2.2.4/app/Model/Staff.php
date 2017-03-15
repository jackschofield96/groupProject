<?php
App::uses('AppModel', 'Model');
/**
 * Staff Model
 *
 * @property ProjectAllocation $ProjectAllocation
 */
class Staff extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'staff';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'staff_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'staff_first_name';

/**
 * Validation rules
 *
 * @var array
 */
	
/*
 * static enum: Model::function()
 * @access static
 */
 public static function locations($value = null) {
	$options = array(
		self::LONDON => __('London',true),
		self::EDINBURGH => __('Edinburgh',true),
		self::YORK => __('York',true),
		self::MARSEILLE => __('Marseille',true),
		
	);
	return parent::enum($value, $options);
}
const LONDON = 0; 
const EDINBURGH = 1;
const YORK = 2;
const MARSEILLE = 3;

 public static function skills($value = null) {
	$options = array(
		self::HTML => __('HTML',true),
		self::JAVA => __('Java',true),
		self::DESIGN => __('Design',true),
		self::UML => __('UML',true),
		
	);
	return parent::enum($value, $options);
}
const HTML = 0; 
const JAVA = 1;
const DESIGN = 2;
const UML = 3;

public static function type($value = null) {
	$options = array(
		self::CONTRACTOR => __('Contractor',true),
		self::PERMANENT => __('Permanent',true),
		
	);
	return parent::enum($value, $options);
}
const CONTRACTOR = 0; 
const PERMANENT = 1;




	public $validate = array(
		'staff_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'staff_first_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'staff_last_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	/*	'staff_pref_location' => array(
			'multiple' => array(
				'rule' => array('multiple'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		), */
		'staff_skills' => array(
			'multiple' => array(
				'rule' => array('multiple'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'staff_salary' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'staff_personal_statement' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ProjectAllocation' => array(
			'className' => 'ProjectAllocation',
			'foreignKey' => 'staff_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Projects' => array(
			'className' => 'Project',
			'foreignKey' => 'project_owner_id',
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

	public $hasOne = array(
         'User' => array(
             'className' => 'User',
             'foreignKey' => 'id'

         	)
		);

}
