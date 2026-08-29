<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Circle Area & Circumference</title>
</head>
<body>
    <h2>Calculate Area and Circumference of a Circle</h2>

    <form method="post">
        <label for="radius">Enter radius:</label>
        <input type="number" step="any" name="radius" id="radius" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get and sanitize radius
        $radius = floatval($_POST['radius']);

        if ($radius < 0) {
            echo "<p class='result'>Radius cannot be negative.</p>";
        } else {
            // Formulas
            // Area = π * r^2
            // Circumference = 2 * π * r
            $area = M_PI * $radius * $radius;
            $circumference = 2 * M_PI * $radius;

            echo "<div class='result'>";
            echo "Radius: " . htmlspecialchars($radius) . "<br>";
            echo "Area: " . number_format($area, 4) . "<br>";
            echo "Circumference: " . number_format($circumference, 4);
            echo "</div>";
        }
    }
    ?>
</body>
</html>