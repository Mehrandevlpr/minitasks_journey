<?php
session_start();
 $msg=null;

if($_SERVER["REQUEST_METHOD"] == 'POST'){
     if(isset($_POST['btn']) && $_POST['btn'] == 'Upload'){
       if(isset($_FILES['uploadFile']) && !empty($_FILES['uploadFile']) && $_FILES['uploadFile']['error']==0 ) {
    
           print_r($_FILES);
            $FileTempPath = $_FILES['uploadFile']['tmp_name'];
            $FileName = $_FILES['uploadFile']['name'];
            $FileType = $_FILES['uploadFile']['type'];
            $FileExpload = explode('.', $FileName);
            $FileExten = strtolower(end($FileExpload));
            $FileUploadName = md5(time() . $FileName) . '.' . $FileExten;
            $awlloedtoUpload = ['jpg', 'png','gif'];
             if(in_array($FileExten, $awlloedtoUpload)) {
                $FileUploadWhere = 'upload/';
                $dest = $FileUploadWhere . $FileUploadName;
                if (move_uploaded_file($FileTempPath, $dest)) {
                    $msg = 'You Done It successfully';
                } else {
                    $msg = "Uploading Was Faild!!!!!";
                }
             
                }else{
                $msg = "Please Enter Valid File!!!!!";
                }

        }else{
            $msg = "Error Please Enter File!!!!";
        }
     }
}
$_SESSION['msg'] = $msg;
header("location:index.php");