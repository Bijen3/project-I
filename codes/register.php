<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div id="box-container">

        <div id="form-box">

            <h1 class="title">Register</h1>
            <p class="credentials">Create your account.</p>

            <form onsubmit="return validateForm()">

                <div id="input-group">

                    <div id="input-field" namefield>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Enter your username">
                    </div>

                    <div id="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Enter your email">
                    </div>

                    <div id="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Enter your password">
                    </div>

                </div>

                <div id="btn-field">
                    <button type="button" class="registerbtn" onclick="location.href='#'">Register</button>
                </div>

                <div id="account">
                    <p>Already have an account? <a href="signin.php" class="signinbtn">Sign In</a></p>
                </div>

            </form>
        </div>
    </div>
    
</body>
</html>