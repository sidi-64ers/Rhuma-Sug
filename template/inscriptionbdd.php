<?php
    $conn = mysqli_connect('localhost','sidi','ai31080412','Rhuma-Sug') or die(mysqli_error());
    $Nom= $_POST['nom'];
    $Prenom= $_POST['prenom'];
    $Adresse= $_POST['adresse'];
    $Ville= $_POST['ville'];
    $CodePostale= $_POST['code postale'];
    $Tel= $_POST['tel'];
    $Email= $_POST['email'];
    $MDP= $_POST['mot de passe'];

    $req= "INSERT INTO Client (nom, prenom, adresse, ville, code postale, tel, email, mot de passe) 
    values ('$Nom', '$Prenom', '$Adresse', '$Ville', '$CodePostale', '$Tel', '$Email', '$MDP')" ;

    $reponse=mysqli_query($conn, $reponse);



    
?>