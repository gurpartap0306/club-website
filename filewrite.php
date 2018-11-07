<?php
$fileName = "/Documents/myfile.txt";
$fp = fopen($fileName,"w");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
fwrite( $fp, "This is a sample text to write\n" );
?>