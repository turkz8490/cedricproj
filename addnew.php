<?php
include_once ('config.php');
if(isset($_POST['add'])){
   // $id = $_POST['id'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bday = $_POST['birthday'];
    $dept = $_POST['department'];
    $rank = $_POST['rank'];

    if(empty($firstname) || empty($lastname) || empty($gender)|| empty($bday) || empty($bday) || empty($dept) || empty($rank)){
        if(empty($firstname)){
            echo "First Name is empty" . "<br/>";
        }
        if(empty($lastname)){
            echo "Last Name is empty" . "<br/>";
        }
        if(empty($gender)){
            echo "Gender is empty" . "<br/>";
        }
        if(empty($bday)){
            echo "Birthday is empty" . "<br/>";
        }
        if(empty($dept)){
            echo "Department is empty" . "<br/>";
        }
        if(empty($rank)){
            echo "Rank is empty" . "<br/>";
        }
            echo "<a href=\"add.php\">Back </a>";

    }
    else{
    $sql = "insert into philhealth.tblemployee ";
    $sql .= " (Efname, Elname, Egender, Ebirthdate, Edept, rank) ";
    $sql .= "values (:fname, :lname, :gender, :birthday, :department, :rank) ";
    //$sql .= "where ID = :id";
    $query = $conn->prepare($sql);
    //$query -> bindparam(':id', $id);
    $query -> bindparam(':fname', $firstname);
    $query -> bindparam(':lname', $lastname);
    $query -> bindparam(':gender', $gender);
    $query -> bindparam(':birthday', $bday);
    $query -> bindparam(':department', $dept);
    $query -> bindparam(':rank', $rank);
    $query -> execute();

    echo "Successfully updated" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";
    }
}
else{
    echo "ERROR: Restricted Access!";
}
?>