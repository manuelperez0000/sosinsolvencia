<?php
    $text .= "¿En que podemos ayudarte?: - ";
    $text .= $_POST["ayuda"];
    header("location:https://api.whatsapp.com/send?phone=573015547333&text=".$text);
?>