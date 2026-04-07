<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 2: JKUAT Grade Classification System [8 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below. Marks are awarded for all
 * three components: pseudocode, flowchart, and working code.
 *
 * @author     [MUTWIRI KELVIN MWENDA]
 * @student    [ENE212-0067/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [4TH APRIL 2026]
 */

// ── Test Data Set A (change values to run other test sets) ─────────────────
$name  = "MUTWIRI KELVIN MWENDA";
$cat1  = 8;  // out of 10
$cat2  = 7;  // out of 10
$cat3  = 9;  // out of 10
$cat4  = 6;  // out of 10
$exam  = 52; // out of 60

// ── STEP 1: Compute total ─────────────────────────────────────────────────
$total = $cat1 + $cat2 + $cat3 + $cat4 + $exam;

// ── STEP 2: Count CATs attended ───────────────────────────────────────────
$cats_attended = 0;
if ($cat1 > 0) $cats_attended++;
if ($cat2 > 0) $cats_attended++;
if ($cat3 > 0) $cats_attended++;
if ($cat4 > 0) $cats_attended++;

// ── STEP 3: Eligibility check (nested if) ─────────────────────────────────
if ($cats_attended >= 3 && $exam >= 20) {
    $eligibility_status = "Eligible";
    
    // Eligible — determine grade and remark
    if ($total >= 70) {
        $grade = "A";
        $remark = "Distinction";
    } elseif ($total >= 65) {
        $grade = "B+";
        $remark = "Credit Upper";
    } elseif ($total >= 60) {
        $grade = "B";
        $remark = "Credit Lower";
    } elseif ($total >= 55) {
        $grade = "C+";
        $remark = "Pass Upper";
    } elseif ($total >= 50) {
        $grade = "C";
        $remark = "Pass Lower";
    } elseif ($total >= 40) {
        $grade = "D";
        $remark = "Marginal Pass";
    } else {
        $grade = "E";
        $remark = "Fail";
    }
} else {
    // Not eligible
    $eligibility_status = "Not Eligible";
    $grade = "DISQUALIFIED — Exam conditions not met";
    $remark = "N/A";
}

// Supplementary Rule (ternary)
$supplementary_status = ($grade == "D") ? "Eligible for Supplementary Exam" : "Not eligible for supplementary";

// ── STEP 4: Display formatted HTML report card ────────────────────────────
echo "<h2>JKUAT Grade Report Card</h2>";
echo "<p><strong>Student Name:</strong> $name</p>";
echo "<p><strong>CAT Scores:</strong> $cat1, $cat2, $cat3, $cat4</p>";
echo "<p><strong>Exam Score:</strong> $exam</p>";
echo "<p><strong>Total Score:</strong> $total</p>";
echo "<p><strong>CATs Attended:</strong> $cats_attended</p>";
echo "<p><strong>Eligibility Status:</strong> $eligibility_status</p>";
echo "<p><strong>Grade:</strong> $grade</p>";
echo "<p><strong>Remark:</strong> $remark</p>";
echo "<p><strong>Supplementary Status:</strong> $supplementary_status</p>";

// ── Required Test Data Sets — screenshot each ─────────────────────────────
// Set A: cat1=8, cat2=7, cat3=9, cat4=6,  exam=52  → expect grade A (Total 82)
// Set B: cat1=9, cat2=8, cat3=0, cat4=9,  exam=55  → expect grade A (Total 81, eligible)
// Set C: cat1=0, cat2=0, cat3=7, cat4=0,  exam=48  → expect DISQUALIFIED (Only 1 CAT)
// Set D: cat1=5, cat2=4, cat3=6, cat4=3,  exam=22  → expect grade D + supp eligible (Total 40)
// Set E: cat1=0, cat2=0, cat3=0, cat4=0,  exam=15  → expect DISQUALIFIED (0 CATs, exam < 20)
?>