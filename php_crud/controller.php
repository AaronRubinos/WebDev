<?php

    include("includes/sqlconnection.php");

    if(isset($_POST['save_record'])){

        $studname = $_POST['txtname'];
        $contact= $_POST['txtcontact'];
        $email = $_POST['txtemail'];
        $pic =$_FILES['txtpic']['name'];

        $sql ="INSERT INTO tbl_studentinformation(fullname,contact,email,pic)VALUES('$studname','$contact','$email','$pic')";

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
        }
        else{
            $conn->close();
        }

    }
    else{

    }

?>