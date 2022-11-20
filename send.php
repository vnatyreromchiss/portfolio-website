<?
    if(isset($_POST['name']))
    {
        if(isset($_POST['name']))
        {
            $name = $_POST['name'];
        }
        if(isset($_POST['project']))
        {
            $name = $_POST['project'];
        }
        if(isset($_POST['email']))
        {
            $name = $_POST['email'];
        }
        if(isset($_POST['message']))
        {
            $name = $_POST['message'];
        }
        if($name=="" or $project=="" or $email=="" or $message=="")
        {
            echo "Please! Enter all information!"
        }
        else
        {
            $ip=$_SERVER["REMOTE_ADDR"];
            $brose=$_SERVER["HTTP_USER_AGENT"];
            $to = "rdg2039@gmail.com";
            $subject = "Новое письмо с сайта портфолио";
            $headers .= "Content-Type: text/html;";
            $headers .= "Отправитель: Посетитель сайта";
            $message = "
            Имя: $name<br>
            Email: $email<br>
            Проект: $project<br>
            Сообщение: $message<br><br>
            
            IP отправителя: $ip<br>
            Браузер отправителя: $brose<br>
            ";

            $send = mail($to, $subject, $message, $headers);
            if ($send == "true")
            {
                echo "Your message successfully sended!";
            }
            else
            {
                echo "Error! Let's try send message again!";
            }
        }  



    }














    // $name = $_POST['name'];
    // $project = $_POST['project'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];


    // $name = htmlspecialchars($name);
    // $project = htmlspecialchars($project);
    // $email = htmlspecialchars($email);
    // $message = htmlspecialchars($message);

    // $name = urldecode($name);
    // $project = urldecode($project);
    // $email = urldecode($email);
    // $message = urldecode($message);

    // $name = trim($name);
    // $project = trim($project);
    // $email = trim($email);
    // $message = trim($message);


    // if(mail("rdg2039@gmail.com",
    //         "Новое письмо с сайта портфолио",
    //         "Имя: " .$name."\n".
    //         "Проект: " .$project."\n".
    //         "Email: " .$email."\n".
    //         "Сообщение: " .$message,
    //         "From: random@gmail.com \r\n")
    // ) {
    //     echo ('Message sent successfully!');
    // }

    // else {
    //     echo('Error! Check your information...');
    // }

?>