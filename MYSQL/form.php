<?php
include 'connectdb.php';

// Debugging output
if (!isset($conn)) {
    die("database is DOOD");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $naam = $_POST['Naam'];
    $achternaam = $_POST['Achternaam'];

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO posts (Naam, Achternaam) VALUES (:naam, :achternaam)");

        // Bind parameters using bindParam
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':achternaam', $achternaam);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to index.php after successful insertion
            header("Location: index.php");
            exit(); // Make sure to exit after header redirection
        } else {
            echo "Error inserting data.";
        }
    } catch (PDOException $e) {
        // Handle any errors that occur during execution
        echo "Error: " . $e->getMessage();
    }
}
?>