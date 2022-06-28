<?php 

require_once "../../utils/db.php";

// dump($_POST);<?php
$id = $_POST['id'];

$sql = "DELETE FROM `students` WHERE `students`.`id` = $id;";

if ($conn->query($sql) == TRUE) {
    // die("SUCESS");
    header('Location:../../?sucess=success');
    // echo "<p>Sucess</p>";
} else {
    header('Location:../../?success=error');
}
?>