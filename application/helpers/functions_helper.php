<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('date2DB'))
{
	/**
	 * date2DB
	 *
	 * accepts dd/mm/yy or dd-mm-yy and converts to something the DB will like. yyyy also ok
	 *
	 * @param	string	$inputDate
	 */
	function date2DB($inputDate = NULL)
	{
    
    $dateArray = explode(substr($inputDate,2,1),$inputDate);
    if(count($dateArray)!=3) {
      return null;
    }
    $outputDate = $dateArray[2] . "-" . $dateArray[1] . "-" . $dateArray[0];
    return htmlentities($outputDate);
	}
}

if ( ! function_exists('datetime2DB'))
{
	/**
	 * date2DB
	 *
	 * accepts dd/mm/yy or dd-mm-yy hh:ii and converts to something the DB will like. yyyy also ok.
	 *
	 * @param	string	$inputDate
	 */
	function datetime2DB($inputDate = NULL)
	{
    return null;
    /* HAVENT SET IT UP FOR TIME YET!!! */
  /*  $dateArray = explode(substr($inputDate,2,1),$inputDate);
    if(count($dateArray)!=3) {
      return null;
    }
    $outputDate = $dateArray[2] . "-" . $dateArray[1] . "-" . $dateArray[0];
    return htmlentities($outputDate);*/
  }
}

?>