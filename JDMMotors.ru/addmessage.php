<?php
try{
    $conn = mysqli_connect( "localhost",  'root',  '', 'jdm');

    (empty(($_POST['name']))) ?  exit("Поле не заполнено") : #message.html;
    (empty(($_POST['email']))) ?  exit("Поле не заполнено") :  #message.html;
    (empty(($_POST['content']))) ?  exit("Поле не заполнено") :  #message.html;

       // $query =  ьн('INSERT INTO message VALUES (NULL , :name, NOW())');
        $name = ($_POST['name']);
        $email = ($_POST['email']);

    $conn->query("INSERT INTO `message` (`message_id`, `name`, `email`, `message_date`) VALUES (NULL, $name, $email, '2019-05-23 05:00:00')");
    $conn->query("INSERT INTO `message_content` (`content_id`, `content`, `message_id`) VALUES (NULL, $name, '1')");

    //$query = "INSERT INTO message VALUES (NULL , :name, NOW())";
   // $msg = $conn->prepare($query);
   //$msg->execute(['name' => $_POST['name']]);

    //$query = "INSERT INTO message VALUES (NULL , :email, NOW())";
    //$msg = $conn->prepare($query);
    //$msg->execute(['email' => $_POST['email']]);

  // $msg_id = $conn->lastInsertId();

   // $query = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
   // $msg = $conn->prepare($query);
   // $msg->execute(['content' => $_POST['content'], 'message_id'=> $msg_id]);

  // header("Location: message.htm");
}
catch (PDOException $e)
    {echo "error" .$e->getMessage();
    }
?>