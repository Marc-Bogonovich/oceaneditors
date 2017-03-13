<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Collecting the username from the url
$usernameGET = $_GET['username'];

// https://www.w3schools.com/php/php_mysql_select.asp
//One way of connecting to the db

$servername1 = "localhost"; //:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????
$db = "oceanedi_db";

//Alternative connection and SQL query attempt
mysql_connect($servername1, $usernamedb, $password);
Mysql_select_db("oceanedi_db");

?>