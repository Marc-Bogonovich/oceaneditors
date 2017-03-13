<?php

//One way of connecting to the db
$servername1 = "localhost:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????


$conn = mysql_connect($servername1, $usernamedb, $password);
$db = mysql_select_db("oceanedi_db",$conn);

?>




<?php

# http://stackoverflow.com/questions/8651170/apostrophe-during-insert-mysql
# Do we use htmlspecialchars() ???

$username = $_POST['username'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = mysql_real_escape_string($_POST['description']);
$fields =  mysql_real_escape_string($_POST['fields']);
$email = $_POST['email'];
$timestamp = $_POST['timestamp'];
$turn_aroundtime = $_POST['turn_aroundtime'];
$visible_editor = 0;
$visible_director = 0;

$sql = "INSERT into editors values('$username','$company','$price','$description','$fields','$email','$timestamp','$turn_aroundtime','$visible_editor','$visible_director')";
# mysql_query();
$qury = mysql_query($sql);

if(!$qury)
  echo mysql_error();
else
  echo "Successfully Inserted";

#testing
echo $description;
echo $username;

?>