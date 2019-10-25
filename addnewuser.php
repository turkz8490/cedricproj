<?php
include_once ('config.php');
if(isset($_POST['add'])){
   // $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if(empty($username) || empty($password) || empty($role)){
        if(empty($user)){
            echo "Please Supply User Name" . "<br/>";
        }
        if(empty($password)){
            echo "Please Supply Password" . "<br/>";
        }
        if(empty($role)){
            echo "Please Supply Role" . "<br/>";
        }
      
            echo "<a href=\"adduser.php\">Back </a>";

    }
    else{
    $sql = "insert into philhealth.tblusers ";
    $sql .= " (username, password, role) ";
    $sql .= "values (:username, :password, :role) ";
    //$sql .= "where ID = :id";
    $query = $conn->prepare($sql);
    //$query -> bindparam(':id', $id);
    $query -> bindparam(':username', $username);
    $query -> bindparam(':password', $password);
    $query -> bindparam(':role', $role);
    $query -> execute();

    echo "Successfully Added" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";
    }
}
else{
    echo "Wrong Password!";
}
?>