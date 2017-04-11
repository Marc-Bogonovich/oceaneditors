<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Editor</title>

<link href="https://fonts.googleapis.com/css?family=Nunito|Raleway|Lora|Merriweather" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css" />

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
<div id="my_wrapper" style="position:absolute; margin-top: 1em; border: solid #eeeeee; width:88%; font-size:20px; margin-left: 5%; font-family: 'Lora', serif;">
<!--MAKE A CONNECTION TO THE DB BASED ON THE username GET PARAMETER-->
<?php

include 'connection.inc';

// Collecting the username from the url
$usernameGET = $_GET['username'];

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


//TEST
//$TESTTT = "price";
//$sqlstring2 = "SELECT * FROM editors WHERE ". $TESTTT ." = 40 ORDER BY username ASC"; // "SELECT * FROM editors WHERE username = " . $usernameGET . " ORDER BY username ASC";
//END TEST
$sqlstring = "SELECT * FROM editors WHERE id = '" . mysql_real_escape_string($_GET['id']) . "' ORDER BY username ASC";
//TEST
//echo $sqlstring . "<br>";
//END TEST
$sql = mysql_query($sqlstring); //"SELECT * FROM editors WHERE username = " . $usernameGET . " ORDER BY username ASC");
$row = mysql_fetch_assoc($sql);
//TEST
//echo "<br><br>" . $row["username"] . "<br>";
//END TEST





echo "
  <div id= 'editors' >
     <ul>

       <li id= 'name'><b>". $row["name"] ."</b></li>
       <li id= 'price'><b>". $row["price"] ."</b></li>
       <br>
       <li id= 'field'>Fields: <b>". $row["fields"] ."</b></li>
       <!-- <li id= 'lastlogin'>Last Login Time: 1 day</li> -->
       <li id= 'turnaround'>Turnaround Time: <b>". $row["turn_aroundtime"] ."</b> days </li>
       <li id= 'description'>Description: <b>". $row["description"] ."</b></li>
     </ul>
     &nbsp
  </div>

";

?>
















<div id= 'editors' >

<p style="font-size: 24px;"><b>Contact Editor</b><br> Please contact this editor with the following email.</p><br>






<!--CONTACT FORM CODE. I used the following tutorial:
http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/ -->
<!--
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

<label>*What is 2+3? (Anti-spam)</label>
<input name="human" placeholder="Type Here">
<br>
      <input id="submit" name="submit" type="submit" value="Submit">
      </form>
    </section>

    <footer class="body">
    </footer>
    <br><br><br><br><br><br>
-->    
<?php
// connect to the db to collect the email recipient


//I added the htmlspecialchars() function
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $from = 'From: OceanEditors_Customer_Contact_Form';
//Might need to reopen db connection if closed above
    $to = "'".$row["email"][0].$row["email"][1].$row["email"][2].$row["email"][3].$row["email"][4].$row["email"][5].$row["email"][6].$row["email"][7].$row["email"][8].$row["email"][9].$row["email"][10].$row["email"][11].$row["email"][12].$row["email"][13].$row["email"][14].$row["email"][15].$row["email"][16].$row["email"][17].$row["email"][18].$row["email"][19].$row["email"][20].$row["email"][21].$row["email"][22].$row["email"][23]."'";
//    echo var_dump($to);
    $to = $row['email'];
//    echo var_dump($to);
//    $to = (string)$to;

//    $to = "'".$to."'";
//    $to = substr($to, 1);
//    $to = substr($to, 0, -1);
//    $to = $to.",".'contact@oceaneditors.com';
//    $\_POST['to'] = strval($to);
//    $to = "\"$to\"";
//The email only triggers a successful "sent" when single quotes are placed on the email.. however, adding these single quotes actually leads to the email not being recieved by the intended email. I am only able to successfully send to a hard coded 'contact@oceaneditors.com' and *not* the very same email collected from the db.
//    $to2 = 'marc.bogonovich@gmail.com';
//    $to = 'contact@oceaneditors.com';
//    echo var_dump($to2);
    $to3 = htmlentities($to);
    $subject = 'Hello';
//TEST    
//    echo "<br>".$to."<br>".$to2."<br>".$to3."<br>".$from."<br>";
//END TEST    
    //Anti-spam line
    $human = htmlspecialchars($_POST['human']);

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
echo $to."<br><br>";
//TEST
if ($to == $to2){
//echo "<br>equal<br>";
} else {
//echo "<br>not equal<br>";
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
  
  
  
<!--PAYMENT DIVISION-->  
<div id= 'editors' >

<p style="font-size: 24px;"><b>Pay Editor</b><br> Please pay your editor for their service.</p>

<form action='txpmid.php'  method="post" / >
<!--Editor id is in following line. type is hidden-->
<?php echo "<input type=\"hidden\" name=\"CustRefID\"  value=", $_GET['id'], " /><br>" ?>
<input  type="submit" name="Go" value="Pay Now"   />
</form>

<br><br>
</div>  
<!--END OF PAYMENT DIVISION-->  
  
  
  
  </div>

</body>
</html>
