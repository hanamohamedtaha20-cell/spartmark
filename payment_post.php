<?php

$err_s = 0;

if (isset($_POST['submit'])) {

    $payment_method = $_POST['payment_method'];

    /* Card validation only */
    if ($payment_method === "card") {

        $card_name   = trim($_POST['card_name']);
        $card_number = trim($_POST['card_number']);
        $expiry_date = $_POST['expiry_date'];
        $cvv         = trim($_POST['cvv']);

        if (empty($card_name)) {
            $card_error = "<p>Please enter card holder name</p>";
            $err_s = 1;
        } elseif (!ctype_alpha(str_replace(' ', '', $card_name))) {
            $card_error = "<p>Invalid card holder name</p>";
            $err_s = 1;
        }

        if (empty($card_number)) {
            $card_error = "<p>Please enter card number</p>";
            $err_s = 1;
        } elseif (!ctype_digit($card_number) || strlen($card_number) != 16) {
            $card_error = "<p>Card number must be 16 digits</p>";
            $err_s = 1;
        }

        if (empty($expiry_date)) {
            $card_error = "<p>Please enter expiry date</p>";
            $err_s = 1;
        }

        if (empty($cvv)) {
            $card_error = "<p>Please enter CVV</p>";
            $err_s = 1;
        } elseif (!ctype_digit($cvv) || strlen($cvv) != 3) {
            $card_error = "<p>CVV must be 3 digits</p>";
            $err_s = 1;
        }
    }

    if ($err_s == 0) {

        if ($payment_method === "cash") {
            echo "<h2>Order Confirmed</h2>";
            echo "<p>Payment Method: Cash on Delivery</p>";
        } else {
            echo "<h2>Payment Successful</h2>";
            echo "<p>Payment Method: Card</p>";
        }
    }
}
?>
