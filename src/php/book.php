<div class="booking-space">

    <?php
    include("src/php/clientInfo.php");
    include("src/php/math.php");
    ?>

    <div class='check-in-out'>
        <div>
            <label for='start' class='date'>Start Date:</label>
            <input type='date' name='start' class='date-input' required>
        </div>
        <div class='start-end'>
            <label for='end' class='date'>End Date:</label>
            <input type='date' name='end' class='date-input' required>
        </div>
    </div>


    <form action='src/email' class='checkout-form'>
        <input type='hidden' value ='$id' name='booking_id'>
        <button class='checkout-button' title='Checkout'>Checkout</button>
    </form>     
</div>
