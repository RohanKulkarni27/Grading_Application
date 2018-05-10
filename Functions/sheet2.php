<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
function getgrade2($eobj,$number,$inputFileType,$filePath){
  $worksheet = $eobj->getSheet($number);
  $marks=0;
  $str;
  $index=$number;
  $array_error = array();

  $Z37F=$worksheet->getCell('Z37')->getValue();
  $key1 = strpos($Z37F,"X37");
  $key2 = strpos($Z37F,"*");
  $key3 = strpos($Z37F,"Y37");
  $key4 = strpos($Z37F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z37 is wrong");
  }

  $Z38F=$worksheet->getCell('Z38')->getValue();
  $key1 = strpos($Z38F,"X38");
  $key2 = strpos($Z38F,"*");
  $key3 = strpos($Z38F,"Y38");
  $key4 = strpos($Z38F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z38 is wrong");
  }

  $Z39F=$worksheet->getCell('Z39')->getValue();
  $key1 = strpos($Z39F,"X39");
  $key2 = strpos($Z39F,"*");
  $key3 = strpos($Z39F,"Y39");
  $key4 = strpos($Z39F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z39 is wrong");
  }

  $Z40F=$worksheet->getCell('Z40')->getValue();
  $key1 = strpos($Z40F,"SUM");
  $key2 = strpos($Z40F,"Z37");
  $key3 = strpos($Z40F,"Z39");
  $key4 = strpos($Z40F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z40 is wrong");
  }

  $X40F=$worksheet->getCell('X40')->getValue();
  $key1 = strpos($X40F,"SUM");
  $key2 = strpos($X40F,"X37");
  $key3 = strpos($X40F,"X39");
  $key4 = strpos($X40F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X40 is wrong");
  }

  $Y40F=$worksheet->getCell('Y40')->getValue();
  $key1 = strpos($Y40F,"Z40");
  $key2 = strpos($Y40F,"/");
  $key3 = strpos($Y40F,"X40");
  $key4 = strpos($Y40F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y40 is wrong");
  }

  $AA37F=$worksheet->getCell('AA37')->getValue();
  $key1 = strpos($AA37F,"Z37");
  $key2 = strpos($AA37F,"/");
  $key3 = strpos($AA37F,"Z40");
  $key4 = strpos($AA37F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell AA37 is wrong");
  }

  $AA38F=$worksheet->getCell('AA38')->getValue();
  $key1 = strpos($AA38F,"Z38");
  $key2 = strpos($AA38F,"/");
  $key3 = strpos($AA38F,"Z40");
  $key4 = strpos($AA38F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell AA38 is wrong");
  }

  $AA39F=$worksheet->getCell('AA39')->getValue();
  $key1 = strpos($AA39F,"Z39");
  $key2 = strpos($AA39F,"/");
  $key3 = strpos($AA39F,"Z40");
  $key4 = strpos($AA39F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell AA39 is wrong");
  }

  $AA40F=$worksheet->getCell('AA40')->getValue();
  $key1 = strpos($AA40F,"Z40");
  $key2 = strpos($AA40F,"/");
  $key3 = strpos($AA40F,"Z42");
  $key4 = strpos($AA40F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)){
    $marks=$marks+0.25;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell AA40 is wrong");
  }

  $Z29F=$worksheet->getCell('Z29')->getValue();
  $key1 = strpos($Z29F,"IF");
  $key2 = strpos($Z29F,"Z28");
  $key3 = strpos($Z29F,">");
  $key4 = strpos($Z29F,"T11");
  $key5 = strpos($Z29F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE && $key4 == TRUE || $key5 == TRUE)){
    $marks=$marks+1;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z29 is wrong");
  }

  $Z35F=$worksheet->getCell('Z35')->getValue();
  $key1 = strpos($Z35F,"IF");
  $key2 = strpos($Z35F,"Z34");
  $key3 = strpos($Z35F,">");
  $key4 = strpos($Z35F,"T12");
  $key5 = strpos($Z35F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE && $key4 == TRUE || $key5 == TRUE)){
    $marks=$marks+1;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z35 is wrong");
  }

  $Z41F=$worksheet->getCell('Z41')->getValue();
  $key1 = strpos($Z41F,"IF");
  $key2 = strpos($Z41F,"Z40");
  $key3 = strpos($Z41F,">");
  $key4 = strpos($Z41F,"T13");
  $key5 = strpos($Z41F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE && $key4 == TRUE || $key5 == TRUE)){
    $marks=$marks+1;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z41 is wrong");
  }

  $Z43F=$worksheet->getCell('Z43')->getValue();
  $key1 = strpos($Z41F,"IF");
  $key2 = strpos($Z41F,"Z42");
  $key3 = strpos($Z41F,"SUM");
  $key4 = strpos($Z41F,"T10");
  $key5 = strpos($Z41F,"T13");
  $key6 = strpos($Z41F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE && $key4 == TRUE && $key5 == TRUE || $key6 == TRUE)){
    $marks=$marks+1;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z43 is wrong");
  }

  $array_length=count($array_error);
  if($array_length!=0){
      $number=1;
      $str="<table>";
      for($i=0;$i<$array_length;$i++){
      $str=$str."<tr>";
      $str=$str."<td>";
      $str=$str.$number.".".$array_error[$i];
      $str=$str."</td>";
      $str=$str."</tr>";
      $number++;
      }
      $str=$str."</table>";
      $str=$str."<br> Grade for assignment ".$index." is:".$marks;
      return $str;
  }
  else{
      return "Grade for assignment ".$index." is:".$marks;
  }
}








