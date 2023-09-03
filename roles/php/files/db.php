<?php

    echo "<h1> Tabella </h1>";

    // Connect to the MySQL database


require './Spyc.php'; // Includi il file Spyc.php

// Percorso del tuo file YAML
$yamlFilePath = 'config.yml';

try {
    // Leggi il contenuto del file YAML
    $yamlContents = file_get_contents($yamlFilePath);

    // Parsa il contenuto YAML in un array
    $data = Spyc::YAMLLoadString($yamlContents);

    // Ora puoi accedere ai dati come array PHP
    $password = $data['server']['password'];
    $username = $data['server']['user'];
    $host = $data['server']['host'];
    $dbname = $data['server']['dbname'];
    
} catch (Exception $e) {
    // Gestisci eventuali eccezioni
    echo "Si è verificato un errore: " . $e->getMessage() . "\n";
}




    //$host = "localhost";

    //$username = "php-user";

    //$password = "12345";

    //$dbname = "users";

    $conn = mysqli_connect($host, $username, $password, $dbname);

   

    // Check connection

    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());

    }

 

    // Retrieve the list of users from the database

    $sql = "SELECT id, username, email FROM users";

    $result = mysqli_query($conn, $sql);

   

    // Display the list of users in an HTML table
    
    

    echo "<table>";

    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

   

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";

        echo "<td>" . $row["username"] . "</td>";

        echo "<td>" . $row["email"] . "</td>";

        echo "</tr>";

    }

    echo "</table>";

 

    // Close the connection

    mysqli_close($conn);

?>