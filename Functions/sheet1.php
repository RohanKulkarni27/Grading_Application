<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
function getgrade1($eobj,$number,$inputFileType,$filePath){
  $worksheet = $eobj->getSheet($number);
  $marks=0;
  $str;
  $index=$number;
  $array_error = array();



  $Q24F=$worksheet->getCell('Q24')->getValue();
  $ValueQ24=$worksheet->getCell('Q24')->getFormattedValue();
  $key1 = strpos($Q24F,"O24");
  $key2 = strpos($Q24F,"*");
  $key3 = strpos($Q24F,"P24");
  $key4 = strpos($Q24F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ24=='$40.00'){
    $marks=$marks+0.5+0.2;
  }

  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ24!='$40.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q24 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == FALSE) && $ValueQ24=='$40.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q24 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q24 is wrong");
  }


  $Q25F=$worksheet->getCell('Q25')->getValue();
  $ValueQ25=$worksheet->getCell('Q25')->getFormattedValue();
  $key1 = strpos($Q25F,"O25");
  $key2 = strpos($Q25F,"*");
  $key3 = strpos($Q25F,"P25");
  $key4 = strpos($Q25F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE) && $ValueQ25=='$185.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 ==TRUE) && $ValueQ25!='$185.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q25 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE ||  $key4 == FALSE) && $ValueQ25=='$185.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q25 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q25 is wrong");
  }

  $Q26F=$worksheet->getCell('Q26')->getValue();
  $ValueQ26=$worksheet->getCell('Q26')->getFormattedValue();
  $key1 = strpos($Q26F,"O26");
  $key2 = strpos($Q26F,"*");
  $key3 = strpos($Q26F,"P26");
  $key4 = strpos($Q26F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)  && $ValueQ26=='$82.50'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ26!='$82.50'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q26 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == FALSE) && $ValueQ26=='$82.50') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q26 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q26 is wrong");
  }

  $R24F=$worksheet->getCell('R24')->getValue();
  $ValueR24=$worksheet->getCell('R24')->getFormattedValue();
  $key1 = strpos($R24F,"Q24");
  $key2 = strpos($R24F,"/");
  $key3 = strpos($R24F,"Q27");
  $key4 = strpos($R24F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE)  && $ValueR24=='13%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE) && $ValueR24!='13%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R24 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE ||  $key4 == FALSE)  && $ValueR24=='13%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R24 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R24 is wrong");
  }

  $R25F=$worksheet->getCell('R25')->getValue();
  $ValueR25=$worksheet->getCell('R25')->getFormattedValue();
  $key1 = strpos($R25F,"Q25");
  $key2 = strpos($R25F,"/");
  $key3 = strpos($R25F,"Q27");
  $key4 = strpos($R25F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)  && $ValueR25=='60%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)  && $ValueR25!='60%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R25 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == FALSE)  && $ValueR25=='60%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R25 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R25 is wrong");
  }

  $R26F=$worksheet->getCell('R26')->getValue();
  $ValueR26=$worksheet->getCell('R26')->getFormattedValue();
  $key1 = strpos($R26F,"Q26");
  $key2 = strpos($R26F,"/");
  $key3 = strpos($R26F,"Q27");
  $key4 = strpos($R26F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4== TRUE)  && $ValueR26=='27%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)  && $ValueR26!='27%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R26 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4== FALSE)  && $ValueR26=='27%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R26 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R26 is wrong");
  }

  $Q27F=$worksheet->getCell('Q27')->getValue();
  $ValueQ27=$worksheet->getCell('Q27')->getFormattedValue();
  $key1 = strpos($Q27F,"SUM");
  $key2 = strpos($Q27F,"Q24");
  $key3 = strpos($Q27F,"Q26");
  $key4 = strpos($Q27F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4== TRUE)  && $ValueQ27=='$307.50'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE)  && $ValueQ27!='$307.50'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell Q27 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE ||  $key4==FALSE)  && $ValueQ27=='$307.50') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q27 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q27 is wrong");
  }

  $O27F=$worksheet->getCell('O27')->getValue();
  $ValueO27=$worksheet->getCell('O27')->getFormattedValue();
  $key1 = strpos($O27F,"SUM");
  $key2 = strpos($O27F,"O24");
  $key3 = strpos($O27F,"O26");
  $key4 = strpos($O27F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4== TRUE)  && $ValueO27=='33'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE)  && $ValueO27!='33'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell O27 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE ||  $key4==FALSE)  && $ValueO27=='33') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell O27 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell O27 is wrong");
  }

  $P27F=$worksheet->getCell('P27')->getValue();
  $ValueP27=$worksheet->getCell('P27')->getFormattedValue();
  $key1 = strpos($P27F,"Q27");
  $key2 = strpos($P27F,"/");
  $key3 = strpos($P27F,"O27");
  $key4 = strpos($P27F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE)  && $ValueP27=='$9.32'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE ||  $key4 == TRUE)  && $ValueP27!='$9.32'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell P27 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE ||  $key4 == TRUE)  && $ValueP27=='$9.32') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell P27 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell P27 is wrong");
  }

  $R27F=$worksheet->getCell('R27')->getValue();
  $ValueR27=$worksheet->getCell('R27')->getFormattedValue();
  $key3 = strpos($R27F,"Q41");

  if(($R27F=='=Q27/$Q$41'|| $key3==TRUE) && $ValueR27=='21%'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($R27F=='=Q27/$Q$41'|| $key3==TRUE) && $ValueR27!='21%'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell R27 is wrong");
  }
  elseif (($R27F!='=Q27/$Q$41' || $key3==FALSE) && $ValueR27=='21%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R27 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R27 is wrong");
  }

  $Q30F=$worksheet->getCell('Q30')->getValue();
  $ValueQ30=$worksheet->getCell('Q30')->getFormattedValue();
  $key1 = strpos($Q30F,"O30");
  $key2 = strpos($Q30F,"*");
  $key3 = strpos($Q30F,"P30");
  $key4 = strpos($Q30F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ30=='$60.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ30!='$60.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q30 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == FALSE) && $ValueQ30=='$60.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q30 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q30 is wrong");
  }

  $Q31F=$worksheet->getCell('Q31')->getValue();
  $ValueQ31=$worksheet->getCell('Q31')->getFormattedValue();
  $key1 = strpos($Q31F,"O31");
  $key2 = strpos($Q31F,"*");
  $key3 = strpos($Q31F,"P31");
  $key4 = strpos($Q31F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ31=='$20.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ31!='$20.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q31 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ31=='$20.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q31 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q31 is wrong");
  }

  $Q32F=$worksheet->getCell('Q32')->getValue();
  $ValueQ32=$worksheet->getCell('Q32')->getFormattedValue();
  $key1 = strpos($Q32F,"O32");
  $key2 = strpos($Q32F,"*");
  $key3 = strpos($Q32F,"P32");
  $key4 = strpos($Q32F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ32=='$50.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ32!='$50.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q32 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ32=='$50.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q32 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q32 is wrong");
  }

  $R30F=$worksheet->getCell('R30')->getValue();
  $ValueR30=$worksheet->getCell('R30')->getFormattedValue();
  $key1 = strpos($R30F,"Q30");
  $key2 = strpos($R30F,"/");
  $key3 = strpos($R30F,"Q33");
  $key4 = strpos($R30F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR30=='46%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE)  && $ValueR30!='46%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R30 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False)  && $ValueR30=='46%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R30 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R30 is wrong");
  }

  $R31F=$worksheet->getCell('R31')->getValue();
  $ValueR31=$worksheet->getCell('R31')->getFormattedValue();
  $key1 = strpos($R31F,"Q31");
  $key2 = strpos($R31F,"/");
  $key3 = strpos($R31F,"Q33");
  $key4 = strpos($R31F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR31=='15%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR31!='15%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R31 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueR31=='15%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R31 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R31 is wrong");
  }


  $R32F=$worksheet->getCell('R32')->getValue();
  $ValueR32=$worksheet->getCell('R32')->getFormattedValue();
  $key1 = strpos($R32F,"Q32");
  $key2 = strpos($R32F,"/");
  $key3 = strpos($R32F,"Q33");
  $key4 = strpos($R32F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR32=='38%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR32!='38%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R32 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueR32=='38%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R32 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R32 is wrong");
  }

  
  $Q33F=$worksheet->getCell('Q33')->getValue();
  $ValueQ33=$worksheet->getCell('Q33')->getFormattedValue();
  $key1 = strpos($Q33F,"SUM");
  $key2 = strpos($Q33F,"Q30");
  $key3 = strpos($Q33F,"Q32");
  $key4 = strpos($Q33F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ33=='$130.00'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ33!='$130.00'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell Q33 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ33=='$130.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q33 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q33 is wrong");
  }

  
  $O33F=$worksheet->getCell('O33')->getValue();
  $ValueO33=$worksheet->getCell('O33')->getFormattedValue();
  $key1 = strpos($O33F,"SUM");
  $key2 = strpos($O33F,"O30");
  $key3 = strpos($O33F,"O32");
  $key4 = strpos($O33F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueO33=='17'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueO33!='17'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell O33 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueO33=='17') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell O33 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell O33 is wrong");
  }

  $P33F=$worksheet->getCell('P33')->getValue();
  $ValueP33=$worksheet->getCell('P33')->getFormattedValue();
  $key1 = strpos($P33F,"Q33");
  $key2 = strpos($P33F,"/");
  $key3 = strpos($P33F,"O33");
  $key4 = strpos($P33F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueP33=='$7.65'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueP33!='$7.65'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell P33 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueP33=='$7.65') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell P33 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell P33 is wrong");
  }


  $R33F=$worksheet->getCell('R33')->getValue();
  $ValueR33=$worksheet->getCell('R33')->getFormattedValue();
  $key3 = strpos($R27F,"Q41");

  if(($R33F=='=Q33/$Q$41'|| $key3==TRUE) && $ValueR33=='9%'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($R33F=='=Q33/$Q$41'|| $key3==TRUE) && $ValueR33!='9%'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell R33 is wrong");
  }
  elseif (($R33F!='=Q33/$Q$41' || $key3==FALSE) && $ValueR33=='9%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R33 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R33 is wrong");
  }

  
  $Q36F=$worksheet->getCell('Q36')->getValue();
  $ValueQ36=$worksheet->getCell('Q36')->getFormattedValue();
  $key1 = strpos($Q36F,"O36");
  $key2 = strpos($Q36F,"*");
  $key3 = strpos($Q36F,"P36");
  $key4 = strpos($Q36F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ36=='$375.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ36!='$375.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q36 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ36=='$375.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q36 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q36 is wrong");
  }

  

  $Q37F=$worksheet->getCell('Q37')->getValue();
  $ValueQ37=$worksheet->getCell('Q37')->getFormattedValue();
  $key1 = strpos($Q37F,"O37");
  $key2 = strpos($Q37F,"*");
  $key3 = strpos($Q37F,"P37");
  $key4 = strpos($Q37F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ37=='$200.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ37!='$200.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q37 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ37=='$200.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q37 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q37 is wrong");
  }

  
  $Q38F=$worksheet->getCell('Q38')->getValue();
  $ValueQ38=$worksheet->getCell('Q38')->getFormattedValue();
  $key1 = strpos($Q38F,"O38");
  $key2 = strpos($Q38F,"*");
  $key3 = strpos($Q38F,"P38");
  $key4 = strpos($Q38F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ38=='$100.00'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ38!='$100.00'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell Q38 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False)  && $ValueQ38=='$100.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q38 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q38 is wrong");
  }

  
  $R36F=$worksheet->getCell('R36')->getValue();
  $ValueR36=$worksheet->getCell('R36')->getFormattedValue();
  $key1 = strpos($R36F,"Q36");
  $key2 = strpos($R36F,"/");
  $key3 = strpos($R36F,"Q39");
  $key4 = strpos($R36F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR36=='56%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR36!='56%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R36 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueR36=='56%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R36 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R36 is wrong");
  }

  
  $R37F=$worksheet->getCell('R37')->getValue();
  $ValueR37=$worksheet->getCell('R37')->getFormattedValue();
  $key1 = strpos($R37F,"Q37");
  $key2 = strpos($R37F,"/");
  $key3 = strpos($R37F,"Q39");
  $key4 = strpos($R37F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR37=='30%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR37!='30%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R37 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueR37=='30%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R37 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R37 is wrong");
  }
  
  $R38F=$worksheet->getCell('R38')->getValue();
  $ValueR38=$worksheet->getCell('R38')->getFormattedValue();
  $key1 = strpos($R38F,"Q38");
  $key2 = strpos($R38F,"/");
  $key3 = strpos($R38F,"Q39");
  $key4 = strpos($R38F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR38=='15%'){
    $marks=$marks+0.5+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueR38!='15%'){
    $marks=$marks+0.5;
    array_push($array_error,"value of cell R38 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueR38=='15%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R38 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R38 is wrong");
  }

  
  $Q39F=$worksheet->getCell('Q39')->getValue();
  $ValueQ39=$worksheet->getCell('Q39')->getFormattedValue();
  $key1 = strpos($Q39F,"SUM");
  $key2 = strpos($Q39F,"Q36");
  $key3 = strpos($Q39F,"Q38");
  $key4 = strpos($Q39F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ39=='$675.00'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueQ39!='$675.00'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell Q39 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueQ39=='$675.00') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell Q39 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell Q39 is wrong");
  }

  $O39F=$worksheet->getCell('O39')->getValue();
  $ValueO39=$worksheet->getCell('O39')->getFormattedValue();
  $key1 = strpos($O39F,"SUM");
  $key2 = strpos($O39F,"O36");
  $key3 = strpos($O39F,"O38");
  $key4 = strpos($O39F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueO39=='11'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueO39!='11'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell O39 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueO39=='11') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell O39 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell O39 is wrong");
  }

  $P39F=$worksheet->getCell('P39')->getValue();
  $ValueP39=$worksheet->getCell('P39')->getFormattedValue();
  $key1 = strpos($P39F,"Q39");
  $key2 = strpos($P39F,"/");
  $key3 = strpos($P39F,"O39");
  $key4 = strpos($P39F,"$");
  if(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueP39=='$61.36'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($key1 == TRUE && $key2 == TRUE && $key3 == TRUE || $key4 == TRUE) && $ValueP39!='$61.36'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell P39 is wrong");
  }
  elseif (($key1 == FALSE || $key2 == FALSE || $key3 == FALSE || $key4 == False) && $ValueP39=='$61.36') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell P39 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell P39 is wrong");
  }

 

  $R39F=$worksheet->getCell('R39')->getValue();
  $ValueR39=$worksheet->getCell('R39')->getFormattedValue();
  $key3 = strpos($R39F,"Q41");
  if(($R39F=='=Q39/$Q$41'|| $key3==TRUE) && $ValueR39=='46%'){
    $marks=$marks+0.75+0.2;
  }
  elseif(($R39F=='=Q39/$Q$41'|| $key3==TRUE) && $ValueR39!='46%'){
    $marks=$marks+0.75;
    array_push($array_error,"value of cell R39 is wrong");
  }
  elseif (($R39F!='=Q39/$Q$41'|| $key3==FALSE) && $ValueR39=='46%') {
    $marks=$marks+0.2;
    array_push($array_error,"Formula of cell R39 is wrong");
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value and Formula of cell R39 is wrong");
  }
  $ValueQ41=$worksheet->getCell('Q41')->getFormattedValue();
  if($ValueQ41=='$1,477.50'){
    $marks=$marks+1;
  }
  else{
    $marks=$marks+0;
    array_push($array_error,"Value of cell Q41 is wrong");
  }
