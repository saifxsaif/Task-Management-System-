<?php
$plaintextPassword = "secret@123"; // Replace with the password you want to hash

// Hash the password using PASSWORD_BCRYPT
$hashedPassword = password_hash($plaintextPassword, PASSWORD_BCRYPT);

echo "Hashed Password: " . $hashedPassword;

// Verify the hashed password (simulating a login attempt)
$enteredPassword = "secret@123"; // Replace with the entered password during login

// Check for whitespace and trim if necessary
$enteredPassword = trim($enteredPassword);

// Check if the stored password needs rehashing
if (password_verify($enteredPassword, $hashedPassword)) {
    if (password_needs_rehash($hashedPassword, PASSWORD_BCRYPT)) {
        // Update the stored hash with the new one
        $newHashedPassword = password_hash($enteredPassword, PASSWORD_BCRYPT);
        echo "Password needs rehashing. New Hashed Password: " . $newHashedPassword;
    }

    echo "Login successful!";
} else {
    // Incorrect password
    echo "Incorrect Password!";
}
?>
