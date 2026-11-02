

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
                        // Generate a random number from 1 to 100.
                        $number = rand(1, 100);
                    ?>
                        <td><?php echo $number; ?></td>
                    <?php
                    } // End inner loop.
                    ?>
                </tr>
            <?php
            } // End outer loop.
            ?>
        </tbody>
    </table>
    <!-- End of the random number table -->

</body>
</html>
