<!doctype html>
<html lang="en">
<!-------------------------- Ranjan Patel - 8622791-------------------->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!------------------css style to design page------>
    <style>

    
    <style>
* {
  box-sizing: border-box; 
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #ff5825;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  margin-top:12px;

}

input[type=submit]:hover {
  background-color: #c24a25;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:70%;
  margin-left:200px;
  margin-top:50px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.error{
  color:red;
}
.cart{

  position: absolute;
  top: 0px;
  right: 0px;
  font-size: 8px;
  background-color:  #918686;
  color:white;
  padding:2px;
  margin-right:20px;

}
.carttext{
  position: absolute;
  top: 0px;
  right: 0px;
  font-size: 15px;
  background-color:  red;
  color:white;
  padding:4px;
  border-radius: 65px;
  
}
</style>
<meta charset="utf-8">
<title>index Page</title>
  <?php 
    require('header.php'); // add header file where i put navigation bar 
    session_start(); // start session is function  which we need when we are using session
    $id = $_REQUEST['ID']; // get ID of product from link
    $_SESSION["PID"] = $id; // put id of product in session to store id for other pages

    require("submit.php"); // get submit page where form validation is done    
  ?>
</head> 
<body>
<div class="cart">

    <i class='fas fa-cart-arrow-down' style='font-size:48px;color:'></i>
    <p class = 'carttext'> <?php if(isset($id)) echo "1";?></p> <!-- show product on top with cart icon -->
</div>
<div class="container">
<!-- create form for user detail -->
      <form  action="" method="POST">          
          <div class="row">
              <div class="col-25">
                <label for="fname">First Name</label>
              </div>
              <div class="col-75">
                    <input type="text" name="fname" size="30" maxlength="60" value="<?php if(isset($fname)) echo $fname;?>">
                    <snap class="error"><?php if(isset($errfname)){echo $errfname;} ?>*</snap>
              </div>
          </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Last Name</label>
              </div>
              <div class="col-75">
                  <input type="text" name="lname" size="30" maxlength="60" value="<?php if(isset($lname)) echo $lname;?>">
                  <snap class="error"><?php if(isset($errlname)){echo $errlname;} ?>*</snap>
              </div>
          </div>
         
          <p>
          <div class="row">
          <div class="col-25">
                <label for="lname">Payment Method</label>
              </div>
              <div class="col-75">
          <select id="payment" name="payment">
            <option value="cash" selected="true">Cash On Delivery</option>
            <option value="Debit">Debit Card</option>
            <option value="Credit">Credit Card</option>
            <option value="Master">Master Card</option>
          </select>
        </div>
        </div>

      <div class="row">
          <input type="submit" name="submit" value="Send" class = "button">
      </div>

      </form>
</div>
</body>
</html>