<?php

require "connect.php";
global $conn;
$AdminEmail = $_POST['AdminEmail'];
$AdminPassword = $_POST['AdminPassword'];

//$AdminEmail = "admin@gmail.com";
//$AdminPassword = "123456";

class Admin {
    function __construct($id, $name,$phone,$email, $password,  $avatar){
        $this->AdId = $id;
        $this->AdName = $name;
        $this->AdPhone = $phone;
        $this->AdEmail = $email;
        $this->AdPassword = $password;
        $this->AdAvatar = $avatar;
    }
}

if (strlen($AdminEmail) > 0 && strlen($AdminPassword) > 0) {
    $arrAdmins = array();
    $query = "SELECT * FROM admin WHERE FIND_IN_SET('$AdminEmail', AdminEmail) AND FIND_IN_SET('$AdminPassword', AdminPassword)";
    $data = mysqli_query($conn, $query);
    if ($data) {
        while ($row = mysqli_fetch_assoc($data)) {
            array_push($arrAdmins, new Admin($row['AdminId'],
                $row['AdminName'],
                $row['AdminPhone'],
                $row['AdminEmail'],
                $row['AdminPassword'],
                $row['AdminAvatar']
                ));
        }
        if (count($arrAdmins) > 0) {
            echo json_encode($arrAdmins);
        } else {
            echo "Fail";
        }
    }
} else {
    echo "Null";
}
