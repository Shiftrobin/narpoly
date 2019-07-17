<?php
// Include the database configuration file
include 'dbcon.php';
//$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$file_name = basename($_FILES["gallery_num"]["name"]);
$targetFilePath = $targetDir . $file_name;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["AddNewGalleryBtn"]) && !empty($_FILES["gallery_num"]["name"])){

    $gallery_name = $_POST['gallery_name']; 

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["gallery_num"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $connect->query("INSERT into gallery_tbl (gallery_name,gallery_num) VALUES ('".$gallery_name."','".$file_name."')");
            if($insert){
                //$statusMsg = "The file ".$file_name. " has been uploaded successfully.";
                header('location: gallery_list.php?action=uploaded');
            }else{
               //$statusMsg = "File upload failed, please try again.";
                 header('location: gallery_list.php?action=tryagain');
            } 
        }else{
           // $statusMsg = "Sorry, there was an error uploading your file.";
             header('location: gallery_list.php?action=error');
        }
    }else{
        //$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header('location: gallery_list.php?action=filesallowed');
    }
}else{
   // $statusMsg = 'Please select a file to upload.';
    header('location: gallery_list.php?action=selectfile');
}

// Display status message
//echo $statusMsg;
?>