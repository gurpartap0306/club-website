<?php
$fileName = "/Documents/myfile.txt";
$fp = fopen($fileName,"w");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
   
fclose( $fp );
?>