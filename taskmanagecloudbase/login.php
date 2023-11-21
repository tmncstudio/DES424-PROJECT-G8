<?php
    session_start();
    if(isset($_SESSION['logged-in'])){
        header('Location: index.php');
        exit();
    }
?>
<?php include 'header.php';?>

<style>
    /* Add your CSS styles here */
    .loginContainer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Adjust as needed */
    }

    .login-box {
        text-align: center;
    }

    .input-box {
        margin-bottom: 15px;
    }

    /* Styling for buttons */
    button, .register-button a {
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        margin-bottom: 15px; /* Add margin to separate buttons */
    }

    /* Styling for Register button */
    .register-button a {
        background-color: #4285F4; /* Change color as needed */
    }
</style>

<div class="container loginContainer">
    <div class="login-box">
        <h1>Task Manage</h1>
        
        <h1></h1>
        <form method="post" action="loginValidation.php">
            <div class="input-box">
                <label for="login">Login:</label>
                <input type="text" name="login">
            </div>
            <div class="input-box">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Log in</button>
        </form>
        <?php
            if(isset($_SESSION['loginError'])){
                echo $_SESSION['loginError'];
            }
        ?>
    </div>

    <!-- Move Register button below Login button -->
    <div class="register-button">
        <a href="register.php">Register</a>
    </div>
</div>

<?php include 'footer.php';?>
