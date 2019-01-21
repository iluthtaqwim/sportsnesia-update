<?php
$email=$_POST['email'];


@mail($to,$subject,$message,$headers);
?>