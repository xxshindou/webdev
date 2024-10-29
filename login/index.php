<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Personal Page</title>

</head>

<body>
<div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>

            <p><a href="/webpage/register/index.php">SIGN UP</a></p>
        </form>
    </div>

    <!-- The Modal -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="errorMessage"></p>
        </div>
    </div>
    <?php
        // Define the correct username and password
        $correct_username = 'admin';
        $correct_password = 'admin';

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password']; 

            if ($username === $correct_username && $password === $correct_password) {
                // Successful login
                header("Location:/webpage/dashboard/index.php");
                exit();
            } else {
                // Failed login
                $error = "Invalid username or password!";
                echo "<script type='text/javascript'>
                        document.getElementById('errorMessage').innerText = '$error';
                        var modal = document.getElementById('errorModal');
                        var modalContent = document.querySelector('.modal-content');
                        modal.classList.add('show');
                        modalContent.classList.add('show');
                      </script>";
            }
        }
    ?>

    <script>
        // Get the modal
        var modal = document.getElementById("errorModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.classList.remove('show');
            document.querySelector('.modal-content').classList.remove('show');
            setTimeout(function() {
                modal.style.display = "none";
            }, 500);
        }

        // Close the modal when the user clicks anywhere outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove('show');
                document.querySelector('.modal-content').classList.remove('show');
                setTimeout(function() {
                    modal.style.display = "none";
                }, 500);
            }
        }
    </script>
</body>
</html>