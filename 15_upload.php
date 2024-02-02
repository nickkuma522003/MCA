<?php
    // echo '<pre>';
    // print_r($_FILES);

    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];


    move_uploaded_file($filetmp, 'aaa/'.$filename);
    echo "FILE UPLOADED";
?>