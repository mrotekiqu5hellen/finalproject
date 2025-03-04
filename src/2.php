<?php
$name = $_POST["name"];
$age = $_POST["age"];
if ($age < 18) {
    echo "Sorry, you must be at least 18 years old to enter";
} else {
    echo "Welcome, $name! You are now 18 or older.";
}
?>