<?php
/**
 * Admin Fixture
 */
class AdminFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-12-17 19:50:34',
			'modified' => '2016-12-17 19:50:34'
		),
	);

}
