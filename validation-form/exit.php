<?php
setcookie('user', $user['name'], time()-3600, "/");
header('Location: log_in.php');
?>