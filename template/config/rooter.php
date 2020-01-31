<?php

class Rooter  {

    public function __construct($target, $valueInitIndex) {
        $this->vaChercher($target, $valueInitIndex);
    }
    
    public function vaChercher($target, $valueInitIndex) {

        if (empty($_GET)) {  // if $_GET is empty, apropos.php is loaded
            include "$valueInitIndex";
        } else if (isset($_GET['page'])) {
            if (array_key_exists($_GET['page'], $target)) {
                include $_GET['page'] . ".php";
            } else {
                echo "<h1 style='color:red;'>not Found<br>
                    un ti'punch doudou ?</h1>";
            }
        }
    }
}      

?>
