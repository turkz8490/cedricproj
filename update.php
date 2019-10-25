<?php
include_once ('config.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['birthdate'];
    $dept = $_POST['department'];
    $rank = $_POST['rank'];

    $sql = "UPDATE philhealth.tblemployee ";
    $sql .= "set Efname = :fname, Elname = :lname, Egender =:gender, Ebirthdate = :birthdate, Edept =:dept, rank = :rank ";
    $sql .= "where ID = :id";
    $query = $conn->prepare($sql);
    $query -> bindparam(':id', $id);
    $query -> bindparam(':fname', $firstname);
    $query -> bindparam(':lname', $lastname);
    $query -> bindparam(':gender', $gender);
    $query -> bindparam(':birthdate', $bday);
    $query -> bindparam(':dept', $dept);
    $query -> bindparam(':rank', $rank);
    $query -> execute();

    echo "Successfully updated" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";
}
else{
    echo "ERROR: Restricted Access!";
}
?>