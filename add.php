<?php include_once ('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addnew.php" method = "POST">
        <label for="">First Name</label><br/>
        <input type="text" name="fname"><br/>
        <label for="">Last Name</label><br>
        <input type="text" name="lname"><br/>
        <label for="">Gender Name</label><br>
        <input type="text" name="gender"><br/>
        <label for="">Birthday</label><br>
        <input type="text" name="birthday"><br/>
        <label for="">Department</label><br>
        <input type="text" name="department"><br/>
        <label for="">rank</label><br>
        <input type="text" name="rank"><br/>
        <input type= "submit" name ="add" value ="ADD"/>

    </form>
</body>
</html>