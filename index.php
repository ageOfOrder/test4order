<?php
// not stored on the server so you will have to make them up yourself
// I will include a docs folder that explains how to use postgres
include('./hidemewell/hiddeninclude.php');
include('./var/varOne.php'); // variables that all pages should possess

include('./var/postVar.php'); // if stuff gets posted we capture and clean it here
include('./var/indexStates.php'); // switch statement

// start the html page
include('./handf/h.php');

echo '<div class="pageTitle">'; // center it, etc.
echo '<h1>index.php</h1>';
echo '</div>';

echo '<div class="topMenu">'; // menu buttons

include('./handf/menu.php');

echo '</div>'; // end topMenu

echo '<div class="leftMatter">'; // start leftMatter
echo '<h2>Left</h2>';
echo '</div>'; // end leftMatter

echo '<div class="indexBody">'; // middle of the page
echo '<p>This is a paragraph.</p>';
echo '</div>'; // end indexBody

echo '<div class="rightMatter">'; // start rightMatter
echo '<h2>Right</h2>';
echo '</div>'; // end rightMatter

echo '<div class="bottomBar">';
echo '<h2>Bottom bar</2>';
echo '</div>'; // end bottomBar

// end the html page and unset the title because it is funny
include('./handf/f.php');
?>