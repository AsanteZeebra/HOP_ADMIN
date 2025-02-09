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

    // Query male members
    $male_query = "SELECT COUNT(*) AS males FROM members WHERE department = 'Men'";
    $male_result = $pdo->query($male_query);
    $male_row = $male_result->fetch();
    $male_members = (int) $male_row['males'];

    // Calculate percentage of men
    $male_percentage = ($total_members > 0) ? ($male_members / $total_members) * 100 : 0;

    // Return JSON response
    echo json_encode([
        "success" => true,
      
        "male_percentage" => round($male_percentage, 2) // Rounded to 2 decimal places
    ]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>
