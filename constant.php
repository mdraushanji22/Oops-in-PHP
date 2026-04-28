<!DOCTYPE html>
<html>

<body>

    <?php
    class Goodbye
    {
        const MESSAGE = "Thank you for the valuable information";
        const GoodMESSAGE = "Thank you for the Good message";


        public function bye()
        {
            echo self::MESSAGE;
        }
        public function Goodbye()
        {
            echo self::GoodMESSAGE;
        }
    }

    $goodbye = new Goodbye();
    $goodbye->bye();
    echo "<br>";
    $goodbye->Goodbye();

    ?>

</body>

</html>