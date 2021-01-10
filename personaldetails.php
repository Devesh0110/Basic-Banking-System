<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="bank";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("connection to this database failed due to:".mysqli_connect_error());
}
$q="select * from bank.users";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
    <img class="im" src="bank3.jpg">
    <a href="index.php">
    <input type="image" style="height:50px;width:50px" src="https://cdn3.vectorstock.com/i/1000x1000/60/47/home-icon-white-silhouette-on-blue-round-vector-20326047.jpg" class="home">
    </a>
    <br><br>
    <h1>Customers</h1>
    <br>
    <table>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account</th>
        <th>View</th>
        </thead>
        <tbody>
            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-1" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-2" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-3" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-4" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-5" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-6" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-7" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-8" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-9" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-10" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>
</body>
</html>