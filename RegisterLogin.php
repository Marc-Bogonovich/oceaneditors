<?php session_start(); ?> <!DOCTYPE html>

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
                // REGISTERING
                if (isset($_POST['retypepassword2'])) {
                    if ($_POST['password2'] == $_POST['retypepassword2']) {
                        $options = [
                            'cost' => 12,
                        ];
                        $password_hashed = password_hash($_POST['password2'], PASSWORD_BCRYPT, $options);
                        include 'pdo_connection.inc';
                        $stmt = $conn->prepare("INSERT INTO editors (username, password, email) VALUES (:username, :password, :email)");
                        $stmt->bindParam(':username', $_POST['username2']);
                        $stmt->bindParam(':password', $password_hashed);
                        $stmt->bindParam(':email', $_POST['email2']);
                        $stmt->execute();

//                        session_start();
                        $_SESSION["id"] = $conn->lastInsertId();
                        
                        echo "<script type=\"text/javascript\"> window.location = \"http://oceaneditors.com/agreement.php\"; </script>"; //header("Location: agreement.php");
                        
                    } else {
                        echo "Your passwords don't match.";
                    }
                } // END REGISTERING start LOGGING IN
                elseif (isset($_POST['email'])) {
                    include 'pdo_connection.inc';
                    $stmt = $conn->prepare("SELECT id, password, agreement FROM editors WHERE email = :email");
                    $stmt->bindValue(':email', $_POST['email']);
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if ($results) {
                        $temp_password = $results[0]['password'];
                        if (password_verify($_POST['password'], $temp_password)) {
                            
//                            session_start();
                            $_SESSION["id"] = $results[0]['id'];
                            
                            if ($results[0]['agreement'] == 1) {
                                echo "<script type=\"text/javascript\"> window.location = \"http://oceaneditors.com/ModifyEditorProfile.php\"; </script>"; // header("Location: ModifyEditorProfile.php");
                            } else {
                                echo "<script type=\"text/javascript\"> window.location = \"http://oceaneditors.com/agreement.php\"; </script>"; // header("Location: agreement.php");
                            }
                        } else {
                            echo 'Invalid password.';
                        }
                    }
                    else{
                        echo 'Invalid user.';
                    }
                }
                ?>

            </section>

            <br /><br /><br />

    </body>
</html>
