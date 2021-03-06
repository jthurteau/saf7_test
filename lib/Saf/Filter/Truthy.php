<?php //#SCOPE_OS_PUBLIC
namespace Saf\Filter;
/*******************************************************************************
#LIC_FULL

@author Troy Hurteau <jthurtea@ncsu.edu>

Filter for boolean like strings

*******************************************************************************/
require_once(LIBRARY_PATH . '/Saf/Filter.php');

class Truthy extends \Saf\Filter
{
	protected static $_truthyStrings = array(
		'y','yes','1','t','true'
	);
	public static function filter($value)
	{
		if(is_bool($value)){
			return $value;
		}

		if(is_string($value)){
			return in_array(strtolower(trim($value)), self::$_truthyStrings);
		}
		return (bool)$value;
	}
}