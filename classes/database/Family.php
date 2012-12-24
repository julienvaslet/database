<?php

namespace database;

require_once( dirname( __FILE__ )."/Object.class.php" );

final class Family extends Object
{
	protected static $schema = "database";
	protected static $table = "family";
	
	protected static $fields = array(
		"family_id" => array(
			"type" 			=> "integer",
			"bits"			=> 24,
			"unsigned" 		=> true,
			"autoIncrement"	=> true
		),
		"lastname" => array(
			"type"		=> "string",
			"maxlength"	=> 64
		)
	);
	
	protected static $keys = array(
		"primary" => array( "family_id" )
	);

	public $family_id;
	public $lastname;
}

?>
