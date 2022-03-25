<?php
    $letra = $_POST['letra'];
    if($letra == 'a' or $letra == 'e' or $letra == 'i' or $letra == 'o' or $letra == 'u')
    {   
        echo "Vogal";
        // vogal
    }else{
        echo "Consoante";
        //consoante
    }
?>