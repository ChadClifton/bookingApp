<div class="clientInfo">
    <input type='text' name='clientNname' class='client' placeholder='Name' required>
    <input type='text' name='surname' class='client' placeholder='Surname' required>
    <input type='text' name='email' class='client' placeholder='Email' required>
</div>  

 
<?php
$clientContents = [];
$clientContents[$name] = [
    "clientName" => $name,
    "surname" => $surname,
    "email" => $email,
    
];
file_put_contents("/MAMP/htdocs/bookingApp/src/json/booking.json", json_encode($clientContents, JSON_PRETTY_PRINT));
?>
                       
