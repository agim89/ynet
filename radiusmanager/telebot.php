<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// CORS + JSON headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
// header("Content-Type: application/json; charset=UTF-8");

// Handle OPTIONS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Read raw JSON input
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (!isset($data['message']) || empty($data['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing message']);
    exit;
}

$token = "7450086970:AAE9ndG8RfIOyhLQymQ2-RD-WO2uu7dpJYs";
$chatId = "8134846720";
$message = $data['message'];

$url = "https://api.telegram.org/bot$token/sendMessage";

$postData = [
    'chat_id' => $chatId,
    'text'    => $message
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($response === false) {
    http_response_code(500);
    echo json_encode([
        'error' => 'cURL error',
        'details' => curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Telegram API error',
        'response' => $response
    ]);
    exit;
}

echo $response; // Telegram's JSON response
exit;
?>
