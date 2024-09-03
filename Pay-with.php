<?php
//if the amount is set, store it in a variable $amount
if(isset($_POST['amount'])){
    $amount = $_POST['amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAY</title>
    <link rel="stylesheet" href="style.css"> 
    <script src="https://kit.fontawesome.com/f8fb36d9f1.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="index.php"><button class="back">BACK TO STORE</button></a>
    <div class="main-box main-mpesa">
        <div class="pay-modes">
            <button class="mpesa"><i class="fa-solid fa-m fa-beat"></i> Mpesa</button>
            <button class="paypal"><i class="fa-brands fa-paypal fa-beat"></i> PayPal</button>
        </div>
        <form action="initiate_payment.php" method="POST">
            <img src="mpesa_logo.png" alt="mpesa_logo" class="mpesa_logo">
            <h2 class="mode-title">LIPA NA MPESA</h2>
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" value="<?= $amount ?>" readonly>
            <label for="phone-no">Phone number:</label>
            <input type="text" name="phone-no" id="phone-no" placeholder="Phone number">
            <button type="submit" name="pay" class="pay-btn">PAY WITH MPESA</button>
        </form>
    </div>
    <div class="main-box main-paypal">
        <div class="pay-modes">
            <button class="mpesa"><i class="fa-solid fa-m fa-beat"></i> Mpesa</button>
            <button class="paypal"><i class="fa-brands fa-paypal fa-beat"></i> PayPal</button>
        </div>
        <form action="initiate_paypal_payment.php" method="POST">
        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" class="paypal_logo">
            <h2 class="mode-title">PAY WITH PAYPAL</h2>
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" value="200" readonly>
            <!-- <label for="phone-no">Phone number:</label>
            <input type="text" name="phone-no" id="phone-no" placeholder="Phone number"> -->
            <button type="submit" name="paypal" class="paypal-btn">PAY WITH PAYPAL</button>
        </form>
    </div>

<script src="script.js"></script>
</body>
</html>