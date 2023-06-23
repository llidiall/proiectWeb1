<?php
function died($error)
{
    echo "We are very sorry, but there were errors found with the form you submitted.";
    echo "These errors appear below.<br/><br/>";
    echo "$error. <br/><br/>";
    echo "Please go back and fix these errors.<br/><br/>";
}
if(!isset($_POST['text']) || !isset($_POST['captcha']))
{
    died("We are very sorry, but there appears to be a problem with the form you submitted");
}
$text = $_POST['text'];
$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];
$error_message="";
if(!isset($_POST['captcha']))
    $error_message = "Please enter the captcha!<br/>";
 else if($_POST['captcha'] != $_POST['correctsum'])
 {
     $error_message.="The sum is not correct! Please add again.<br>";
 }
 else
 {
    $msg = 1;
    echo "The sum is correct!";
 }
 if(strlen($error_message) > 0)
 {
     died($error_message);
 }
?>
