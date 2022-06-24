<!-- Create the Hotel Cards -->
<?php
function createHotels($hotels)
{
    foreach ($hotels as $index => $hotelsArray) {
        $index = $index + 1;
        
        echo "
            <div class='card'>
                <img src=\"" . $hotelsArray['image'] . "\" alt=\"" . $hotelsArray['name'] . "\" class='accommodation' title=\"" . $hotelsArray['name'] . "\">
                <div class='hotel-data'>
                    <p id='name'>" . $hotelsArray['name'] . "</p>
                    <p id='address'>" . $hotelsArray['address'] . "</p>
                    <p id='price'>R" . $hotelsArray['price'] . ".00 ZAR per night</p>
                    <p id='description'>". $hotelsArray['description']."</p>
                    </div>
                <form action='/bookingApp/book.php'>
                    <input type='hidden' value=" . $hotelsArray['id'] . " name='hotel_id'>
                    <input type='hidden' value=" . $hotelsArray['range'] . " name='hotel_range'>
                    <button class='booking-btn' title='book'>+</button>
                </form>
            </div> 
            ";
    }
}


