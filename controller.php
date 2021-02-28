<?php
$email=$_post['umail'];
$text=$_post['upass'];
$con=new mysqli("localhost","root","","login");
$sql="insert into user(EMAIL,PASSWORD)values('$email','$text')";
$con->query($sql);
?>