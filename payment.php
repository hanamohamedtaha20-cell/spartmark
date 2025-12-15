<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="payment_post.php" method="post">

    <h2>Order Details</h2>

    <label>Customer Name</label><br>
    <input type="text" name="customer_name" value="Ahmed Ali" readonly><br>

    <label>Address</label><br>
    <input type="text" name="address" value="Cairo, Egypt" readonly><br>

    <label>Order</label><br>
    <input type="text" name="order_details" value="PlayStation 5 Standard (Slim)" readonly><br>

    <label>Total Amount</label><br>
    <input type="text" name="amount" value="EGP30,850" readonly><br><br>

    <h3>Payment Method</h3>

    <input type="radio" name="payment_method" value="cash" checked>
    <label>Cash on Delivery</label><br>

    <input type="radio" name="payment_method" value="card">
    <label>Card Payment</label><br><br>

    <div class="card-box">
        <label for="name">Card Holder Name</label><br>
        <input type="text" name="card_name" id="name" required><br>

        <label for="card_number">Card Number</label><br>
        <input type="password" name="card_number" id="card_number" placeholder="44xx xxxx xxxx xxxx" required><br>

        <label for="expiry_date">Expiry Date</label><br>
        <input type="month" name="expiry_date" id="expiry_date" required><br>

        <label for="cvv">CVV</label><br>
        <input type="password" name="cvv" id="cvv" placeholder="xxx" required><br>
    </div>

    <br>
    <button type="submit" name="submit">Submit Payment</button>

</form>

</body>
</html>
