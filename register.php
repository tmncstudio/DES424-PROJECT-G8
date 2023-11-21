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
        justify-content: center;
        align-items: center;
        height: 100vh; /* Adjust as needed */
    }

    .login-box {
        text-align: center;
    }

    .input-box {
        margin-bottom: 15px;
    }

    /* Styling for buttons */
    button {
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
</style>

<div class="container loginContainer">
    <div class="login-box">
        <h1>Task Manager</h1>
        
        <form method="post" action="registerValidation.php">
            <div class="input-box">
                <label for="register">Username:</label>
                <input type="text" name="register">
            </div>
            <div class="input-box">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Register</button>
        </form>
        <?php
            if(isset($_SESSION['registerError'])){
                echo $_SESSION['registerError'];
            }
        ?>
    </div>
</div>

<?php include 'footer.php';?>
