<?php //#SCOPE_OS_PUBLIC
/*******************************************************************************
#LIC_FULL

@author Troy Hurteau <jthurtea@ncsu.edu>

base class for calendar models

*******************************************************************************/

abstract class Saf_Model_Calendar
{
	public function __construct($config = array())
	{

	}

	public function getUserMonthYear($time = NULL)
	{
		if (is_null($time)) {
			$time = Saf_Time::time();
		}
		return date('F Y', $time);
	}

	public function fullView()
	{
		return TRUE;
	}

	public function getMinDate()
	{
		return date('Y-m-d', PHP_INT_MIN);
	}

	public function getMaxDate()
	{
		return date('Y-m-d', PHP_INT_MAX);
	}

	public function getDefaultDate()
	{
		return date('Y-m-d');
	}

	public function allowedYear($year)
	{
		return TRUE;
	}

	public function allowedMonth($month, $year = NULL)
	{
		return TRUE;
	}

	public function allowedDate($day, $month = NULL, $year = NULL)
	{
		return TRUE;
	}


}

