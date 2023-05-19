<?php
    $name=(isset($_POST["nombre"]) && $_POST["nombre"]!= "")? $_POST["nombre"]:"Faltó responder";
    $edad=(isset($_POST["edad"]) && $_POST["edad"]!="")? $_POST["edad"]:"Faltó responder";
    $correo=(isset($_POST["correo"]) && $_POST["correo"]!="")? $_POST["correo"]:"Faltó responder";
    $zona=(isset($_POST["zona"])&&$_POST["zona"]!="")? $_POST["zona"]:"Faltó responder";
    $artista=(isset($_POST["artista"])&&$_POST["artista"]!="")? $_POST["artista"]:"Faltó responder";
    $fecha=(isset($_POST["fecha"])&&$_POST["fecha"]!="")? $_POST["fecha"]:"Faltó Responder";
    $numeroboletos=(isset($_POST["numeroboletos"])&&$_POST["numeroboletos"]!="")? $_POST["numeroboletos"]:"Faltó responder";
    $lugar=(isset($_POST["lugar"])&&$_POST["lugar"]!="")? $_POST["lugar"]:"Faltó responder";
    $fotos=(isset($_POST["fotos"])&&$_POST["fotos"]!="")? $_POST["fotos"]:"No extra fotos";
    $bebidas=(isset($_POST["bebidas"])&&$_POST["bebidas"]!="")? $_POST["bebidas"]:"No extra bebidas";
    $productos_ex=(isset($_POST["productos_ex"])&&$_POST["productos_ex"]!="")? $_POST["productos_ex"]:"No extra productos exclusivos";
    $num_tarj=(isset($_POST["num_tarj"])&&$_POST["num_tarj"]!="")? $_POST["num_tarj"]:"Faltó responder";
    $fecha_vencimiento=(isset($_POST["fecha_vencimiento"])&&$_POST["fecha_vencimiento"]!="")? $_POST["fecha_vencimiento"]:"Faltó responder";
    $cvv=(isset($_POST["cvv"])&&$_POST["cvv"]!="")? $_POST["cvv"]:"Faltó responder";
    $ruta_artist;
    $ruta_zona;
    $ruta_lugar;
    $numbol;
    $bolfalt;
    if($artista=="Mägo de oz")
        $ruta_artist=".\MagoDeOz.jpg";
    if($artista=="Ghost")
        $ruta_artist=".\Ghost.jpg";
    if($artista=="El cuarteto de nos")
        $ruta_artist=".\El-cuarteto-de-nos.jpg";
    if($artista=="SOAD")
        $ruta_artist=".\SOAD.jpg";
    if($zona=="VIP")
        $ruta_zona=".\Zona-vip.jpg";
    if($zona=="PRO")
        $ruta_zona=".\Zona-pro.jpg";
    if($zona=="MORTAL")
        $ruta_zona=".\Zona-mortal.jpg";
    if($zona=="BASICA")
        $ruta_zona=".\Zona-basica.jpg";
    if($lugar=="Arena CDMX")
        $ruta_lugar=".\Arena-cdmx.jpg";
    if($lugar=="Foro Sol")
        $ruta_lugar=".\Foro-sol.jpg";
    if($lugar=="Auditorio Blackberry")
        $ruta_lugar=".\Auditorio.jpg";
    if($lugar=="Palacio de los deportes")
        $ruta_lugar=".\Palacio-deportes.jpg";
    if($numeroboletos>=15)
    {
        for($numbol=15;$numbol>0;$numbol--)
        echo 
        "
        <table align='center' border='1' style='border-collapse:collapse;' cellpadding='20'>
            <thead>
                <tr>
                    <th>
                    Nombre:".$name.
                    "</th>
                    <th>
                        Edad:".$edad.
                    "</th>
                    <th>
                        Correo:".$correo.
                    "</th>
                </tr>
            </thead>
            <tbody align='center'>
                <tr>
                    <td>Número de la tarjeta:".$num_tarj."</td>
                    <td>Fecha de vencimiento:".$fecha_vencimiento."</td>
                    <td>CVV:".$cvv."</td>
                </tr>
                <tr>
                    <td align='center' colspan='3'>
                        Fecha:".$fecha.
                    "</td>
                </tr>
                <tr>
                    <td>Artista:".$artista."</td>
                    <td>Lugar:".$lugar."</td>
                    <td>Zona:".$zona."</td>
                </tr>
                <tr>
                    <td><img src=".$ruta_artist." alt='Artista' width='200' height='200'></td>
                    <td><img src=".$ruta_lugar." alt='Lugar' width='200' height='200'></td>
                    <td><img src=".$ruta_zona." alt='Zona' width='200' height='200'></td>
                </tr>
            </tbody>
        </table>
        <br><br>
        ";
        $bolfalt=$numeroboletos-15;
        echo "No se pudieron comprar ".$bolfalt." boletos de los ".$numeroboletos." solicitados";
    }
    else
    {
        if($numeroboletos<=0)
            echo "Debes ordenar mínimo un boleto";
        else
        {
            for($numeroboletos=$numeroboletos;$numeroboletos>0;$numeroboletos--)
            echo 
            "
            <table align='center' border='1' style='border-collapse:collapse;' cellpadding='20'>
            <thead>
                <tr>
                    <th>
                        Nombre:".$name.
                    "</th>
                    <th>
                        Edad:".$edad.
                    "</th>
                    <th>
                        Correo:".$correo.
                    "</th>
                </tr>
            </thead>
            <tbody align='center'>
                <tr>
                    <td>Número de la tarjeta:".$num_tarj."</td>
                    <td>Fecha de vencimiento:".$fecha_vencimiento."</td>
                    <td>CVV:".$cvv."</td>
                </tr>
                <tr>
                    <td align='center' colspan='3'>
                        Fecha:".$fecha.
                    "</td>
                </tr>
                <tr>
                    <td>Artista:".$artista."</td>
                    <td>Lugar:".$lugar."</td>
                    <td>Zona:".$zona."</td>
                </tr>
                <tr>
                    <td><img src=".$ruta_artist." alt='Artista' width='200' height='200'></td>
                    <td><img src=".$ruta_lugar." alt='Lugar' width='200' height='200'></td>
                    <td><img src=".$ruta_zona." alt='Zona' width='200' height='200'></td>
                </tr>
            </tbody>
            </table>
            <br><br>
        ";
        }
    }
?>