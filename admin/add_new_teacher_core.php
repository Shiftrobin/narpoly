<?php
// Include the database configuration file
include 'dbcon.php';
//$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$file_name = basename($_FILES["file_name"]["name"]);
$targetFilePath = $targetDir . $file_name;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["AddNewTeacherBtn"]) && !empty($_FILES["file_name"]["name"])){

    $name = $_POST['name'];
    $title = $_POST['title'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file_name"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $connect->query("INSERT into teachers_tbl (name,title,file_name,phone,email,uploaded_on) VALUES ('".$name."','".$title."','".$file_name."','".$phone."','".$email."',NOW())");
            if($insert){
                //$statusMsg = "The file ".$file_name. " has been uploaded successfully.";
                header('location: teachers_list.php?action=uploaded');
            }else{
               //$statusMsg = "File upload failed, please try again.";
                 header('location: teachers_list.php?action=tryagain');
            } 
        }else{
           // $statusMsg = "Sorry, there was an error uploading your file.";
             header('location: teachers_list.php?action=error');
        }
    }else{
        //$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header('location: teachers_list.php?action=filesallowed');
    }
}else{
   // $statusMsg = 'Please select a file to upload.';
    header('location: teachers_list.php?action=selectfile');
}

// Display status message
//echo $statusMsg;
?>