<?php
header("Content-Type: application/json");

// Include database connection
include_once ('../connect.php');

try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM members WHERE department='Men'");
    $result = $stmt->fetch();

    echo json_encode(["total_members" => $result["total"]]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>
