<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <?php
    // Sample usage
    $unitsConsumed = 170; // Replace this with the actual units consumed

    // Calculate electricity bill based on the given conditions
    if ($unitsConsumed <= 50) {
        $billAmount = $unitsConsumed * 3.50;
    } elseif ($unitsConsumed <= 100) {
        $billAmount = 50 * 3.50 + ($unitsConsumed - 50) * 4.00;
    } elseif ($unitsConsumed <= 150) {
        $billAmount = 50 * 3.50 + 50 * 4.00 + ($unitsConsumed - 100) * 5.20;
    } else {
        $billAmount = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($unitsConsumed - 150) * 6.50;
    }

    // Display the electricity bill
    echo "Units Consumed: " . $unitsConsumed . "<br>";
    echo "Electricity Bill Amount: Rs. " . number_format($billAmount, 2);
    ?>
</body>
</html>
