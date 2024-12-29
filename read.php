<?php 
    require __DIR__ . '/config/Connection.php';

    $stmt = $pdo->prepare("SELECT * from contact");
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_OBJ);


    if ($contacts>0) {
        echo "<div class= w3-container>";
        echo "<table class= w3-table-all w3-centered >";
        echo "<tr>
                <th>id</th><br>   
                <th>Name</th><br>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th> 
                <th>Operations</th>
            </tr>";

            foreach ($contacts as $contact) {
                // echo "<pre>";
                // var_dump($contact[4]); die();
                // echo "</pre>";


                # code...
                echo "<tr>
                <td>$contact->ID</td>  
                <td>$contact->firstname</td>  
                <td>$contact->lastname</td> 
                <td>$contact->email</td>
                <td>$contact->pass</td>
                <td>
                    <form method='post'>
                        <input type='submit' value='edit' name='edite' action=update.php class='w3-button w3-blue' >
                        <input type='submit' value='delete' name='delete' class='w3-button w3-red' >
                    </form>
                </td>
            </tr>";
            }

        echo "</table>";
        echo "</div>";
    } else {
        echo "Pas de ligne pour l'afficher...";
    }
?>