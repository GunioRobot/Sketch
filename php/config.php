<?php
	
	include_once 'util.php';
	
	/**
	 * Database settings, you'll need to fill these out if you
	 * want the saving/loading and gallery functionality to 
	 * work.
	 * 
	 * The MySQL database must be structured as follows:
	 * 
	 * ---------------------------------------------------
	 * | FIELD:    | TYPE:     | EXTRA:                  |
	 * ---------------------------------------------------
	 * | index     | INT       | primary, auto increment |
	 * | id        | TEXT      | -                       |
	 * | value     | LONGTEXT  | -                       |
	 * | date      | TEXT      | -                       |
	 * | views     | INT       | default '1'             |
	 * | featured  | INT       | default '0'             |
	 * ---------------------------------------------------
	 */
	$host = "";
	$user = "";
	$pass = "";
	$db_name = "";
	$db_table = "sketch_saves";
	
	/**
	 * Connect
	 */ 
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db($db_name);
	
	/**
	 * Set encoding to utf-8
	 */
	mysql_query("SET NAMES utf8");
?>