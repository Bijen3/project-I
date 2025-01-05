<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div id="box-container">

        <div id="form-box">

            <h1 class="title">Welcome Back</h1>
            <p class="credentials">Enter your credentials to sign in.</p>

            <form onsubmit="return validateForm()">

                <div id="input-group">

                    <div id="input-field" namefield>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username" placeholder="Enter your username" required>
                    </div>

                    <div id="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    </div>
                    
                </div>

                <div id="remember-forgot">
                    <label><input type="checkbox" id="remember-me">Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <div id="btn-field">
                    <button type="button" class="signinbtn" onclick="location.href='#'">Sign In</button>
                </div>                

                <div id="account">
                    <p>Don't have an account? <a href="register.php" class="registerbtn">Register</a></p>
                </div>

            </form>

            <script>
                function validateForm() {
                    const username = document.getElementById('username').value;
                    const password = document.getElementById('password').value;
                    if (!username || !password) {
                        alert('Both fields are required!');
                        return false;
                    }
                    return true;
                }
            </script>

        </div>

    </div>
    
</body>
</html>