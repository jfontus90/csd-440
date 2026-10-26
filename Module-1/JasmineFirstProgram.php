
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My First PHP Program</title>
</head>

<body>

    <h1>Welcome to My First PHP Program!</h1>

    <?php
    // Jasmine Fontus
    // Module 1 - First PHP Program
    // This section displays a welcome message.

    echo "<p>Hello! My name is Jasmine.</p>";
    echo "<p>I am learning how to use PHP with XAMPP.</p>";
    ?>

    <h2>Makeup Shopping Calculator</h2>

    <?php
    // This section calculates the total cost of three makeup products.

    $foundation = 25;
    $lipstick = 15;
    $mascara = 12;

    $total = $foundation + $lipstick + $mascara;

    echo "<p>Foundation: $" . $foundation . "</p>";
    echo "<p>Lipstick: $" . $lipstick . "</p>";
    echo "<p>Mascara: $" . $mascara . "</p>";
    echo "<p>Total Cost: $" . $total . "</p>";
    ?>

</body>
</html>
