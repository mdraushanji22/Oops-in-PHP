<!DOCTYPE html>
<html>

<body>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Enter Username" />
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password" />
        <br>
        <br>
        <input type="submit" value="Submit" />
    </form>
    <br>
    <?php
    echo "UserName is:" . $_POST['username'];
    echo "<br>";
    echo "<br>";
    echo "Password is:" . $_POST['password'];



    ?>
</body>

</html>