<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>grade converter</h1>

    <form action="converter.php" method="post">
        <label for="grade">Enter your grade:</label>
        <input type="number" id="grade" name="grade" required>
        <button type="submit"> Convert</button>
    </form>

    <?php if (isset($_GET['result'])): ?>
        <div class="result">
            <h2>Your letter grade is: <?php echo htmlspecialchars($_GET['result']); ?> </h2>
        </div>
        <?php endif; ?>
</div>
</body>
</html>