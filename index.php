<?php
// not stored on the server so you will have to make them up yourself
// I will include a docs folder that explains how to use postgres
include('./hidemewell/hiddeninclude.php');
include('./var/varOne.php'); // variables that all pages should possess

include('./var/postVar.php'); // if stuff gets posted we capture and clean it here
include('./var/indexStates.php'); // switch statement

include('./handf/h.php');

echo '<h1>index.php</h1>';
echo '<p>This is a paragraph.</p>';

include('./handf/f.php');

?>