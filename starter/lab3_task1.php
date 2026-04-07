<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 1: Simple if and if-else — Warm-Up Exercises [5 marks]
 *
 * @author     [MUTWIRI KELVIN MWENDA]
 * @student    [ENE212-0067/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [4TH APRIL 2026]
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Temperature Alert System
// ══════════════════════════════════════════════════════════════
// Declare $temperature = 39.2
// Use separate if statements (not if-else) to print:
//   "Normal"            if temp is between 36.1 and 37.5 inclusive
//   "Fever"             if temp > 37.5
//   "Hypothermia Warning" if temp < 36.1
// Test with: 36.8, 39.2, 34.5 — screenshot each

$temperature = 39.2;

if ($temperature >= 36.1 && $temperature <= 37.5) {
    echo "Normal<br>";
}
if ($temperature > 37.5) {
    echo "Fever<br>";
}
if ($temperature < 36.1) {
    echo "Hypothermia Warning<br>";
}

// ══════════════════════════════════════════════════════════════
// EXERCISE B — Even or Odd
// ══════════════════════════════════════════════════════════════
// Declare $number = 47
// Use if-else to print "$number is EVEN" or "$number is ODD"
// Also check divisibility by 3, by 5, and by both 3 and 5 — one line each

$number = 47;

if ($number % 2 == 0) {
    echo "$number is EVEN<br>";
} else {
    echo "$number is ODD<br>";
}

if ($number % 3 == 0) echo "$number is divisible by 3<br>";
if ($number % 5 == 0) echo "$number is divisible by 5<br>";
if ($number % 3 == 0 && $number % 5 == 0) echo "$number is divisible by both 3 and 5<br>";


// ══════════════════════════════════════════════════════════════
// EXERCISE C — Comparison Chain
// ══════════════════════════════════════════════════════════════
// Run this code EXACTLY as written.
// Record all six outputs in your report and explain each result.

$x = 10; $y = "10"; $z = 10.0;

var_dump($x == $y);   // A: ?
var_dump($x === $y);  // B: ?
var_dump($x == $z);   // C: ?
var_dump($x === $z);  // D: ?
var_dump($y === $z);  // E: ?
var_dump($x <=> $y);  // F: spaceship — what type? what value?

// Your explanation of each result goes in your PDF report (not here).


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Null & Default Values
// ══════════════════════════════════════════════════════════════
// Run this code as written, then extend it as instructed below.

$username = null;
$display  = $username ?? "Guest";
echo "Welcome, $display<br>";

// Chained null coalescing
$config_val = null;
$env_val    = null;
$default    = "system_default";
$result     = $config_val ?? $env_val ?? $default;
echo "Config: $result<br>";

// Extended chained ?? example: Cloudinary API Image Fallback
$cloudinary_api_url = null;       // Primary source: API didn't return an image
$local_upload_url   = null;       // Secondary source: No local file was uploaded
$placeholder_image  = "default_avatar.jpg"; // Fallback source

$final_image_to_load = $cloudinary_api_url ?? $local_upload_url ?? $placeholder_image;

echo "Image source to load: $final_image_to_load<br>";

?>