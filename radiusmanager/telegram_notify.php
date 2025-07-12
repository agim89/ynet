<?php
// Merr të dhënat POST
$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'] ?? 'Nuk u dërgua mesazh';

// Vendos Bot Token dhe Chat ID tuaja këtu
$botToken = '7212292059:AAHirRKvlN4SR1bO_KpZb88TmFI9xT-Hb0g'; // Jo me prefixin /bot
$chatId = '5231866997';

// Krijo URL-në e API-së
$url = "https://api.telegram.org/bot$botToken/sendMessage";

// Përgatit kërkesën me cURL
$postFields = [
    'chat_id' => $chatId,
    'text' => $message
];

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postFields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ekzekuto kërkesën
$result = curl_exec($ch);
curl_close($ch);

// Kthe përgjigjen
echo $result;
?>
