<?php

session_start();


include("db_config.php");

$page_title = "Ajout utilisateur";

include("header.php");


if (!isset($_POST["login"]) || !isset($_POST["password"]) ||
	!isset($_POST["password2"])||!isset($_POST["fname"])||!isset($_POST["lname"])|| !isset($_POST["age"]) ||
	empty($_POST["login"])||empty($_POST["password"]) || 
	empty($_POST["fname"])||empty($_POST["lname"]) ||empty($_POST["age"]) ){

		// echo "<p class='center'>SVP Remplissez le formulaire</p>";
		include("reg_form.php");
	 	exit();
}


if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
  $status = "Votre code captcha est correct."; 
}else{
  $status = "<div class='alert alert-danger center' role='alert'> Le code captcha entré ne correspond pas! Veuillez réessayer.</div>";
  echo $status;
  include("reg_form.php");
  exit();
}

if ($_POST["password"] != $_POST["password2"]){
	echo "<p>Mots de passe différents\n";
	include("reg_form.php");
	include("footer.php");
	exit();
}

$login = $db->quote(($_POST["login"]));
$passwd = $db->quote(password_hash($_POST["password"], PASSWORD_DEFAULT));
$lname = $db->quote(($_POST["lname"]));
$fname = $db->quote(($_POST["fname"]));
$age = $db->quote(($_POST["age"]));

$SQL = "SELECT ID FROM users WHERE login=$login";
$res = $db->query($SQL);
if ($res && $res->rowCount()>0) 
{
	echo"<div class='alert alert-danger center' role='alert'> Le login existe déjà! Veuillez choisissez un autre login.</div>";
	include("reg_form.php"); 
	include("footer.php");
	exit(); 
}

// $passwd = password_hash($passwd, PASSWORD_DEFAULT);

$SQL = "INSERT INTO `user` (`login`, `password`, `first_name`, `last_name`, `age`, `id`) 
	VALUES ($login, $passwd, $fname, $lname, $age, NULL)";
$res = $db->query($SQL);

if (!$res) {
	echo"<div class='alert alert-danger center' role='alert'> "+  $db->errorInfo()[2] +"</div>";
	exit();
}

echo "<div class='alert alert-success center' role='alert'> Utilisateur $login ajouté.</div>";
$SQL = "SELECT * FROM user";
include("reg_form.php"); 


?>