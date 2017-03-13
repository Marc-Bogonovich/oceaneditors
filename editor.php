<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ContactEditor</title>

<link href="https://fonts.googleapis.com/css?family=Nunito|Raleway|Lora|Merriweather" rel="stylesheet">

<style>
  #record1 {
    position: absolute;
    top: 4em;
    height: auto; // 20%;
    font-size:20px;
    color: #23505e;
    font-family: 'Lora', serif;
    text-align: left;
    margin-top: 3em;
    border: 2px solid #23505E;

    width: 88%;
    margin-left: 5%;

//ROUNDED CORNERS
/* http://stackoverflow.com/questions/6484820/rounded-corners-on-divs-with-background-color */
padding: 0px;
-moz-border-radius: 20px 20px 20px 20px;
border-radius: 20px 20px 20px 20px;

border-top-left-radius: 20px
border-top-right-radius: 20px
/* For backward compatibility with old Mozilla browsers you should also use: */
-moz-border-radius-topleft: 20px
-moz-border-radius-topright: 20px
/* And for old versions of WebKit browsers (Safari, mainly), you can use: */
-webkit-border-top-left-radius: 20px
-webkit-border-top-right-radius: 20px
//END ROUNDED CORNERS

//Internal padding around text
padding-top: 1%;
padding-right: 1%;
padding-bottom: 1%;
padding-left: 1%;
  }

  ul {
    display: inline-block;
    vertical-align: top;
    padding-left: 0;
  }
  li {
    list-style: none;
  }

  #editors {
      border: 2px solid #23505E;
      height: auto;
      margin-top: 1em;

    //ROUNDED CORNERS
/* http://stackoverflow.com/questions/6484820/rounded-corners-on-divs-with-background-color */
padding: 0px;
-moz-border-radius: 20px 20px 20px 20px;
border-radius: 20px 20px 20px 20px;

border-top-left-radius: 20px
border-top-right-radius: 20px
/* For backward compatibility with old Mozilla browsers you should also use: */
-moz-border-radius-topleft: 20px
-moz-border-radius-topright: 20px
/* And for old versions of WebKit browsers (Safari, mainly), you can use: */
-webkit-border-top-left-radius: 20px
-webkit-border-top-right-radius: 20px
//END ROUNDED CORNERS

//Internal padding around text
padding-top: 1%;
padding-right: 1%;
padding-bottom: 1%;
padding-left: 1%;






/*CONTACT FORM CODE. I used the following tutorial:
http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/
*/

label {
    /*This line arranges the entire form into a block, by placing the labels in a block*/
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}

/* Centre the page */
.body {
    display:block;
    margin:0 auto;
    width:576px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
}

/* Style the text boxes */
input, textarea {
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

textarea {
	height:213px;
}

input, textarea {
    width:439px;
    /*height:27px;*/
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

/*honestly, not sure what this is doing*/
input:focus, textarea:focus {
    border:1px solid #97d6eb;
}

#submit {
    width:127px;
    height:38px;
    text-indent:0px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}

	#submit:hover {
	    opacity:.9;
	}

/*END CONTACT FORM CODE*/






  }

</style>
</head>

<body>

<!--
//<?php
//echo "Testing...<br>";
//$var1 = $_GET['username'];
//echo $var1 . "<br>";
//?>
-->

<h1> Step 2: Contact an Editor</h1>





<!--MAKE A CONNECTION TO THE DB BASED ON THE username GET PARAMETER-->
<?php

// Collecting the username from the url
$usernameGET = $_GET['username'];


// https://www.w3schools.com/php/php_mysql_select.asp
//One way of connecting to the db
$servername1 = "localhost"; //:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????
$db = "oceanedi_db";


// This method of connection also works, but used the second method
////$conn = new mysqli($servername1, $usernamedb, $password, $db);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//
//// Query based on $usernameGET
//$sql = "SELECT username, fields, visible_editor, visible_director, price, turn_aroundtime, name, description FROM editors WHERE username = '" . $usernameGET . "'";
//$result = $conn->query($sql);
//
//echo "<b>need to work on this part here</b><br>";
//echo $sql;
//
////$row = mysql_fetch_assoc($sql);
//
//// Here, I'm not exactly sure what is happening
//if ($result->num_rows > 0) {
//while ($row = $result->fetch_assoc()){
//echo "<br>" . $row["name"] . "<br>";
//}
//}


//Alternative connection and SQL query attempt
mysql_connect($servername1, $usernamedb, $password);
Mysql_select_db("oceanedi_db");

