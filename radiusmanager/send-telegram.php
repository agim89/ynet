<?php
header('Content-Type: application/json');

// Store in environment variables or a secure config file
$botToken = getenv('TELEGRAM_BOT_TOKEN'); // e.g., '5222913089'
$chatId = getenv('TELEGRAM_CHAT_ID');     // e.g., '5231866997'

$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'];

$url = "https://api.telegram.org/bot$botToken/sendMessage";
$payload = [
    'chat_id' => $chatId,
    'text' => $message
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo json_encode(['success' => $response !== false]);
?>