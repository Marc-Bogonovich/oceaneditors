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

        <?php
        
        session_start();        
        include 'pdo_connection.inc';
        
        if (isset($_POST['name'])) {
            $_POST['name'];
        }
        
        $stmt = $conn->prepare("UPDATE editors SET username = :username, name = :name, email = :email, price = :price, description = :description, turn_aroundtime = :turn_aroundtime, visible_editor = :visible_editor WHERE id = :id");
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':turn_aroundtime', $turn_aroundtime);
        $stmt->bindParam(':visible_editor', $visible_editor);
        $stmt->execute();
        
        $username = '';
        $name = '';
        $email = '';
        $price = '';
        $description = '';
        $fields = '';
        $turn_aroundtime = '';
        $visible_editor = '';
        $visible_director = '';
        $agreement = '';

        $stmt = $conn->prepare("SELECT * FROM editors WHERE id = :id");
        $stmt->bindValue(':id', $_SESSION["id"]);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            $username = $results[0]['username'];
            $name = $results[0]['name'];
            $email = $results[0]['email'];
            $price = $results[0]['price'];
            $description = $results[0]['description'];
            $turn_aroundtime = $results[0]['turn_aroundtime'];
            $fields = $results[0]['fields'];
            if ($results[0]['visible_editor']) {
                $visible_editor = 'checked';
            }
            $visible_director = $results[0]['visible_director'];
            $agreement = $results[0]['agreement'];
        }
        ?>
        
    </head>

    <body>
        <div id="div1" align="center">
            <p>Enter or Modify your editor information.</p>

            <section style="text-align: left; width:90%; border: 1px solid blue; font-size:15px;" class="theforms">
                <form id = 'form1' action="welcome.php" method="post">
                    Username: <input type="text" name="username" placeholder = "Username" value="<?=$username?>" /><br>
                    Name: <input type="text" name="name" placeholder = "Name" value="<?=$name?>" /><br>
                    E-mail: <input type="text" name="email" placeholder="E-mail" value="<?=$email?>" /><br>
                    Price per 1000 words: <input type="text" name="price" placeholder="Price per 1000 words" value="<?=$price?>" /><br>
                    Turnaround time: <input type="text" name="tt" placeholder="Turnaround time" value="<?=$turn_aroundtime?>" /><br>
                    Fields: <input type="textarea" name="fields" placeholder="Fields" value="<?=$fields?>" /><br>
                    Description: <input type="textarea" name="description" placeholder="Description" value="<?=$description?>" /><br>
                    <input type="checkbox" name="visible" value="visible" id="visible" <?=$visible_editor?> /> Is this profile visible<br>

                    <input type="submit">
                </form>




            </section>

    </body>

</html>