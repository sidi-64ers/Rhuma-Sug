<?php 
    include  "template/menu.php"; 
    
?>

<body>

    

    <!-- First Container -->
    <div class="container-fluid bg-5">
        <h3 class="margin text-center">INSCRIPTION</h3>
        <form action="inscriptionbdd.php" method="POST" class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Votre prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="exampleInputEmail1" placeholder="Votre Adresse">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ville</label>
                <input type="text" name="ville" class="form-control" id="exampleInputEmail1" placeholder="Votre Ville">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Code Postal</label>
                <input type="text" name="code postale" class="form-control" id="exampleInputEmail1" placeholder="Votre code postal">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Téléphone</label>
                <input type="tel" name="tel" class="form-control" id="exampleInputEmail1" placeholder="Votre téléphone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mot de passe</label>
                <input type="mot de passe" name="mot de passe" class="form-control" id="exampleInputEmail1" placeholder="choisissez un mot de passe">
                <div class="help-block">Minimum de 8 caractere</div>
            </div>
            
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>

 

<?php
include "template/footer.php";

?>