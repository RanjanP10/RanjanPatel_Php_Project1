<!doctype html>
<html lang="en">
<head>
<!-------------------------- Ranjan Patel - 8622791-------------------->
        <meta charset="utf-8">
        <title>index Page</title>
        <?php   require('header.php'); ?>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <style>
            * {
                  box-sizing: border-box;
               }

        body {
          font-family: Arial, Helvetica, sans-serif;
          
        }
        .product{
          padding:30px;

        }
        /* Float four columns side by side */
        .column {
          float: left;
          width: 25%;
          padding: 0 16px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .card p{
           margin:0px;
           padding:0px;
        }
        /* Responsive columns */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
          }

        }

        /* Style the counter cards */
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          padding-top: 20px;
          padding-left:20px;
          padding-right:20px;
          text-align: center;
          background-color: #f1f1f1;
          margin-bottom:30px;
          position: relative;

        }
        .card .button {

          background-color:  #ff5825; 
          border: none;
          color: white;
          padding: 15px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          float:right;
          cursor: pointer;
          border-radius: 8px;
          width:100%;
          font-weight:bold;
          
        }
.card .quantity{
  position: absolute;
  top: -5px;
  right: 0px;
  font-size: 14px;
  background-color:  #918686;
  color:white;
  padding:5px;
  border-radius: 3px;
}
.card h3{
  color: #c24a25;
}
            </style>


</head>
<body>
  
  <?php 

    
    require('mysqli_connect.php'); // add file for database connection
    echo '<div class = "product"> '; 
    $sql = "SELECT ID,productName,productPrice,productImage,Quantity FROM `prodcts`"; // query to get all product from product table
    $result = $dbc->query($sql); // execute query

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {         
        echo '<div class="row">';
        echo '<div class="column">';
        echo '<div class="card">'; 
        echo '<img src="images/'.$row["productImage"].'" alt="book" style="width:70%; height: 270px;">'; // will show images
        echo '<h3>'.$row["productName"].'</h3>'; // product name
        echo '<p> $ '.$row["productPrice"].'</p>'; //product price
        echo '<p class="quantity"> '."current stock - ".$row["Quantity"].'</p>'; // product quantity
        echo '<a href = "checkout.php?ID='.$row["ID"].'"" class="button">'."Add to Cart".'</a><br> <br>'; 
        // on button click will redirect to checkout page with product ID with it 

        echo' </div>';
        echo '</div>';  
}
} 
echo '</div>';
?>


</body>
</html>