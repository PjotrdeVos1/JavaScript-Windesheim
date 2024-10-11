<?php

include 'connectdb.php';

?>

<form action="form.php" method="post">
    <label for="Naam">Naam:</label><br>
    <input type="text" id="Naam" name="Naam" value=""><br>
    <label for="Achternaam">Achternaam:</label><br>
    <input type="text" id="Achternaam" name="Achternaam" value=""><br>
    <input type="submit" value="Submit">
</form>

<?php
// Execute the query
$sql = "SELECT id, Naam, Achternaam FROM posts";
$result = $conn->query($sql);

// Check if the query was successful and if it returned any rows
if ($result) {
    if ($result->rowCount() > 0) {
        // Output data of each row
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<br> id: ". $row["id"]. " - Voornaam: ". $row["Naam"]. " - Achternaam: " . $row["Achternaam"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Query failed: " . implode(", ", $conn->errorInfo());
}

// Optionally unset the connection
$conn = null;
?>