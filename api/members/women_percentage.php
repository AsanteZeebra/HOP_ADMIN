<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Database connection
include_once("../connect.php");

try {
    // Query total members
    $total_query = "SELECT COUNT(*) AS total FROM members";
    $total_result = $pdo->query($total_query);
    $total_row = $total_result->fetch();
    $total_members = (int) $total_row['total'];

    // Query female members
    $female_query = "SELECT COUNT(*) AS females FROM members WHERE department = 'Women'";
    $female_result = $pdo->query($female_query);
    $female_row = $female_result->fetch();
    $female_members = (int) $female_row['females'];

    // Calculate percentage of women
    $female_percentage = ($total_members > 0) ? ($female_members / $total_members) * 100 : 0;

    // Return JSON response
    echo json_encode([
        "success" => true,
        "female_percentage" => round($female_percentage, 2) // Rounded to 2 decimal places
    ]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>
