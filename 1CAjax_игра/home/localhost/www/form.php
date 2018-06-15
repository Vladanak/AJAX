<?php 
header('Content-Type: text/html; charset= utf-8');
$count = 0;
if(isset($_POST['One']))
{
$answer1 = $_POST['One'];
if($answer1=="3"){
    $count++;
}
}
if(isset($_POST['Two']))
{
$answer2 = $_POST['Two'];
if($answer2=="3"){
    $count++;
}
}
if(isset($_POST['Three']))
{
$answer3 = $_POST['Three'];
if($answer3=="1"){
    $count++;
}
}
if(isset($_POST['Four']))
{
$answer4 = $_POST['Four'];
if($answer4=="4"){
    $count++;
}
}
if(isset($_POST['Five']))
{
$answer5 = $_POST['Five'];
if($answer5=="1"){
    $count++;
}
}
if(isset($_POST['Six']))
{
$answer6 = $_POST['Six'];
if($answer6=="1"){
    $count++;
}
}
if(isset($_POST['Seven']))
{
$answer7 = $_POST['Seven'];
if($answer7=="4"){
    $count++;
}
}
if(isset($_POST['Eight']))
{
$answer8 = $_POST['Eight'];
if($answer8=="1"){
    $count++;
}
}
if(isset($_POST['Nine']))
{
$answer9 = $_POST['Nine'];
if($answer9=="2"){
    $count++;
}
}
if(isset($_POST['Ten']))
{
$answer10 = $_POST['Ten'];
if($answer10=="2"){
    $count++;
}
}
echo $count;
?>