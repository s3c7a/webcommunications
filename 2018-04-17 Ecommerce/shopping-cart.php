<?php

$title = "Shopping Cart";
require('includes/header.php');

//print_r ($_SESSION['cart']);

$productIds = implode(',',$_SESSION['cart']); //Implode just creates a string out of your variables.

if(empty($productIds)){

  echo '<h1>My Cart</h1>
  <p>You have not added any products to your cart, please <a href="products.php?sort=name">browse our store</a>.</p>';

}else{
  $query = "SELECT id,thumbnail,product,size,servings,price,alt FROM products WHERE id IN ($productIds)";
  //echo $query.;
  $result = mysqli_query($connection,$query);
 
      if(mysqli_num_rows($result)>0){
        // Print table headers
          echo
          '<h1>'
          .$title.
          '</h1>
          <table>
            <tr>
              <th>Product</th>
              <th class="off">Description</th>
              <th>Price</th>
            </tr>';
        // Run the loop to print all ordered items
          while ($row=mysqli_fetch_array($result)){
            echo
            '<tr>
               <td>'.$row['product'].'</td>
               <td class="off">'.$row['size'].' '.$row['servings'].'</td>
               <td>CAD$ '.$row['price'].
              '</td>
            </tr>';
          //Cereate an array with prices and ids of all the ordered products
          $total[] = $row['price'];
          $orderIds[] = $row['id'];
          }
        // Do the math
          $subTotal = array_sum($total);
          $tax = $subTotal*.05;
          $grandTotal = $subTotal+$tax;

        // Print the results and close the table
          echo
            '<tr>
              <td colspan="2" class="math">Subtotal</td>
              <td>CAD$ '.number_format($subTotal,2).'</td>
            </tr>
            <tr>
              <td colspan="2" class="math">Tax (5%)</td>
              <td>CAD$ '.number_format($tax,2).'</td>
            </tr>
            <tr>
              <td colspan="2" class="math">Grand Total</td>
              <td>CAD$ '.number_format($grandTotal,2).'</td>
            </tr>
          </table>';
          // Print the form for customers to submit order.
          echo
          '<h2>Place your order</h2>
          <form action="confirmation.php" method="post">

            <label for="name">First Name</label>
            <input type="text" name="name" id="name" required>

            <label for="name">Last Name</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required>

            <input type="hidden" name="orderids" id="orderids" value="'.implode(",",$orderIds).'"> <!-- Implode the variables on the array created to store what the customer submitted -->
            <input type="hidden" name="subtotal" id="subtotal" value="'.$subTotal.'">
            <input type="hidden" name="tax" id="tax" value="'.$tax.'">
            <input type="hidden" name="grandtotal" id="hidden" value="'.$grandTotal.'">
            <input type="submit" value="Order Now">
          </form>';

      }
    }
// print_r($orderIds);
// echo implode(",",$orderIds);

require('includes/footer.php')?>