<?
require_once 'config.php';
   global $db;
   if(isset($_POST['email'])) { $email = $_POST['email'];}
   mysql_select_db("email");
   $result = mysqli_query($db,"SELECT * FROM `email` WHERE `emails` LIKE '".$email."' ");
        if (!$result->num_rows > 0){
           $result = mysqli_query($db,"INSERT INTO email ( emails) VALUES ( '$email')");
           $drop = mysqli_query($db,"DELETE FROM `email` WHERE `emails` = ' '  ");
                  if($result == 'true'){
                          $mail_status = "Ваши данные успешно добавлены";}
                              else {
                                     $mail_status =  "Ваши данные не добавлены";}
                  else {
                     $mail_status = "Данный адрес уже  находится  в списке новостных рассылок.";
                  }
   






