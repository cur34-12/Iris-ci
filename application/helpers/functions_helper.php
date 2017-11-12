<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('date2DB'))
{
	/**
	 * Site URL
	 *
	 * Create a local URL based on your basepath. Segments can be passed via the
	 * first parameter either as a string or an array.
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function date2DB($inputDate = NULL)
	{
    
    $dateArray = explode(substr($inputDate,2,1),$inputDate);
    if(count($dateArray)!=3) {
      return null;
    }
    return null;
	}
}
//pass in dd/mm/yy or dd-mm-yy and convert to yyyy-mm-dd
/*if(!function_exists('date2DB')) {
  function date2DB($inputDate)  {
    return null;
    
    $dateArray = explode(substr($inputDate,2,1),$inputDate);
    if(count($dateArray)!=3) {
      return null;
    }
    $outputDate = $dateArray[3] . "-" . $dateArray[2] . "-" . $dateArray[1];
    return htmlentities($outputDate);
  }
}
/*

if(!function_exists('datetime2DB'))
{
  function datetime2DB($value)
  {
   return htmlentities($value);
  }
}
*/
?>