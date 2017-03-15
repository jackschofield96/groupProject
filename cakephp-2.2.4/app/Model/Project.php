<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Project $Project
 * @property ProjectOwner $ProjectOwner
 * @property ProjectAllocation $ProjectAllocation
 * @property Project $Project
 */
class Project extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'project_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'project_name';

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
const CONSULTANCY = 0; 
const DEVELOPMENT = 1;
const BID = 2 ;
const PROJECT = 3 ;


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


public static function location($value = null) {
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







	public $validate = array(
		'project_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_skills' => array(
			'multiple' => array(
				'rule' => array('multiple'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_start_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_end_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_budget' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_description' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_owner_id' => array(
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

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
        'Staff' => array(
            'classname' => 'Staff',
            'foreignKey' => 'project_owner_id'
        	)
        );
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ProjectAllocation' => array(
			'className' => 'ProjectAllocation',
			'foreignKey' => 'project_id',
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
