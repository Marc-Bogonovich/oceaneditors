<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ContactEditor</title>
<link rel="SHORTCUT ICON" href="AngloCheckFiles/anglocheck.ico" />

<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather" rel="stylesheet">

<style>


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




body {
  /*font-family: 'Nunito', sans-serif;*/
  /*font-family: 'Raleway', sans-serif;*/
  /*font-family: 'Merriweather', serif;*/
  font-family: 'Lora', serif;
}
p {
    font-size: 18px;
}


</style>
</head>
<body>


<p style="font-size: 24px;"><b>Contact Editor</b> Please use this form to contact your editor.</p><br>






<!--CONTACT FORM CODE. I used the following tutorial:
http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/ -->

    <header class="body">
    </header>

    <section class="body">
      <form method="post" action="GeneralInquiries.php">
      <label>Name</label>
      <input name="name" placeholder="your name">
      <label>Email</label>
      <input name="email" type="email" placeholder="your email">
      <label>Message</label>
      <textarea name="message" placeholder="your message"></textarea>
<!--Anti-spam line-->
<label>*What is 2+3? (Anti-spam)</label>
<input name="human" placeholder="Type Here">

      <input id="submit" name="submit" type="submit" value="Submit">
      </form>
    </section>

    <footer class="body">
    </footer>
    <br><br><br><br><br><br>
    
<?php
//I added the htmlspecialchars() function
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $from = 'From: OceanEditors_Customer_Contact_Form';
    $to = 'contact@oceaneditors.com';
    $subject = 'Hello';
    
    //Anti-spam line
    $human = htmlspecialchars($_POST['human']);

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
/* Anti-spam: && $human == '5' */
if ($_POST['submit'] && $human == '5') {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} /* Anti-spam else if element */ else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>


<!--END CONTACT FORM CODE-->


</body>
</html>