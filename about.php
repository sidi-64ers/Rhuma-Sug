<?php


    include  "template/menu.php"; 
    

?>


    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Qui sommes-nous ?</h3>
        <img src="<?=img?>/logorhumsuga.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nobis ullam ducimus odit quidem nisi incidunt pariatur quis placeat praesentium. Officiis, possimus. Culpa, dignissimos quisquam minus aut possimus mollitia enim.</h3>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Où nous trouver?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a href="#" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-search"></span> Chercher
        </a>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Venez visiter notre plantation ?</h3>
        <br>
        <div class="row">
            
            <div class="col-sm-4">
                <h4 class="margin">Nos champs</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="<?=img?>/champs.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
            <h4 class="margin">Notre distillerie</h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="<?=img?>/distillerie.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
            <h4 class="margin">Dégustations</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="<?=img?>/degustation.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
    </div>

 <?php
     include 'template/footer.php';

    ?>