/*

function getgrade2($eobj,$number,$inputFileType){
$worksheet = $eobj->getSheet(2);
$marks=0;
$str;
$index=$number-1;
$array_error = array();
for($i=8;$i<=10;$i++){
  switch($i){
    case 8:$valueh8=$worksheet->getCell('H8')->getFormattedValue();
           $valueo8=$worksheet->getCell('O8')->getFormattedValue();
           $o8F = $worksheet->getCell('O8')->getValue();
           if($valueh8==$valueo8 && $o8F=='=L8+N8'){
             $marks=$marks+10;
           }
           elseif($valueh8==$valueo8 && $o8F!='=L8+N8'){
             $marks=$marks+5;
             array_push($array_error,"Formula of cell O8 is wrong");
           }
           elseif($valueh8!=$valueo8 && $o8F=='=L8+N8'){
             $marks=$marks+5;
             array_push($array_error,"Value of cell O8 is wrong");
           }
           else{
             $marks=$marks+0;
             array_push($array_error,"Value and Formula of cell O8 is wrong");
           }
    break;
    case 9:$valueh9=$worksheet->getCell('H9')->getFormattedValue();
           $valueo9=$worksheet->getCell('O9')->getFormattedValue();
           $o9F = $worksheet->getCell('O9')->getValue();
           if($valueh9==$valueo9 && $o9F=='=L9+N9'){
             $marks=$marks+10;
           }
           elseif($valueh9==$valueo9 && $o9F!='=L9+N9'){
             $marks=$marks+5;
             array_push($array_error,"Formula of cell O9 is wrong");
           }
           elseif($valueh9!=$valueo9 && $o9F=='=L9+N9'){
             $marks=$marks+5;
             array_push($array_error,"value of cell O9 is wrong");
           }
           else{
             $marks=$marks+0;
             array_push($array_error,"Value and Formula of cell O9 is wrong");
           }
    break;
    case 10:$valueh10=$worksheet->getCell('H10')->getFormattedValue();
           $valueo10=$worksheet->getCell('O10')->getFormattedValue();
           $o10F = $worksheet->getCell('O10')->getValue();
           if($valueh10==$valueo10 && $o10F=='=L10+N10'){
             $marks=$marks+10;
           }
           elseif($valueh10==$valueo9 && $o10F!='=L10+N10'){
             $marks=$marks+5;
             array_push($array_error,"Formula of cell O10 is wrong");
           }
           elseif($valueh10!=$valueo9 && $o10F=='=L10+N10'){
             $marks=$marks+5;
             array_push($array_error,"Value of cell O10 is wrong");
           }
           else{
             $marks=$marks+0;
             array_push($array_error,"Value and Formula of cell O10 is wrong");
           }
    break;
  }

}


// Code for writing marks inside the excel sheet;
/*
$eobj->setActiveSheetIndex(1);
$eobj->getSheet(1)->setCellValue('A1',$marks);
$writer = IOFactory::createWriter($eobj,$inputFileType);
$writer->save("Uploads/Workbook1.xlsx");
*/



 ?>
