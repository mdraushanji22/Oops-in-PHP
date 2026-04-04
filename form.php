<!DOCTYPE html>
<html>

<body>
    <h1>Forms in PHP</h1>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Enter Username" />
        <br><br>
        <input type="password" name="password" placeholder="Enter password" />
        <br><br>
        <input type="submit" value="Submit" />
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // 🔥 Set Cookies (valid for 1 hour)
        setcookie("username", $username, time() + 3600);
        setcookie("password", $password, time() + 3600);

        echo "Cookies stored successfully!";
    }

    // 🔥 Show Cookies Data
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        echo "<br><br>";
        echo "Username from cookie: " . $_COOKIE['username'];
        echo "<br><br>";
        echo "Password from cookie: " . $_COOKIE['password'];
    }
    ?>

</body>

</html>