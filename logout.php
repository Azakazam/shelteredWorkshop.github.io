<?php
session_start();
session_destroy();
header('Location: new-login-user.php');
exit;
?>