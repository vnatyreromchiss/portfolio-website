<?php 
    $name = $_POST['name'];
    $project = $_POST['project'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $name = htmlspecialchars($name);
    $project = htmlspecialchars($project);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $project = urldecode($project);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $project = trim($project);
    $email = trim($email);
    $message = trim($message);


    if(mail("rdg2039@gmail.com",
            "Новое письмо с портфолио сайта",
            "Имя: " .$name."\n".
            "Проект: " .$project."\n".
            "Email: " .$email."\n".
            "Сообщение: " .$message,
            "From: random@gmail.com \r\n")
    ) {
        echo ('Message sent successfully!');
    }

    else {
        echo('Error! Check your information...');
    }

?>