<!-- Hotels Body -->
<?php
require "/MAMP/htdocs/bookingApp/src/php/hotelsInfo.php";
$_SESSION['hotels'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/bookingApp/src/json/hotelInfo.json");
$fileContents = json_decode($fileContents, true);
?>

<main class="main">
    <div class="cards">
        <?php createHotels($fileContents); ?>
    </div>
</main>
