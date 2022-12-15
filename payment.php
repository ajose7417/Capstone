<?php 

 
// Include database connection file 
include_once 'database.php'; 
?>

<div class="container">
    
        <div class="pro-box">
            
            <div class="body">

            
                <h1 style='text-align:center;'>Payment for the Quiz</h1>
                <h3 style='text-align:center;'>Price: 30<?php echo PAYPAL_CURRENCY; ?></h3>
				
                <!-- PayPal payment form for displaying the buy button -->
                <form action="<?php echo PAYPAL_URL; ?>" method="post">
                    <!-- Identify your business so that you can collect the payments. -->
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
					
                    <!-- Specify details about the item that buyers will purchase. -->
                    <input type="hidden" name="item_name" value="Quiz">
                    <input type="hidden" name="item_number" value="1">
                    <input type="hidden" name="amount" value="30">
                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
					
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
					
                    <!-- Display the payment button. -->
                    <input style='margin-left: 42%; height: 100px;' type="image" name="submit" border="0" src="https://cdn-5b7602e2f911cb0ac41f63fa.closte.com/wp-content/uploads/2021/03/paypal-pay-here-button-1.png">
                </form>
            </div>
        </div>
</div>