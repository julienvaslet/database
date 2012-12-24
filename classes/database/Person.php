<?php

namespace database;

require_once( dirname( __FILE__ )."/Object.class.php" );

final class Field extends Object
{
	protected static $schema = "database";
	protected static $table = "person";
	
	protected static $fields = array(
		"person_id" => array(
			"type" 			=> "integer",
			"bits"			=> 24,
			"unsigned" 		=> true,
			"autoIncrement"	=> true
		),
		"family_id" => array(
			"type" 			=> "integer",
			"bits"			=> 24,
			"unsigned" 		=> true
		),
		"firstname" => array(
			"type"		=> "string",
			"maxlength"	=> 64
		),
		"birthday" => array(
			"type" 		=> "date"
		)
	);
	
	protected static $keys = array(
		"primary" => array( "person_id" ),
		"foreign" => array(
			array(
				"fields" => "family_id",
				"table" => "family",
				"references" => "family_id",
				"onDelete" => "cascade",
				"onUpdate" => "cascade"
			),
		)
	);

	public $person_id;
	public $family_id;
	public $firstname;
	public $birthday;
}

?>
