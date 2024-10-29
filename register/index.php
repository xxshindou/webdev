<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container"> <!-- holder container of all group -->
        <h2>Registraition Form</h2>
        <form action="#" method="post">

        <div class="input-group"> <!-- for fullname -->
            <label for="name"> Full name </label>
            <input type="text" name="name" id="text"/>
        </div>

        <div class="input-group"><!-- for password -->
            <label for="password"> password </label>
            <input type="email" name="password" id="password"/>
        </div>

        <div class="input-group"><!-- for password -->
            <label for="confirm-password"> confirm password</label>
            <input type="password" name="confirm-password" id="confirm-password"/>
        </div>

        <div class="input-group"> 
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="feemale">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
        </div>
        </form>
        <div class="submit"><button type="submit" href="">Register</button></div>
        <div class="back"><a href="/webpage/login/index.php"><button type="back">Back</button></a></div>
    </div>
</body>
</html>