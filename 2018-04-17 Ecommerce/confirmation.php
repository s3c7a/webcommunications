<?php

$title = "Order Confirmation";
require('includes/header.php');



	// SANITIZE DATA (Only the fields entered by the customer)
      $name = mysqli_real_escape_string($connection, $_POST['name']);
      $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
      $email = mysqli_real_escape_string($connection, $_POST['email']);

      $orderids = $_POST['orderids'];
      $subTotal = $_POST['subtotal'];
      $tax = $_POST['tax'];
      $grandTotal = $_POST['grandtotal'];
    
  // CREATE A QUERY TO WRITE DATA TO Table "orders"
      $query = "INSERT INTO orders (name,lastname,email,productids,subtotal,tax,grandtotal) VALUES ('$name','$lastname','$email','$orderids','$subTotal','$tax','$grandTotal')";
      
      if(mysqli_query($connection, $query)){
          echo
              '<h1>'.$title.'</h1>
              <h2>Thanks for your purchase '.$name.'!<h2>
              <p>Your order has been placed successfully. We\'ll contact you soon to arrange delivery details.</p>
              <p>Go back to our <a href="products.php">products</a> page.</p>';
        session_destroy();
      }else{
// If unsuccessful
        echo mysqli_error($connection);
      }

require('includes/footer.php')?>