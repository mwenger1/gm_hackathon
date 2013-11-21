<?php

session_start();
$_SESSION['mobile']=1;

echo 'this is the mobile page<br/>';
echo (isset($_SESSION));
echo ($_SESSION['mobile']);

echo '<br/><a href="website_redirect.php">View full site</a>';
?>
