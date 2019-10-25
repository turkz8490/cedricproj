<?php
session_start();
session_destroy();
echo "ALL SESSION HAS BEEN DESTROYED" . "<br/>";
echo "<a href=\"login.php\"> go back to registration page </a>";
?>