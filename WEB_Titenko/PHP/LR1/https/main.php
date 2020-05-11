<?php

require "header.php";
$page = $_GET['page'];

if ($page) {
    $clean = trim($page, "\x00..\x1F");
    $page = $clean . '.html';
} else {
    $page = 'landing.html';
}

//Check for the existence of the file and enable it.
if (file_exists("pages/$page")) {
    require "pages/$page";
} else{
    echo "<h3>Page doesn't exist</h3>";
}
?>