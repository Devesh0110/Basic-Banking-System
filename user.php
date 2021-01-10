<?php
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $db="bank";

    $con=mysqli_connect($server,$username,$password,$db);
    if(!$con)
    {
        die("Connection Failed");
    }
    $name=$_POST['name'];
    $q="select * from bank.users where name='$name'";
    $result=mysqli_query($con,$q);
    $row_count=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    $mail=$row['email'];
    $amount=$row['amount'];

    $_SESSION['name']=$name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img class="im" src="bank3.jpg">
    <a href="index.php">
    <input type="image" src="https://cdn3.vectorstock.com/i/1000x1000/60/47/home-icon-white-silhouette-on-blue-round-vector-20326047.jpg" class="home"></a>
    <br><br><br>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
        </thead>

        <tbody>
            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>

                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $mail ?></td>
                <td><?php echo $amount ?></td>
            </tr>
        </tbody>
    </table>

    <br><br><br>

    <a href="transferto.php">
    <button class="transferto" href="transferto.php">Transfer To</button></a>

    <br>

   <center> <a href="personaldetails.php">
    <button class="transferto" href="personaldetails.php">Back</button></a></center>


</body>
</html>