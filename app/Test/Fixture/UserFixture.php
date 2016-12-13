<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'new' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'birthdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'file' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
		'path' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'facebook' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'twitter' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'youtube' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'new' => 1,
			'token' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'birthdate' => '2016-12-07',
			'file' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'facebook' => 'Lorem ipsum dolor sit amet',
			'twitter' => 'Lorem ipsum dolor sit amet',
			'youtube' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'state_id' => 1,
			'city_id' => 1,
			'created' => '2016-12-07 18:51:55',
			'modified' => '2016-12-07 18:51:55'
		),
	);

}
