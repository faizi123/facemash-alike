<?php

// START 2

    $con=mysqli_connect("localhost","root","","Facemash2");
    if($con)
    {

    }
    else{
        echo "Error : Database not connected";
    }

if (isset($_POST['done']))
{
    $folder = 'images/';
    $ext = '.jpg';
    $photo = $mysqli->real_escape_string($_POST['photo']);
    $mysqli->query('
    INSERT INTO photos
    SET token = "' . md5($photo . 'Facemash2') . '",
        photo = "' . $photo . '",
        path = "' . $folder . strtolower($photo) . $ext . '"');

    header ('Location: add.php');
    exit;
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Nom de l'image" />
    <button type="submit" name="done">Add</button>
</form>
<!-- END 2 -->