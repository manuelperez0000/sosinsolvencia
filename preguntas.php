<?php
    $text .= "Respuestas a la encuesta web: ";
    $text .= "¿Tus ingresos no te alcanzan para pagar las deudas?: ".$_POST["p1"]." - ";
    $text .= "¿Tienes embargos que no te dejan manejar tus recursos económicos?: ".$_POST["p2"]." - ";
    $text .= "¿Estas a punto de perder tu patrimonio por las deudas que tienes?: ".$_POST["p3"]." - ";
    $text .= "¿Presentas incumplimiento en pagos a bancos y a terceros?: ".$_POST["p4"]." - ";
    $text .= "¿Recibes llamadas constantes de cobro que te roban la tranquilidad?: ".$_POST["p5"]." - ";
    $text .= "¿Tienes que realizar más préstamos para asumir los pagos mensuales, de los gastos necesarios para poder vivir?: ".$_POST["p6"]." - ";
    $text .= "¿Tus deudas afectan tu calidad de vida?: ".$_POST["p7"]." - ";
    $text .= "¿Has pensado en vender tus activos para pagar tus deudas?: ".$_POST["p8"]." - ";
    $text .= "¿quieres comenzar una vida crediticia?: ".$_POST["p9"]." - ";
    $text .= "¿Tienes deudas con terceros que te quitan la tranquilidad?: ".$_POST["p10"];
    header("location:https://api.whatsapp.com/send?phone=573015547333&text=".$text);
?>