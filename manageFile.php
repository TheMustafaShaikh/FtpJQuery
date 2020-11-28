<?php

    if(isset($_FILES['file']["name"])){
        $file = $_FILES['file']["name"];
        move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file);
        echo "worked!";
    }

?>
