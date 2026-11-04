<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'royal_step_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
        $stmt = $pdo->prepare("INSERT INTO orders (tracking_id, shoe_name, size, quantity, total_inr, customer_name, customer_phone, customer_email, customer_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['trackingId'],
            $data['shoeName'],
            $data['size'],
            $data['qty'],
            $data['totalINR'],
            $data['customer']['name'],
            $data['customer']['phone'],
            $data['customer']['email'],
            $data['customer']['address']
        ]);

        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "No data provided"]);
    }
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>