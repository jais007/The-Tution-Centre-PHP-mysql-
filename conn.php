<?php
//connect to db
$db=mysql_connect("localhost", "root", "");
$check=mysql_select_db("thetuitioncentre");
if($check<1)
{
    $err=1;
}
?>