<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $weather_message = "";

        if ($temperature < 0) {
            $weather_message = "It's freezing!";
        } elseif ($temperature >= 0 && $temperature <= 15) {
            $weather_message = "It's cool.";
        } elseif ($temperature > 15) {
            $weather_message = "It's warm.";
        }

        echo "<p>$weather_message</p>";
    }
    ?>
</body>
</html>
