<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="bank";

$con=mysqli_connect($server,$username,$password,$db);

if(! $con)
{
    die ("Connection failed due to".mysqli_connect_error());
}
$q="select * from bank.y";
$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img class="im" src="bank3.jpg">
<br>
<a href="index.php"> 
<input type="image" src="home.png" class="home"/>
</a>
 <h1>Transactions</h1>
 <br> <br>

    <table>
    <thead>
            <th>ID</th>
           <th>Sender</th>
           <th>Receiver</th>
           <th>Amount</th>
       </thead>
       <tbody>
        <tr>
        
            <?php while($row=mysqli_fetch_array($result)) {?>
                <td style="width: 70px;">
                    <?php echo $row['id'];?>
                </td>
                <td>
                    <?php echo $row['sender'];?>
                </td>
                <td>
                    <?php echo $row['receiver'];?>
                </td>
                <td>
                    <?php echo $row['amount'];?>
                </td>
                
            
            </tr>
            <?php } ?>

       </tbody>
 </table>
</body>
</html>