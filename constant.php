<!DOCTYPE html>
<html>

<body>

    <?php
    class Goodbye
    {
        const MESSAGE = "Thank you for the valuable information";

        public function bye()
        {
            echo self::MESSAGE;
        }
    }

    $goodbye = new Goodbye();
    $goodbye->bye();
    ?>

</body>

</html>