/*


/*














 











  /*
  for($i=9;$i<=10;$i++){
    switch($i){
      case 9:$Valuef9 = $worksheet->getCell('F9')->getFormattedValue();
             $Valuem9 = $worksheet->getCell('M9')->getFormattedValue();
             $m9F = $worksheet->getCell('M9')->getValue();
             if($Valuef9==$Valuem9 && $m9F=='=J9+L9'){
               $marks=$marks+10;
             }
             elseif($Valuef9==$Valuem9 && $m9F!='=J9+L9'){
               $marks=$marks+5;
               array_push($array_error,"Formula of cell M9 is wrong");
             }
             elseif($Valuef9!=$Valuem9 && $m9F=='=J9+L9'){
               $marks=$marks+5;
               array_push($array_error,"value of cell M9 is wrong");
             }
             else{
               $marks=$marks+0;
               array_push($array_error,"Value and Formula of cell M9 is wrong");
             }
      break;
      case 10:$Valuef10 = $worksheet->getCell('F10')->getFormattedValue();
              $Valuem10 = $worksheet->getCell('M10')->getFormattedValue();
              $m10F = $worksheet->getCell('M10')->getValue();
             if($Valuef10==$Valuem10 && $m10F=='=J10-L10'){
               $marks=$marks+10;
             }
             elseif($Valuef10==$Valuem10 && $m10F!='=J10-L10'){
               $marks=$marks+5;
               array_push($array_error,"Formula of cell M10 is wrong");
             }
             elseif($Valuef10!=$Valuem10 && $m10F=='=J10-L10'){
               $marks=$marks+5;
               array_push($array_error,"Value of cell M10 is wrong");
             }
             else{
               $marks=$marks+0;
               array_push($array_error,"Value and Formula of cell M10 is wrong");
             }
      break;
    }

  }
*/
 // Code for writing marks inside the excel sheet;
/*  $eobj->setActiveSheetIndex(0);
  $eobj->getSheet(0)->setCellValue('A1',$marks);
  $writer = IOFactory::createWriter($eobj,$inputFileType);
  $writer->save($filePath); */

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
?>
