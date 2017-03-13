<html>
 <head>
  <title>Find an Editor</title>
  <h1> Step 1: Find an Editor</h1>
  <style>
    #record1 {
      position: absolute;
      top: 0em;
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
    }
    
  </style>
 </head>
 <body>
 
 
 <!--BEGIN TESTING
   <div id= 'record1'>
      <ul>
        <li id= 'username'>Username: jd777</li>
        <li id= 'turnaround'>Turnaround Time: 2 weeks </li>
        <li id= 'field'>Fields: psychology, history</li>
        <li id= 'lastlogin'>Last Login Time: 1 day</li>
      </ul>
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      <ul>
        <li id= 'name'>Name: Judy Dai</li>
      </ul>
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      &nbsp
      <ul>
        <li id= 'price'>Price per 1000 words: discuss together</li>
      </ul>
   </div>
   
   
<?php

//One way of connecting to the db
$servername1 = "localhost:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????

$conn = mysql_connect($servername1, $usernamedb, $password);
$db = mysql_select_db("oceanedi_db",$conn);
 
$x = 1; 

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";


#echo "<div stlye=\"float: left; width:88%;\">";

	while($x <= 5) {

#	echo "<div id='record1' style=\"clear: left;\">";	
	echo "<div id='record1' style=\"margin-top: " . $x . "0em;\">";
	
	echo "The number is: $x <br> la la la la <br> la la <br> la la <br>";
	$x++;
	
	echo "</div>";
	

	
	} 
	
#echo "</div>";
	
?>
   



<!--
http://stackoverflow.com/questions/1909222/position-a-div-to-appear-below-another-div
http://stackoverflow.com/questions/2492873/how-to-force-div-to-appear-below-not-next-to-another


<div id="my_wrapper2" style="position:absolute; margin-top: 80em; border: solid blue; width:15%;">
  <div id="visible_item" style="border: 2px dotted #882200;">Item<br>Item2 yada<br> :) </div>
  <div id="may_become_visible" style="height: auto;">Not Visible Now Item. Or visible any time in the future! blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah !</div>
    <div id="may_become_visible" style="border: solid green;">Not Visible Now Item</div>
</div>

<div id="my_wrapper3" style="position:absolute; margin-top: 160em; border: solid blue; width:88%; font-size:20px; margin-left: 5%; font-family: 'Lora', serif;">
  <div id="editors" >Item<br>Item2 yada<br> :) </div>
  <div id="editors" >Not Visible Now Item. Or visible any time in the future! blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah !</div>
    <div id="editors" style="border: solid green;">Not Visible Now Item</div>
    <div id="editors" >Not Visible Now Item</div>
</div>











<div id="my_wrapper4" style="position:absolute; margin-top: 220em; border: solid blue; width:88%; font-size:20px; margin-left: 5%; font-family: 'Lora', serif;">

<?php

//One way of connecting to the db
$servername1 = "localhost:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????

$conn = mysql_connect($servername1, $usernamedb, $password);
$db = mysql_select_db("oceanedi_db",$conn);
 
$x = 1; 
	while($x <= 5) {
	echo "<div id=\"editors\" > ";
	echo "The number is: $x <br> la la la la <br> la la <br> la la <br>";
	$x++;
	echo "</div>";
	} 
	
?>

</div>
<!--END OF WRAPPER






END TESTING-->







<div id="my_wrapper" style="position:absolute; margin-top: 1em; border: solid #eeeeee; width:88%; font-size:20px; margin-left: 5%; font-family: 'Lora', serif;">

<?php
// https://www.w3schools.com/php/php_mysql_select.asp
//One way of connecting to the db
$servername1 = "localhost"; //:3306"; //seems to work with just "localhost" too.
$usernamedb = "oceanedi_qian";
$password = '$Smartland234%'; //had to change this to single quotes because the password contains a money sign, which I think is reserved by PHP????
$db = "oceanedi_db";

$conn = new mysqli($servername1, $usernamedb, $password, $db);
//$db = mysql_select_db("oceanedi_db",$conn);
 
//$x = 1; 
//	while($x <= 5) {
//	echo "<div id=\"editors\" > ";
//	echo "The number is: $x <br> la la la la <br> la la <br> la la <br>";
//	$x++;
//	echo "</div>";
//	} 



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, fields, visible_editor, visible_director, price, turn_aroundtime, name FROM editors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
//        $temp = $row["visible_editor"];
//        $temp2 = $row["turn_aroundtime"];
//        $temp3 = (string)$temp2;
//        echo $temp . $row["visible_editor"] . "<br>";
//if ($row["turn_aroundtime"] > 0) {
//          echo "Hi Alan <br>";
//} else {echo "Lo Alan <br>";}
          
        if($row["visible_editor"] > 0 && $row["visible_director"] > 0){    
        
	echo "<div id=\"editors\" >";
//        echo "username: <b><h style=\"color: black;\">" . $row["username"]. "</h></b> - fields: " . $row["fields"]. " " . "<br>";
        
        echo "      <ul>
        <li id= 'username'>Username: <b>". $row["username"]."</b></li>
        <li id= 'name'>Name: <b>". $row["name"]."</b></li>        
        <li id= 'price'>Price: <b>$". $row["price"]."</b> per 1000 words</li>
        <li id= 'turnaround'>Turnaround Time: <b>". $row["turn_aroundtime"]." days</b> </li>
        <li id= 'field'>Fields: <b>". $row["fields"]."</b></li>
        <li id= 'lastlogin'>Last Login Time: 1 day/s</li>
        <br>
        <li id= 'vieweditor'><a href=\"editor.php". "?". "username=". $row["username"]."\"> View/contact ".$row["name"]."</a></li>        
      </ul>
<!--      &nbsp
      &nbsp
      &nbsp
      &nbsp
      <ul>
        <li id= 'name'>Name: <b>". $row["name"]."</b></li>
      </ul> -->";
        
        echo "</div>";
        
        }

    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br><br><br><br><br><br>
</div>
<!--END OF WRAPPER-->



 </body>
</html>
