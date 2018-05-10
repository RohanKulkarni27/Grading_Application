<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <form  enctype="multipart/form-data"  action="" method="post">
    <div class="container">
      <h1>Grade your assignment</h1>
      <div class="instruction">
        <ul>
          <li>Upload the excel(.xlsx) file</li>
          <li>Click on the grade</li>
          <li>Rules of grading
            <ol><li>For each correct formula and value,you get 10 points</li>
              <li>For each correct formula and wrong value, you get 5 points</li>
              <li>For each correct value and wrong formula, you get 5 points</li>
              <li>For wrong value and formula, you get 0 point</li>
            </ol>
          </li>
        </ul>
      </div>
      <div class="innerDiv">
        <div><input name="uploadedfile" type="file" /></div>
        <div><span>Enter your username:</span><input type="text" name="UserName"><span> (example:- rk72756n) </span></div>
        <div><input type="submit" name="upload" value="Upload"></div>
    </div>
    </div>
  </form>

</body>
</html>

<?php
include 'reading_excel.php';
if(isset($_POST['upload'])){
 $val = $_FILES['uploadedfile']['name'];
 $uname = $_POST['UserName'];
    if($val!=""){
      $targetpath='Uploads/';
      $targetpath=$targetpath.basename($_FILES['uploadedfile']['name']);

      if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $targetpath)) {
        echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
      } else {
        echo "There was an error uploading the file, please try again!";
      }

      tryfunction($targetpath,$uname);
    }else{
      echo "Please select a file to upload";
    }

  //tryfunction($val,$uname);
  }  //if(isset($_FILES['image'])){

?>
