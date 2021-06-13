<?php
    session_start();

    $id = $_SESSION['userID'];

    require_once("..\backend\lib\accountManagment.Class.php");

    $account = new Crud();

    $user = $account->selectUser($id);

?>