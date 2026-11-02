
<?php
// Load the external file containing the addNumbers function.
require_once 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jasmine's Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Random Number Table</h1>

    <p>This table displays random numbers
    generated using PHP nested loops.</p>

    <!-- Start of the random number table -->
    <table>
        <tbody>

<?php
// Outer loop creates 5 rows.
for ($row = 1; $row <= 5; $row++) {
?>
    <tr>
        <?php
        // Inner loop creates 5 columns.
        for ($col = 1; $col <= 5; $col++) {

            // Generate two random numbers.
            $num1 = rand(1, 100);
            $num2 = rand(1, 100);

            // Call the external function.
            $number = addNumbers($num1, $num2);
        ?>
            <td><?php echo $number; ?></td>
        <?php
        } // End inner loop.
        ?>
    </tr>
<?php
} // End outer loop.
?>
