<?
//pass in dd/mm/yy or dd-mm-yy and convert to yyyy-mm-dd
if(!function_exists('date2DB'))
{
  function date2DB($inputDate)
  {
    $dateArray = explode(substr($value,2,1),$value);
    if(count($dateArray)!=3) {
      return null;
    }
    $outputDate = $dateArray[3] . "-" . $dateArray[2] . "-" . $dateArray[1];
    return htmlentities($outputDate);
  }
/*
}
if(!function_exists('datetime2DB'))
{
  function datetime2DB($value)
  {
   return htmlentities($value);
  }
}
*/
?>