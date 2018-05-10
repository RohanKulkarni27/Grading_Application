<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
function getgrade3($eobj,$number,$inputFileType,$filePath){
  $worksheet = $eobj->getSheet($number);
  $marks=0;
  $str;
  $index=$number;
  $array_error = array();

  $X25F=$worksheet->getCell('X25')->getValue();
  if($X25F=='=COUNTIFS(data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+1;
  }
 
  elseif($X25F=='=COUNTIFS(data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.75;
  }
  elseif($X25F!='=COUNTIFS(data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X25 is wrong");
  }
  elseif($X25F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X25 is empty");
  }

  $X26F=$worksheet->getCell('X26')->getValue();
  if($X26F=='=COUNTIFS(data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }

  elseif($X26F=='=COUNTIFS(data[Sub-category],W26, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X26F!='=COUNTIFS(data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X26 is wrong");
  }
  elseif($X26F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X26 is empty");
  }

  $X27F=$worksheet->getCell('X27')->getValue();
  if($X27F=='=COUNTIFS(data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($X27F=='=COUNTIFS(data[Sub-category],W27, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X27F!='=COUNTIFS(data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X27 is wrong");
  }
  elseif($X27F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X27 is empty");
  }

  $X28F=$worksheet->getCell('X28')->getValue();
  if($X28F=='=COUNTIFS(data[Category],W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($X28F=='=COUNTIFS(data[Sub-category],W28, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X28F!='=COUNTIFS(data[Category],W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X28 is wrong");
  }
  elseif($X28F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X28 is empty");
  }

  $Y25F=$worksheet->getCell('Y25')->getValue();
  if($Y25F=='=AVERAGEIFS(data[Amount],data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($Y25F=='=AVERAGEIFS(data[Amount],data[Sub-category],W25,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y25F!='=AVERAGEIFS(data[Amount],data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y25 is wrong");
  }
  elseif($Y25F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y25 is empty");
  }

  $Y26F=$worksheet->getCell('Y26')->getValue();
  if($Y26F=='=AVERAGEIFS(data[Amount],data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($Y26F=='=AVERAGEIFS(data[Amount],data[Sub-category],W26,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y26F!='=AVERAGEIFS(data[Amount],data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y26 is wrong");
  }
  elseif($Y26F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y26 is empty");
  }

  $Y27F=$worksheet->getCell('Y27')->getValue();
  if($Y27F=='=AVERAGEIFS(data[Amount],data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
 
  elseif($Y27F=='=AVERAGEIFS(data[Amount],data[Sub-category],W27,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y27F!='=AVERAGEIFS(data[Amount],data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y27 is wrong");
  }
  elseif($Y27F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y27 is empty");
  }

  $Y28F=$worksheet->getCell('Y28')->getValue();
  if($Y28F=='=AVERAGEIFS(data[Amount],data[Category],W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }

  elseif($Y28F=='=AVERAGEIFS(data[Amount],data[Category],W28,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y28F!='=AVERAGEIFS(data[Amount],data[Category],W28,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y28 is wrong");
  }
  elseif($Y28F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y28 is empty");
  }

  $Z25F=$worksheet->getCell('Z25')->getValue();
  if($Z25F=='=SUMIFS(data[Amount],data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($Z25F=='=SUMIFS(data[Amount],data[Sub-category],W25,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z25F!='=SUMIFS(data[Amount],data[Sub-category],W25,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z25 is wrong");
  }
  elseif($Z25F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z25 is empty");
  }

  $Z26F=$worksheet->getCell('Z26')->getValue();
  if($Z26F=='=SUMIFS(data[Amount],data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($Z26F=='=SUMIFS(data[Amount],data[Sub-category],W26,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z26F!='=SUMIFS(data[Amount],data[Sub-category],W26,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z26 is wrong");
  }
  elseif($Z26F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z26 is empty");
  }

  $Z27F=$worksheet->getCell('Z27')->getValue();
  if($Z27F=='=SUMIFS(data[Amount],data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }
  elseif($Z27F=='=SUMIFS(data[Amount],data[Sub-category],W27,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z27F!='=SUMIFS(data[Amount],data[Sub-category],W27,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z27 is wrong");
  }
  elseif($Z27F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z27 is empty");
  }

  $Z28F=$worksheet->getCell('Z28')->getValue();
  if($Z28F=='=SUMIFS(data[Amount],data[Category],W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.75;
  }

  elseif($Z28F=='=SUMIFS(data[Amount],data[Category],$W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z28F!='=SUMIFS(data[Amount],data[Category],W28,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z28 is wrong");
  }
  elseif($Z28F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z28 is empty");
  }


  $X31F=$worksheet->getCell('X31')->getValue();
  if($X31F=='=COUNTIFS(data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X31F=='=COUNTIFS(data[Sub-category],W31, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X31F!='=COUNTIFS(data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X31 is wrong");
  }
  elseif($X31F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X31 is empty");
  }


  $X32F=$worksheet->getCell('X32')->getValue();
  if($X32F=='=COUNTIFS(data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X32F=='=COUNTIFS(data[Sub-category],W32, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X32F!='=COUNTIFS(data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X32 is wrong");
  }
  elseif($X32F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X32 is empty");
  }

  $X33F=$worksheet->getCell('X33')->getValue();
  if($X33F=='=COUNTIFS(data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X33F=='=COUNTIFS(data[Sub-category],W33, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X33F!='=COUNTIFS(data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X33 is wrong");
  }
  elseif($X33F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X33 is empty");
  }

  $X34F=$worksheet->getCell('X34')->getValue();
  if($X34F=='=COUNTIFS(data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X34F=='=COUNTIFS(data[Category],W34,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X34F!='=COUNTIFS(data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X34 is wrong");
  }
  elseif($X34F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X34 is empty");
  }

  $Y31F=$worksheet->getCell('Y31')->getValue();
  if($Y31F=='=AVERAGEIFS(data[Amount],data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y31F=='=AVERAGEIFS(data[Amount],data[Sub-category],W31,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y31F!='=AVERAGEIFS(data[Amount],data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y31 is wrong");
  }
  elseif($Y31F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y31 is empty");
  }

  $Y32F=$worksheet->getCell('Y32')->getValue();
  if($Y32F=='=AVERAGEIFS(data[Amount],data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y32F=='=AVERAGEIFS(data[Amount],data[Sub-category],W32,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y32F!='=AVERAGEIFS(data[Amount],data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y32 is wrong");
  }
  elseif($Y32F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y32 is empty");
  }

  $Y33F=$worksheet->getCell('Y33')->getValue();
  if($Y33F=='=AVERAGEIFS(data[Amount],data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y33F=='=AVERAGEIFS(data[Amount],data[Sub-category],W33,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y33F!='=AVERAGEIFS(data[Amount],data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y33 is wrong");
  }
  elseif($Y33F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y33 is empty");
  }

  $Y34F=$worksheet->getCell('Y34')->getValue();
  if($Y34F=='=AVERAGEIFS(data[Amount],data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y34F=='=AVERAGEIFS(data[Amount],data[Category],W34,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y34F!='=AVERAGEIFS(data[Amount],data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y34 is wrong");
  }
  elseif($Y34F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y34 is empty");
  }


  $Z31F=$worksheet->getCell('Z31')->getValue();
  if($Z31F=='=SUMIFS(data[Amount],data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z31F=='=SUMIFS(data[Amount],data[Sub-category],W31,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z31F!='=SUMIFS(data[Amount],data[Sub-category],W31,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z31 is wrong");
  }
  elseif($Z31F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z31 is empty");
  }

  $Z32F=$worksheet->getCell('Z32')->getValue();
  if($Z32F=='=SUMIFS(data[Amount],data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z32F=='=SUMIFS(data[Amount],data[Sub-category],W32,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z32F!='=SUMIFS(data[Amount],data[Sub-category],W32,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z32 is wrong");
  }
  elseif($Z32F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z32 is empty");
  }

  $Z33F=$worksheet->getCell('Z33')->getValue();
  if($Z33F=='=SUMIFS(data[Amount],data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z33F=='=SUMIFS(data[Amount],data[Sub-category],W33,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z33F!='=SUMIFS(data[Amount],data[Sub-category],W33,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z33 is wrong");
  }
  elseif($Z33F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z33 is empty");
  }

  $Z34F=$worksheet->getCell('Z34')->getValue();
  if($Z34F=='=SUMIFS(data[Amount],data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z34F=='=SUMIFS(data[Amount],data[Category],$W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z34F!='=SUMIFS(data[Amount],data[Category],W34,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z34 is wrong");
  }
  elseif($Z34F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z34 is empty");
  }


  $X37F=$worksheet->getCell('X37')->getValue();
  if($X37F=='=COUNTIFS(data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X37F=='=COUNTIFS(data[Sub-category],W37, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X37F!='=COUNTIFS(data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X37 is wrong");
  }
  elseif($X37F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X37 is empty");
  }

  $X38F=$worksheet->getCell('X38')->getValue();
  if($X38F=='=COUNTIFS(data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X38F=='=COUNTIFS(data[Sub-category],W38, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X38F!='=COUNTIFS(data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X38 is wrong");
  }
  elseif($X38F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X38 is empty");
  }

  $X39F=$worksheet->getCell('X39')->getValue();
  if($X39F=='=COUNTIFS(data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X39F=='=COUNTIFS(data[Sub-category],W39, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X39F!='=COUNTIFS(data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X39 is wrong");
  }
  elseif($X39F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X39 is empty");
  }

  $X40F=$worksheet->getCell('X40')->getValue();
  if($X40F=='=COUNTIFS(data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($X40F=='=COUNTIFS(data[Sub-category],W40, data[Date], ">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($X40F!='=COUNTIFS(data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X40 is wrong");
  }
  elseif($X40F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X40 is empty");
  }

  $Y37F=$worksheet->getCell('Y37')->getValue();
  if($Y37F=='=AVERAGEIFS(data[Amount],data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y37F=='=AVERAGEIFS(data[Amount],data[Sub-category],W37,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y37F!='=AVERAGEIFS(data[Amount],data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y37 is wrong");
  }
  elseif($Y37F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y37 is empty");
  }

  $Y38F=$worksheet->getCell('Y38')->getValue();
  if($Y38F=='=AVERAGEIFS(data[Amount],data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y38F=='=AVERAGEIFS(data[Amount],data[Sub-category],W38,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y38F!='=AVERAGEIFS(data[Amount],data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y38 is wrong");
  }
  elseif($Y38F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y38 is empty");
  }

  $Y39F=$worksheet->getCell('Y39')->getValue();
  if($Y39F=='=AVERAGEIFS(data[Amount],data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y39F=='=AVERAGEIFS(data[Amount],data[Sub-category],W39,data[Date],">="&15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y39F!='=AVERAGEIFS(data[Amount],data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y39 is wrong");
  }
  elseif($Y39F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y39 is empty");
  }

  $Y40F=$worksheet->getCell('Y40')->getValue();
  if($Y40F=='=AVERAGEIFS(data[Amount],data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Y40F=='=AVERAGEIFS(data[Amount],data[Category],W40,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Y40F!='=AVERAGEIFS(data[Amount],data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y40 is wrong");
  }
  elseif($Y39F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y40 is empty");
  }

  $Z37F=$worksheet->getCell('Z37')->getValue();
  if($Z37F=='=SUMIFS(data[Amount],data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z37F=='=SUMIFS(data[Amount],data[Sub-category],W37,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z37F!='=SUMIFS(data[Amount],data[Sub-category],W37,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z37 is wrong");
  }
  elseif($Z37F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z37 is empty");
  }

  $Z38F=$worksheet->getCell('Z38')->getValue();
  if($Z38F=='=SUMIFS(data[Amount],data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z38F=='=SUMIFS(data[Amount],data[Sub-category],W38,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z38F!='=SUMIFS(data[Amount],data[Sub-category],W38,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z38 is wrong");
  }
  elseif($Z38F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z38 is empty");
  }

  $Z39F=$worksheet->getCell('Z39')->getValue();
  if($Z39F=='=SUMIFS(data[Amount],data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z39F=='=SUMIFS(data[Amount],data[Sub-category],W39,data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z39F!='=SUMIFS(data[Amount],data[Sub-category],W39,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z39 is wrong");
  }
  elseif($Z39F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z39 is empty");
  }

  $Z40F=$worksheet->getCell('Z40')->getValue();
  if($Z40F=='=SUMIFS(data[Amount],data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.50;
  }
  elseif($Z40F=='=SUMIFS(data[Amount],data[Category],$W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0.25;
  }
  elseif($Z40F!='=SUMIFS(data[Amount],data[Category],W40,data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z40 is wrong");
  }
  elseif($Z40F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z40 is empty");
  }

  $X42F=$worksheet->getCell('X42')->getValue();
  if($X42F=='=COUNTIFS(data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+1.25;
  }
  elseif($X42F=='=COUNTIFS(data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+0.75;
  }
  elseif($X42F!='=COUNTIFS(data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X42 is wrong");
  }
  elseif($X42F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell X42 is empty");
  }

  $Y42F=$worksheet->getCell('Y42')->getValue();
  if($Y42F=='=AVERAGEIFS(data[Amount],data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+1.25;
  }

  elseif($Y42F=='=AVERAGEIFS(data[Amount],data[Date],">="&X15,data[Date],"<="&X$16)'){
    $marks=$marks+1.00;
  }
  elseif($Y42F!='=AVERAGEIFS(data[Amount],data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y42 is wrong");
  }
  elseif($Y42F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Y42 is empty");
  }

  $Z42F=$worksheet->getCell('Z42')->getValue();
  if($Z42F=='=SUMIFS(data[Amount],data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+1.25;
  }
 
  elseif($Z42F=='SUMIFS(data[Amount],data[Date],">="&X$15,data[Date],"<="&X$16)'){
    $marks=$marks+1.00;
  }
  
  elseif($Z42F!='=SUMIFS(data[Amount],data[Date],">="&$X$15,data[Date],"<="&$X$16)'){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z42 is wrong");
  }
  elseif($Z42F==''){
    $marks=$marks+0;
    array_push($array_error,"Formula of cell Z42 is empty");
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
 ?>
