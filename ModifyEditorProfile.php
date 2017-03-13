<!DOCTYPE html>


<html>
	<head>

	    <title>Enter or Modify your editor information.</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito|Raleway|Lora|Merriweather" rel="stylesheet">

            <meta charset="utf-8"/>

            <style>

                  body {
                      /*font-family: 'Nunito', sans-serif;*/
                      /*font-family: 'Raleway', sans-serif;*/
                      /*font-family: 'Merriweather', serif;*/
                      font-family: 'Lora', serif;
                      font-size:40px;
                      text-align: center;
                      color: #222222;
                      background-size: 100%;
                      background-color: #ffffff;
                      background-repeat: no-repeat;
                      background-position: center;
                      background-attachment: fixed;
      	       }

                  label {
                      /*This line arranges the entire form into a block, by placing the labels in a block?*/
                      display:block;
                      margin-top:20px;
                      letter-spacing:2px;
                      font-size:25px;
                  }


                  #div1 {
                      /*position: absolute;*/
                      top: 1em;
                      height: auto;
                      /*margin-top: 0em;*/
                      border: 1px solid red;
                      /*width: 80%;*/


                      margin-left: 50px  ;
                      margin-right: 50px ;

                      margin-top:0px;
                      /*bottom: 0;
                      left: 0;
                      right: 0;
                      margin: auto;*/
                  }

      /*This site describes some checkbox modification: http://code.stephenmorley.org/html-and-css/styling-checkboxes-and-radio-buttons/ */


              </style>


  </head>

  <body>
      <div id="div1" align="center">
      <p>Enter or Modify your editor information.</p>

      <section style="text-align: left; width:90%; border: 1px solid blue; font-size:15px;" class="theforms">
        <form id = 'form1' action="welcome.php" method="post">
        Username: <input type="text" name="username" placeholder = "Username"><br>
        Name: <input type="text" name="name" placeholder = "Name"><br>
        E-mail: <input type="text" name="email" placeholder="E-mail"><br>
        Price per 1000 words: <input type="text" name="price" placeholder="Price per 1000 words" ><br>
        Turnaround time: <input type="text" name="tt" placeholder="Turnaround time" ><br>
        Fields: <input type="textarea" name="fields" placeholder="Fields" ><br>
        Description: <input type="textarea" name="description" placeholder="Description" ><br>
        <input type="checkbox" name="visible" value="visible" id="visible"> Is this profile visible<br> 

<input type="submit">
</form>




      </section>

  </body>

</html>
