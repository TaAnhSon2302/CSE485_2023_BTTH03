<?php
require('bai1/sendemail/ES.php');
require('bai1/sendemail/interface.php');
require('bai1/sendemail/process.php');
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("pozyomkachan@gmail.com", "Happy Woman Day", "Best Wishes");

?>