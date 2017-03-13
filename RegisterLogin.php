<!DOCTYPE html>

<html>

    <head>

        <title>Register Login</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito|Raleway|Lora|Merriweather" rel="stylesheet">

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

                width: 80%;
                margin-left: auto ;
                margin-right: auto ;

                margin-top:0px;
                /*bottom: 0;
                left: 0;
                right: 0;
                margin: auto;*/
            }
        </style>

    </head>

    <body>
        <div id="div1" align="center">

            <p>Register as an editor or Login</p>

            <section style="text-align: left; width:400px; border: 1px solid blue;" class="theforms">
                <form id="form1" method="POST">
                    <label>Login</label>
                    <input name="email" type="email" placeholder="email"></input>
                    <br>
                    <input name="password" type="password" placeholder="password"></input>
                    <br>
                    <input id="submit" name="submit" type="submit" value="Submit">
                    <!--        <button id="resume" name="resume" value="resume">resume</button> -->
                </form>

                <br>

                <form id="form2" method="POST">
                    <label>Register</label>
                    <input name="username2" placeholder="username"></input>
                    <br>
                    <input name="email2" type="email" placeholder="email"></input>
                    <br>
                    <input name="password2" type="password" placeholder="password"></input>
                    <br>
                    <input name="retypepassword2" type="password" placeholder="password"></input>
                    <br>
                    <input id="submit2" name="submit2" type="submit" value="Submit">
                </form>
                
                <?php
                    if (isset($_POST)) {
                        include 'pdo_connection.inc';
                        
                        //REGISTERING
                        if(isset($_POST['retypepassword2']))
                        {
                            
                            $stmt = $dbh->prepare("INSERT INTO editors (username, password, email) VALUES (:username, :password, :email)");
                            $stmt->bindParam(':username', $_POST['username2']);
                            $stmt->bindParam(':password', $_POST['password2']);
                            $stmt->bindParam(':email', $_POST['email2']);
                            $stmt->execute();
                            
                        }
                        else //LOGGING IN
                            {
                            
                            // TODO: SELECT
                        }
                    }
                ?>

            </section>

            <br /><br /><br />

    </body>
</html>