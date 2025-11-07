<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
$name = htmlspecialchars($_POST['name']);
$address = htmlspecialchars($_POST['address']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$size = htmlspecialchars($_POST['shirt-size']);
$color = htmlspecialchars($_POST['shirt-color']);
$design = isset($_POST['design']) ? $_POST['design'] : [];
$quantity = htmlspecialchars($_POST['quantity']);
$notes = htmlspecialchars($_POST['notes']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Black Goose Apparel | Order Received</title>
<link rel="stylesheet" href="assets/css/output.css">
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/892/892458.png" type="image/x-icon">
</head>
<body>
<fieldset class="fieldset-style">
    <h1 class="text-center">THANK YOU</h1>
    <hr class="border-style border-dark" />
    <p>Thank you for ordering from <strong>Black Goose Apparel</strong>.<br>
    We’ve received your streetwear customization details:</p>

    <h3>Your Information</h3>
    <ul type="none">
    <li><b>Name:</b> <?= $name ?></li>
    <li><b>Address:</b> <?= $address ?></li>
    <li><b>Phone:</b> <?= $phone ?></li>
    <li><b>Email:</b> <?= $email ?></li>
    </ul>

    <h3>Your Order</h3>
    <ul type="none">
    <li><b>Size:</b> <?= $size ?></li>
    <li><b>Color:</b> <?= $color ?></li>
    <li><b>Design:</b> <?= implode(', ', $design) ?></li>
    <li><b>Quantity:</b> <?= $quantity ?></li>
    </ul>

    <p><b>Notes:</b> <?= $notes ?></p>
    <hr class="border-style border-dark" />
    <p><em>This site is for educational purposes only. No shirts will be delivered.</em></p>
</fieldset>
</body>
</html>
<?php
} else {
echo "<script>alert('Please fill out the form first.');</script>";
exit();
}
?>