//TEST
//$TESTTT = "price";
//$sqlstring2 = "SELECT * FROM editors WHERE ". $TESTTT ." = 40 ORDER BY username ASC"; // "SELECT * FROM editors WHERE username = " . $usernameGET . " ORDER BY username ASC";
//END TEST
$sqlstring = "SELECT * FROM editors WHERE username = '" . $usernameGET . "' ORDER BY username ASC";
//TEST
//echo $sqlstring . "<br>";
//END TEST
$sql = mysql_query($sqlstring); //"SELECT * FROM editors WHERE username = " . $usernameGET . " ORDER BY username ASC");
$row = mysql_fetch_assoc($sql);
//TEST
//echo "<br><br>" . $row["username"] . "<br>";
//END TEST





echo "
  <div id= 'record1' style=\"position: absolute; top: 1em;\">
     <ul>
       <li id= 'username'>Username: <b>". $row["username"] ."</b></li>
       <li id= 'name'>Name: <b>". $row["name"] ."</b></li>
       <li id= 'turnaround'>Turnaround Time: <b>". $row["turn_aroundtime"] ."</b> days </li>
       <li id= 'field'>Fields: <b>". $row["fields"] ."</b></li>
       <li id= 'lastlogin'>Last Login Time: 1 day</li>
       <li id= 'price'>Price per 1000 words: <b>$". $row["price"] ."</b></li>
       <br>
       <li id= 'description'>Description: <b>". $row["description"] ."</b></li>
     </ul>
     &nbsp
  </div>

";

?>
















<div id= 'record1' style="position: absolute; top: 20em;">

<p style="font-size: 24px;"><b>Contact Editor</b> Please use this form to contact this editor.</p><br>






<!--CONTACT FORM CODE. I used the following tutorial:
http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/ -->

    <header class="body">
    </header>

    <section class="body">
      <form method="post" action="editor.php">
      
      <label>Upload your file here: [under construction]<br></label>
      
      <label>Name</label>
      <input name="name" placeholder="your name">
      <br>
      <label>Email</label>
      <input name="email" type="email" placeholder="your email">
      <br>
      <label>Message</label>
      <textarea name="message" placeholder="your message"></textarea>
<br>
<!--Anti-spam line-->
<label>*What is 2+3? (Anti-spam)</label>
<input name="human" placeholder="Type Here">
<br>
      <input id="submit" name="submit" type="submit" value="Submit">
      </form>
    </section>

    <footer class="body">
    </footer>
    <br><br><br><br><br><br>
    
<?php
// connect to the db to collect the email recipient


//I added the htmlspecialchars() function
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $from = 'From: OceanEditors_Customer_Contact_Form';
//Might need to reopen db connection if closed above
    $to = "'".$row["email"][0].$row["email"][1].$row["email"][2].$row["email"][3].$row["email"][4].$row["email"][5].$row["email"][6].$row["email"][7].$row["email"][8].$row["email"][9].$row["email"][10].$row["email"][11].$row["email"][12].$row["email"][13].$row["email"][14].$row["email"][15].$row["email"][16].$row["email"][17].$row["email"][18].$row["email"][19].$row["email"][20].$row["email"][21].$row["email"][22].$row["email"][23]."'";
    echo var_dump($to);
    $to = $row['email'];
    echo var_dump($to);
//    $to = (string)$to;

//    $to = "'".$to."'";
//    $to = substr($to, 1);
//    $to = substr($to, 0, -1);
//    $to = $to.",".'contact@oceaneditors.com';
//    $\_POST['to'] = strval($to);
//    $to = "\"$to\"";
//The email only triggers a successful "sent" when single quotes are placed on the email.. however, adding these single quotes actually leads to the email not being recieved by the intended email. I am only able to successfully send to a hard coded 'contact@oceaneditors.com' and *not* the very same email collected from the db.
//    $to2 = 'marc.bogonovich@gmail.com';
    $to = 'contact@oceaneditors.com';
    echo var_dump($to2);
    $to3 = htmlentities($to);
    $subject = 'Hello';
//TEST    
    echo "<br>".$to."<br>".$to2."<br>".$to3."<br>".$from."<br>";
//END TEST    
    //Anti-spam line
    $human = htmlspecialchars($_POST['human']);

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

//TEST
if ($to == $to2){
echo "<br>equal<br>";
} else {
echo "<br>not equal<br>";
}
//END TEST

//Didn't help
//mysql_close()
?>

<?php
/* Anti-spam: && $human == '5' */
if ($_POST['submit'] && $human == '5') {

mail($to, $subject, $body, $from);

    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} /* Anti-spam else if element */ else if ($_POST['submit'] && $human != '5') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>


<!--END CONTACT FORM CODE-->






  </div>




</body>
</html>