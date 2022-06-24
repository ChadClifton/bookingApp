<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed&Dice</title>
    <link rel="stylesheet" href="/src/css/stylesheet.css">
    <script src="/src/javascript/script.js" defer></script>
</head>

<body>
<?php
    // PHP Mailer
    include("/MAMP/htdocs/bookingApp/vendor/autoload.php");

    // Header
    include("/MAMP/htdocs/bookingApp/src/php/header.php");

    // Main
    include("/MAMP/htdocs/bookingApp/src/php/includeMain.php");

    // Footer
    include("/MAMP/htdocs/bookingApp/src/php/footer.php");

?>
</body>

</html>