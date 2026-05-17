<!DOCTYPE html>
<html>

<body>
    <h1>Login Form Data</h1>
    <h1>Please feel free to submit form</h1>
    <h1>Create an Account</h1>
    <h2>This is form submission form</h2>
    <h3>User Data store in MySQL Database</h3>
    <h3>Username and eamil id store in mysQL Database</h3>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Enter Username" />
        <br><br>
        <input type="email" name="email" placeholder="Enter Email" />
        <br><br>
        <input type="password" name="password" placeholder="Enter password" />
        <br><br>
        <input type="submit" value="Submit" />
        <br><br>
        <input type="checkbox" />

    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // 🔥 Set Cookies (valid for 1 hour)
        setcookie("username", $username, time() + 3600);
        setcookie("email", $email, time() + 3600);
        setcookie("password", $password, time() + 3600);

        echo "Cookies stored successfully!";
    }

    // 🔥 Show Cookies Data
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        echo "<br><br>";
        echo "Username from cookie: " . $_COOKIE['username'];
        echo "<br><br>";
        echo "Email from cookie: " . $_COOKIE['eamil'];
        echo "<br><br>";
        echo "Password from cookie: " . $_COOKIE['password'];
    }
    ?>

</body>

</html>