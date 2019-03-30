<?php

if(isset($_POST['submit'])){
$to = "andrevenko@gmail.com";; // Тут треба написати e-mail, куда будут приходити листи
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$phone = $_POST['tel1'];
$subject = "Форма відправки повідомлень із сайту";
$subject2 = "Copy of your form submission";
$message = $first_name . " залишив повідомлення:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers,$phone);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Відключено!
echo "Повідомлення відправлено. Дякую Вам " . $first_name . ", ми зв'яжемося з Вами.";
echo "<br /><br /><a href='https://andrevenko.github.io/EduSchool/index.html'>Повернутися на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="../index.html");}
window.setTimeout("changeurl();",3000);
</script>