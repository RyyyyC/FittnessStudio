<?php
    session_start();

    $login = $_POST["login"];
    $pwd = $_POST["password"];

    require ("..\backend\lib\accountManagment.Class.php");

    $account = new Crud();
    $users = $account->checkAcoount($login);

    #echo md5($pwd)." HASLO LOGIN GUI<br />";

    $attempt = 0;
    $maxID = 0;
    foreach ($users as $user){
        $maxID = $user['id'];
    }
    foreach ($users as $user)
    {  
        if($login == $user['login'] && md5($pwd) == $user['haslo']){
            echo $user['login']." | ".$user['haslo'];
            $_SESSION['userID'] = $user['id'] ;
            if($user['pozycja'] == '0'){
                $id = $user['id'];
                header("Location: ../LoggedUser.php");
            }elseif($user['pozycja'] == '1'){
                $_SESSION['userID'] = $user['id'];
                header("Location: ../LoggedUserInstruktor.php");
            }elseif($user['pozycja'] == '2'){
                $_SESSION['userID'] = $user['id'];
                header("Location: ../LoggedUserAdmin.php");
            }
            break;
        }
        $attempt++;
        if($maxID == $attempt){
            echo "ZLE HASLO LUB LOGIN";
        }
    }
?>