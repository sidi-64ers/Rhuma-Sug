<?php 
    include  "template/menu.php"; 
    
?>

    <!-- First Container -->
    <button class="accordion">Nos Rhums</button>
    <div class="panel">
    <div class="container-fluid bg-1 text-center">
        <h2 class="margin">Rhums Bio</h2>
        <br>
        <div class="row col-md-6 col-md-offset-3">
            <div class="col-sm-4">
                <img src="<?= img;?>agricole2.png" class="img-responsive margin" style="width:100%" alt="">
                <h4 class="margin">rhum agricole 50°</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>ambre.jpg" class="img-responsive margin" style="width:100%" alt=""><br><br>
                <h4 class="margin">rhum vieux ambré</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>arrangé.png" class="img-responsive margin" style="width:100%" alt=""><br><br>
                <h4 class="margin">rhum arrangé</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
    </div>
    </div>


    <button class="accordion">Nos Sucres</button>
<div class="panel">
    <div class="container-fluid bg-1 text-center">
        <h2 class="margin">Sucres Bio</h2>
        <br>
        <div class="row col-md-6 col-md-offset-3">
            <div class="col-sm-4">
                <img src="<?= img;?>sucreliquide.jpg" class="img-responsive margin" style="width:100%" alt="">
                <h4 class="margin">Sucre de canne liquide</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>sucremorceau.png" class="img-responsive margin" style="width:100%" alt="">
                <h4 class="margin">sucre de canne en morceaux</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>sucrepoudre.png" class="img-responsive margin" style="width:100%" alt="">
                <h4 class="margin">sucre de canne en</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
    </div>
    </div>


    <script>
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
    </script>

    <?php include  "template/footer.php"; ?>