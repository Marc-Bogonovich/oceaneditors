<?php
session_start();

include 'pdo_connection.inc';

if (isset($_POST['agreement'])) {

    $stmt = $conn->prepare("UPDATE editors SET agreement = :agreement WHERE id = :id");

    $stmt->bindParam(':id', $_SESSION['id']);
    $stmt->bindValue(':agreement', '1');
    $stmt->execute();
    echo '###' . $_SESSION['id'];
    header("Location:about.html");
    header("Location:editor.php?id=" . $_SESSION['id']);
}
?>
<!DOCTYPE html>

<html>

    <head>	
        <script type="text/javascript">
            function validate() {
                if (document.getElementById('agreement').checked) {
                    //alert("checked");
                    //document.write("Hello World!");
                    document.getElementById('submit2').disabled = false; //removeAttribute("disabled");
                } else {
                    document.getElementById('submit2').disabled = true;
                    //alert("Check the agreement box please. Clarification: please actually read the damn document and then check the box.");
                }
                //if (document.getElementById('agreement').checked) {} else {}
            }
        </script>

        <title>Agreement</title>
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

            <!-- Alternative text box     
                    <div>
              <input id="option" type="checkbox" name="field" value="option">
              <label for="option"><span><span></span></span>Value</label>
            </div>
            -->
            <p>Terms and Responsibilities</p>



            <section style="text-align: left; width:90%; border: 1px solid blue; font-size:15px;" class="theforms">

                <!-- START AGREEMENT TERMS-->
                <h2>
                    The following are guidelines on editor workflow, pay, and conduct.
                </h2>

                <br>

                <p>
                    Editors are required to read the following section. Don&apos;t worry, this won&apos;t be long.
                </p>



                <p>
                    The singular purpose of Ocean&middot;Editors is to keep very low overhead and keep margins really tight so that editors receive a large percentage of what the customer is charged. The lead developer and director will recieve a small percentage (1% each) and salary. The editors will initially receive 80% of the price charged to customers; however, our goal is to reach 90% distribution to editors (at least, if not more).
                </p>



                <p>
                    You understand that you currently operate as independent contractors. That means you&apos;re responsible for organizing your taxes. The independent contractor status of editors may change as we gain some revenue. Legal and tax guidance costs money, and we need to build up some revenue to afford legal and tax services.
                </p>

                <br>
                <h2>
                    How much are you paid?
                </h2>

                <p>
                    You set your prices. We ask you to set your prices relatively high, because your work is valuable. Similar companies bill out editors at a high price per 1000 word basis. Many editing companies charge charge customers $60 or $50 or more per 1000 words for editing scientific articles. They then pay the editors 50% or less of this fee. Thus, given Ocean&middot;Editors&apos; high pay percentage, we believe you can pay yourselves more while we still charge the customer less. We suggest $35 - $40 per 1000 words - depending on your years of experience, skill level, and degree and specialization.<br><br><i>The listed price is the price for the customer per 1000 words.</i> Currently, 80% of the price goes to the editor, and 20% goes to Ocean&middot;Editors&apos; overhead. So for example, if you advertise a price of $40 per 1000 words, you will receive $40 &times; 0.80 = $32 per 1000 words.
                </p>
                <br>

                <h2>
                    How to receive jobs? And get paid.
                </h2>
                <p>
                    1. Sign up (already done, check!).
                </p>

                <p>
                    2. Fill out your profile.
                </p>

                <p>
                    3. In a few days, we will review your profile, and set your profile as live. You will then be visible to clients and they will contact you through the contact form on the your editor display page (visible on the customer ).
                </p>

                <p>
                    4. You are responsible for coordinating with your customer. Once you receive their initial message request from them to send you their submission. You are welcome to evaluate their submission and pass on the job. Please do so promptly.
                </p>

                <p>
                    Feel free to suggest another editor you feel may be more appropriate for the job.

                </p>
                <br>

                <h2>
                    Getting paid by the client:
                </h2>

                <p>
                    5. Once you finish the work for the client, instruct the customer to pay you via your editor display page.
                </p>

                <p>
                    Your page is as follows (substitute your username for yourUsername at the end of this url):
                </p>

                <p>
                    http://www.oceaneditors.com/editorforcustomer.php?username=yourUsername
                </p>

                <p>
                    This webpage string is case sensitive.
                </p>

                <p>
                    6. We will distribute checks once a month. In time, this process will be automated.
                </p>

                <p>
                    7. <b><i>Very important</i></b> If you are receiving too many jobs from clients, you can set your status to not visible by editing your editor profile. You can also inform previous clients that you&apos;re going to be busy for a little while and suggest they contact other editors.
                </p>

                <br>

                <h2>
                    Ocean&middot;Editors Ethics
                </h2>

                <p>
                    There are likely going to be students who want you to do their work for you. In other words they may want you to do more than simply editing and style assistance. Providing these kinds of services would be unethical. You are expected to act according to standard academic guidelines with respect to these issues. Indiana University has an excellent Academic Handbook that can serve as your guide.
                </p>



                <p>
                    <a  href="https://www.indiana.edu/~vpfaa/academicguide/index.php/Main_Page">Academic Guide</a>
                </p>



                <p>
                    You may specifically refer to the <a  href="https://www.indiana.edu/~vpfaa/academicguide/index.php/I._Professional_Conduct_and_Communications">Professional Conduct and Communications</a> section.
                </p>

                <p>
                    The managing member of Ocean&middot;Editors retains the right to dismiss editors at any time. Violation of standard professional conduct will lead to immediate dismissal. If Ocean&middot;Editors has invited you to be an editor we&apos;re very confident in your ethical standards.
                </p>






                <!--END AGREEMENT TERMS-->



                <br>

                <form id="form2" method="post">
                    <!--        <label>Please agree to the terms and responsibilities</label>-->

                    <label for="agreement">I agree to these terms and responsibilities.</label>
                    <br>
                    <input type="checkbox" name="agreement" value="agreement" id="agreement" onclick="validate()">
                    <br><br>
                    <input id="submit2" name="submit2" type="submit" value="Agree & Continue" disabled="disabled">
                </form>

            </section>

            <br><br><br>
            <script type="text/javascript">
                validate();
            </script>

    </body>
</html>
