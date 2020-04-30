<?php

try{
    $dbco = new PDO('mysql:host=localhost:3308;dbname=portfolio;charset=utf8','root','');
    $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $dbco->prepare("INSERT INTO form(nom, prenom, mail, message)
                            VALUES(:nom, :prenom, :mail, :message)");
                        $sth->bindParam(':nom',$nom);
                        $sth->bindParam(':prenom',$prenom);
                        $sth->bindParam(':mail', $mail);
                        $sth->bindParam(':message',$message);
                        $sth->execute();

                        header("location:confirmation.html");
}
catch(PDOException $e){
    echo 'Enregistrement Impossible. Erreur : '.$e->getMessage();
}


?>