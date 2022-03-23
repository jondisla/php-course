<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>
<?php

$brand = array('Toyota', 'Subaru', 'Nissan');
    echo $brand;
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        if($fname && $lname){
            echo $fname . ' ' . $lname;
        }
    };
?>
    <form action="" method="post">
        <label for="fname">First Name</label>
        <input type="text" class="text" name="fname">
        <br>
        <label for="lname">Last Name</label>
        <input type="text" class="text" name="lname">
        <br>
        <button type="submit" name='submit'>Submit</button>
    </form>
</body>
</html>