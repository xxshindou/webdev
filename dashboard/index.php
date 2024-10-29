<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Page</title>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to your Dashboard!</h1>
        <?php
        $age = 24;
        $name = "Robenta, Onemig L.";

        echo "Age: ".$age."<br>", "Name:".$name;


        // PHP code to CSS styles
        $color = 'blue';
        $font_size = '18px';

        echo "<style>";
        echo "body {";
        echo "  color: $color;";
        echo "  font-size: $font_size;";
        echo "}";
        echo "</style>";

        ?>

        <p>You have successfully logged in.</p>
        <a href="/webpage/login/index.php">Logout</a>
    </div>

</body>
</html>