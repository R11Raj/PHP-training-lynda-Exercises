//Creating copyright text for a website which automatically changes every year like 2000-01,2001-02 etc..
<?php
function copyright($startYear){
   $currentYear=date('Y');
   if($startYear<$currentYear){
     $currentYear=date('y');
     return "&copy; $startYear-$currentYear";
   }
   else{
     return "&copy; $startYear";
   }
}
echo copyright(2000);
