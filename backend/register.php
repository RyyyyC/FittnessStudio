<?php
    $login = $_POST["login"];
    $pwd = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    #$email = "name@domena.xx";
    $phone_numbers = $_POST["phone-number"];
    $dialling_code = $_POST["dialling_code"];
    $phone_number = "+".$dialling_code." ".$phone_numbers;

    require ("..\backend\lib\accountManagment.Class.php");

    $account = new Crud();

    $users = $account->accountExist();

    $attempt = 0;
    $maxID = 0;

    foreach ($users as $user){
        $maxID = $user['id'];
    }
    foreach ($users as $user)
    {
       if($user['login'] == $login){
           echo "Konto z takim loginem juz istnieje";
           break;
       }
       if($user['email'] == $email){
            echo "Posiadasz juz konto!";
            break;
       }
       $attempt++;
        if($maxID == $attempt){
            $register = $account->registerUserAccount($name, $surname, $pwd, $login, $email, $phone_number, '0');
        }
    }
?>