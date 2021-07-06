<?php
if (isset($_GET['name'])) {
    echo "Hello ".$_GET['name'];
    setcookie('name', $_GET['name']);
}
elseif (isset($_COOKIE['name'])){ 
    echo "Hello ".$_COOKIE['name'];
}
else {
    echo "Hello platypus";
}
?>