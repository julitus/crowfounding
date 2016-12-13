<?php
/**
 * Campaign Fixture
 */
class CampaignFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'money_goal' => array('type' => 'float', 'null' => true, 'default' => null),
		'money_now' => array('type' => 'float', 'null' => true, 'default' => null),
		'url_video' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256),
		'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'file_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'file_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'file_3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'file_4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'file_5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'path' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null),
		'begin_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'type' => 1,
			'money_goal' => 1,
			'money_now' => 1,
			'url_video' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'file_1' => 'Lorem ipsum dolor sit amet',
			'file_2' => 'Lorem ipsum dolor sit amet',
			'file_3' => 'Lorem ipsum dolor sit amet',
			'file_4' => 'Lorem ipsum dolor sit amet',
			'file_5' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'begin_date' => '2016-12-07',
			'end_date' => '2016-12-07',
			'country_id' => 1,
			'state_id' => 1,
			'city_id' => 1,
			'category_id' => 1,
			'user_id' => '',
			'created' => '2016-12-07 18:52:03',
			'modified' => '2016-12-07 18:52:03'
		),
	);

}
