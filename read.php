<?php 
    require __DIR__ . '/config/Connection.php';

    $stmt = $pdo->prepare("SELECT * from contact");
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($contacts>0) {
        echo "<table>";
        echo "<tr>
                <th>id</th><br>   
                <th>Name</th><br>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>";

            foreach ($contacts as $contact) {
                // echo "<pre>";
                // var_dump($contact[4]); die();
                // echo "</pre>";


                # code...
                echo "<tr>
                <td>$contact[ID]</td>  
                <td>$contact[firstname]</td>  
                <td>$contact[lastname]</td> 
                <td>$contact[email]</td>
                <td>$contact[pass]</td>
            </tr>";
            }

        echo "</table>";
    } else {
        echo "Pas de ligne pour l'afficher...";
    }
?>