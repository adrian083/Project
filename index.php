<?php
require_once 'config/session.php';

if (isLoggedIn()) {
    header('Location: dashboard/index.php');
} else {
    header('Location: auth/login.php');
}
exit();
?>
