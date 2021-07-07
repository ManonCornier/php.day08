<?php
function remove_cookie(){
    if(isset($_COOKIE['name'])) {
    unset($_COOKIE['name']);
    setcookie('name', null, time() - 3600, '/');
    }
}
?>