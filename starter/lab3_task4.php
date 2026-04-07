<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 4: Nested Conditions — Loan Eligibility Checker [6 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below.
 *
 * @author     [MUTWIRI KELVIN MWENDA]
 * @student    [ENE212-0067/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [4TH APRIL 2026]
 */

// ── Problem: Student Loan Eligibility System ───────────────────────────────

// ── Test data (change to test all branches) ───────────────────────────────
$enrolled       = true;
$gpa            = 3.1;
$annual_income  = 180000;
$previous_loan  = false;

// ── STEP 1: Outer enrollment check ────────────────────────────────────────
$decision = "";

if ($enrolled) {
    // INNER CHECK 1 — GPA requirement
    if ($gpa >= 2.0) {
        
        // Ternary for renewal vs new application 
        $app_type = $previous_loan ? " | Renewal application" : " | New application";
        
        // INNER CHECK 2 — Household income bracket
        if ($annual_income < 100000) {
            $decision = "Eligible — Full loan award" . $app_type;
        } elseif ($annual_income < 250000) {
            $decision = "Eligible — Partial loan (75%)" . $app_type;
        } elseif ($annual_income < 500000) {
            $decision = "Eligible — Partial loan (50%)" . $app_type;
        } else {
            $decision = "Not eligible — household income exceeds threshold";
        }
        
    } else {
        $decision = "Not eligible — GPA below minimum (2.0)";
    }
} else {
    $decision = "Not eligible — must be an active student";
}

// ── STEP 2: Display result ────────────────────────────────────────────────
$enrolled_display = $enrolled ? "Yes" : "No";
$previous_display = $previous_loan ? "Yes" : "No";

echo "<h2>HELB Loan Application Status</h2>";
echo "<strong>Enrolled:</strong> " . $enrolled_display . "<br>";
echo "<strong>GPA:</strong> " . $gpa . "<br>";
echo "<strong>Annual Income:</strong> KES " . number_format($annual_income) . "<br>";
echo "<strong>Previous Loan:</strong> " . $previous_display . "<br><br>";
echo "<strong>DECISION:</strong> " . $decision . "<br><br>";

// ── Required Test Data Sets — screenshot each ─────────────────────────────
// Set A: enrolled=true,  gpa=3.1, income=180000,  previous=false → Partial 75%
// Set B: enrolled=true,  gpa=1.8, income=80000,   previous=false → GPA fail
// Set C: enrolled=false, gpa=3.5, income=60000,   previous=true  → Not enrolled
// Set D: enrolled=true,  gpa=2.5, income=600000,  previous=true  → Income fail
// Set E: enrolled=true,  gpa=2.0, income=50000,   previous=true  → Full | Renewal
?>