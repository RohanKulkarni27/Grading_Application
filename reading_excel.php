<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
include 'Functions/sheet1.php';
include 'Functions/sheet2.php';
include 'Functions/sheet3.php';


// Create a new Reader of the type defined in $inputFileType

$inputFileType = 'Xlsx';
$reader = IOFactory::createReader($inputFileType,'HTML');

function tryfunction($filePath,$uname){
// Load $inputFileName to a PhpSpreadsheet Object
global $reader;
$spreadsheet = $reader->load($filePath);
$sheetCount = $spreadsheet->getSheetCount();

$worksheet=$spreadsheet->getSheet(0);
$uname_cell=$worksheet->getCell('B1')->getValue();
$image=$worksheet->getDrawingCollection();

if($uname_cell==$uname){
echo "<form enctype='multipart/form-data'  action='' method='post'>";
echo "<span>Select the assignment to be graded:</span>";
echo "<select name='selected_sheet'>";
for($i=1;$i<$sheetCount;$i++){
  echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";
echo '<input type="text" value="'.$filePath.'" name="filepath" style="display:none;">';
echo '<input type="text" value="'.$uname.'" name="username" style="display:none;">';
echo "<input type='submit' name='grade' value='Grade'>";
echo "</form>";

/*$verdict=getgrade1($spreadsheet,'2',$inputFileType,$filePath);
echo $verdict;
echo '<form target="_blank" action="Login.php" method="get">';
echo "<input type='hidden' value='{$uname_cell}' name='User_Name'> ";
echo '<input type="submit" value="Submit Grade" name="Submit_Grade">';
echo '</form>';*/
}
else{
echo "The file cannot be graded since the file doesnot belong to student with id:".$uname;
}

}

if(isset($_POST['grade'])){
  global $reader;
  global $inputFileType;
  $filePath = $_POST['filepath'];
  $uname_cell = $_POST['username'];
  $selected_sheet = $_POST['selected_sheet'];
  $spreadsheet = $reader->load($filePath);
  if($selected_sheet==1){
      $verdict=getgrade1($spreadsheet,$selected_sheet,$inputFileType,$filePath);
  }
  elseif($selected_sheet==2){
    $verdict=getgrade2($spreadsheet,$selected_sheet,$inputFileType,$filePath);
  }
  elseif($selected_sheet==3){
    $verdict=getgrade3($spreadsheet,$selected_sheet,$inputFileType,$filePath);
  }
  else{
    echo "Exercise not found";
  }
  echo $verdict;
  echo '<form target="_blank" action="Login.php" method="get">';
  echo "<input type='hidden' value='{$uname_cell}' name='User_Name'> ";
  echo '<input type="submit" value="Submit Grade" name="Submit_Grade">';
  echo '</form>';
}
/*
if($uname_cell==$uname){
  for ($x = 2; $x <= $sheetCount; $x++) {

      switch($x){
        case 2: $verdict=getgrade1($spreadsheet,$x,$inputFileType,$filePath);
                echo $verdict;
        break;
        case 3:$verdict=getgrade2($spreadsheet,$x,$inputFileType);
             echo "<br>".$verdict;
        break;
      }
  }
    echo '<form target="_blank" action="Login.php" method="get">';
    echo "<input type='hidden' value='{$uname_cell}' name='User_Name'> ";
    echo '<input type="submit" value="Submit Grade" name="Submit_Grade">';
    echo '</form>';
}
else{
  echo "The file cannot be graded since the file doesnot belong to student with id:".$uname;
}
*/


/*
$spreadsheet->setActiveSheetIndex(0);
$spreadsheet->getSheet(0)->setCellValue('A1',$verdict1);
$writer = IOFactory::createWriter($spreadsheet,$inputFileType);
$writer->save("Workbook1.xlsx");
*/



/*
$worksheet = $spreadsheet->getSheet(0);
$Valuem9 = $worksheet->getCell('M9')->getFormattedValue();
$m9F = $worksheet->getCell('M9')->getValue();

echo "Value".$Valuem9;
echo "Formula".$m9F;
*/


 ?>
