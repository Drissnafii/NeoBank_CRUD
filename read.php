<?php 
    require("config.php");

    $stmt = $pdo->prepare("SELECT * from contact");
    $stmt->execute(); 
    $contacts = $stmt->fetchAll(); 

    if ($contacts>0) {
        echo "<table>";
        echo "<tr>
        <th>Name</th><br>   <th>Last Name</th>  <th>Email</th> <th>Password</th>
        </tr>";

        foreach ($contacts as $contact) {
            echo "<tr>";
            echo "<td>" . $contact['ID'] . "</td>"; 
            echo "<td>" . $contact['firstname'] . "</td>"; 
            echo "<td>" . $contact['lastname'] . "</td>";
            echo "<td>" . $contact['email'] . "</td>";
            echo "<td>" . $contact['pass'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Pas de ligne pour l'afficher...";
    }
?>