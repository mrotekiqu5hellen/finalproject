<?php

// Function to calculate the sum of two numbers
function sum($a, $b) {
    return $a + $b;
}

// Function to calculate the difference of two numbers
function diff($a, $b) {
    return $a - $b;
}

// Function to calculate the product of two numbers
function prod($a, $b) {
    return $a * $b;
}

// Function to calculate the quotient of two numbers
function quot($a, $b) {
    return $a / $b;
}

// Main function that prompts the user for input and calls the appropriate function based on their choice
function main() {
    // Prompt the user for their choice
    echo "Welcome to the calculator! What would you like to do?\n";
    echo "1. Add two numbers\n";
    echo "2. Subtract two numbers\n";
    echo "3. Multiply two numbers\n";
    echo "4. Divide two numbers\n";
    echo "Your choice: ";

    // Get the user's input and validate it
    $choice = readline();
    if (!is_numeric($choice) || ($choice < 1 || $choice > 4)) {
        echo "Invalid choice. Please try again.\n";
        return;
    }

    // Prompt the user for the two numbers to operate on
    echo "Enter the first number: ";
    $a = readline();
    echo "Enter the second number: ";
    $b = readline();

    // Validate the input and convert it to a number if necessary
    if (!is_numeric($a)) {
        echo "Invalid input. Please enter a valid number.\n";
        return;
    } else {
        $a = floatval($a);
    }
    if (!is_numeric($b)) {
        echo "Invalid input. Please enter a valid number.\n";
        return;
    } else {
        $b = floatval($b);
    }

    // Call the appropriate function based on the user's choice
    switch ($choice) {
        case 1:
            echo "The sum of $a and $b is " . sum($a, $b) . "\n";
            break;
        case 2:
            echo "The difference of $a and $b is " . diff($a, $b) . "\n";
            break;
        case 3:
            echo "The product of $a and $b is " . prod($a, $b) . "\n";
            break;
        case 4:
            echo "The quotient of $a and $b is " . quot($a, $b) . "\n";
            break;
        default:
            echo "Invalid choice. Please try again.\n";
    }
}

// Call the main function
main();
?>