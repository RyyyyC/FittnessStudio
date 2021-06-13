<?php
class Crud
{
    private $server = "54.38.50.59";
    private $user = "www6733_fitnessclub";
    private $password = "kQwZHaC4tc28a9PdFERi";
    private $database = "www6733_fitnessclub";

    public $con;
    public $userTable = "Klient";
    public $accountTable = "Konto";

    public function __construct()
    {
        try {
            $this->con = new mysqli($this->server, $this->user, $this->password, $this->database);
        } catch (Exception $e) {
            echo "Bład połączenia z baza danych: " . $e->getMessage();
        }
    }
    public function AddUser($first_name, $last_name, $city, $email, $datetime)
    {
        $sql = "INSERT INTO $this->userTable(first_name, last_name, city, email, datetime) VALUES ('$first_name', '$last_name', '$city', '$email', '$datetime')";
        $query = $this->con->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function DisplayUser()
    {
        $sql = "SELECT * FROM $this->userTable";
        $query = $this->con->query($sql);
        $data = array();
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function Update($first_name, $last_name, $city_name, $email, $userid)
    {
        $sql = "UPDATE $this->userTable SET first_name='$first_name', last_name='$last_name', city='$city_name', email='$email' WHERE userid=$userid";
        $query = $this->con->query($sql);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteRecord($id)
    {
        $sql = "DELETE FROM $this->userTable WHERE userid= $id";
        $query = $this->con->query($sql);
        $data = array();
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    } 

    public function deleteAllRecords()
    {
        $sql = "DELETE FROM $this->userTable";
        $query = $this->con->query($sql);
        $data = array();
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }  

    public function checkAcoount()
    {
        $sql = "SELECT * FROM $this->accountTable";
        $query = $this->con->query($sql);
        $data = array();
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function accountExist()
    {
        $sql = "SELECT * FROM $this->accountTable";
        $query = $this->con->query($sql);
        $data = array();
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function registerUserAccount($name, $surname, $pwd, $login, $email, $phone_number, $position)
    {
        
        $pwd = md5($pwd);
        $sql = "INSERT INTO $this->accountTable(id, haslo, login, pozycja) VALUES (NULL,  '$pwd', '$login', '$position')";
        $query = $this->con->query($sql);
        if(!$query){
            echo "Nie udalo sie!";
            return false;
        }
        $date = date('Y-m-d');
        $sql  = "INSERT INTO $this->userTable(id, imie, nazwisko, data, email, tel) VALUES (NULL, '$name', '$surname', '$date', '$email', '$phone_number')";
        $query = $this->con->query($sql);
        if($query){
            header("Location: login.php");
            return true;
        }else{
            echo "Nie udalo sie!";
            return false;
        }
    }
}
?>