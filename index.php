<?php
include('./hidemewell/hiddeninclude.php');
include('./var/varOne.php'); // variables that all pages should possess
echo '<html>
<head>
<title>';
echo $tfoTitle;
echo '</title></head>';
echo '<body>';
echo '<h1>index.php</h1>';
echo '<p>This is a paragraph.</p>';
echo '</body>';
echo '</html>';
?>