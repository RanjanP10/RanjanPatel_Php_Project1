<html>
<head>
<!-------------------------- Ranjan Patel - 8622791-------------------->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">
<style>
  body .main{
          font-family: Arial, Helvetica, sans-serif;
          margin-left:400px;
          margin-top:50px;
        }
</style>

<?php



session_start();
require('header.php');// add header file where i put navigation bar 
require('mysqli_connect.php'); // add file for database connection
$user = $_SESSION['userid']; // get userid from session to store in order table so we can identify order is for whom
$product = $_SESSION['PID']; // get product id from session to store in order table so we can store order for what product
$date  = date('Y-m-d'); // get current date for order
$random = rand(1,1000); // random number for order id
    
       $sql = "INSERT INTO `porders` ( `OrderNumber`, `UID`, `PID`, `odate`) VALUES ( '$random', '$user', '$product', '$date');";
          // insert query to add data in order table
        if ($dbc->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
       
    
        $sql = "SELECT ID,Quantity FROM `prodcts` where ID= $product";
        // query get product details of given product id specially quantity to maintain inventory
        $result = $dbc->query($sql); // execute query
        $row = $result->fetch_assoc();
        $quantity = intval($row['Quantity'])- 1; // will covert row data in integer nd reduce quantity by 1 as we got order that
 
        $sql1 ="UPDATE `prodcts` SET `Quantity` = '$quantity' WHERE `prodcts`.`ID` = $product;"; // update quantity
       $dbc->query($sql1);






?>
</head>
<body>
<div class="main">   
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>keep in tough </strong> for new edition of books and new arrivals .</p>
  <hr>
  <p>
    want to shop more? <a href="store.php"> store</a>
  </p>
  <p class="lead">
    <a class="logout" href="logout.php" >logout</a>
  </p>
</div>
</div>
</body>
</html>