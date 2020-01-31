

<?php
        include_once 'template/menu.php';
  
      //  include 'template/first_container.php';

        //include 'template/second_container.php';

        //include 'template/third_container.php';
   
        include 'template/config/rooter.php';
    $init = new Rooter(root, 'acceuil.php');
    var_dump($_GET['page']);

        include 'template/footer.php';
    ?>
