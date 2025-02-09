<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Database connection
include_once("connect.php");

// Get the current year and last year
$currentYear = date("Y");
$lastYear = $currentYear - 1;

// Fetch total members for this year
$sqlCurrent = "SELECT COUNT(*) AS total FROM members WHERE YEAR(join_date) = :currentYear";
$stmtCurrent = $pdo->prepare($sqlCurrent);
$stmtCurrent->execute(['currentYear' => $currentYear]);
$currentTotal = $stmtCurrent->fetch()['total'];

// Fetch total members for last year
$sqlLast = "SELECT COUNT(*) AS total FROM members WHERE YEAR(join_date) = :lastYear";
$stmtLast = $pdo->prepare($sqlLast);
$stmtLast->execute(['lastYear' => $lastYear]);
$lastTotal = $stmtLast->fetch()['total'];

// Calculate the absolute difference
$diff = $currentTotal - $lastTotal;

// Calculate the percentage difference (avoid division by zero)
$percentageDiff = ($lastTotal > 0) ? ($diff / $lastTotal) * 100 : 0;

// Response data
$response = [
    "current_year" => $currentYear,
    "last_year" => $lastYear,
    "current_total" => $currentTotal,
    "last_total" => $lastTotal,
    "difference" => $diff,
    "percentage_difference" => round($percentageDiff, 2) . "%" // Round to 2 decimal places
];

// Return JSON response
echo json_encode($response);
?>
