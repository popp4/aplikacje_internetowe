<?php
if (isset($_SESSION[‘message’][‘success’])){
    echo ’<div class="alert alert-success" role="alert">’ .
    $_SESSION[‘message’][‘success’] . ‘</div>’;
}
if (isset($_SESSION[‘message’][‘warning’])){
    echo ’<div class="alert alert-warning" role="alert">’ .
    $_SESSION[‘message’][‘warning] . ‘</div>’;
}