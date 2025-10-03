<?php

if(!empty($_GET['archivo']))
{
    $nombreArchivo = basename($_GET['archivo']);
    $rutaArchivo = 'archivos/'.$nombreArchivo;
    if(!empty($nombreArchivo) && file_exists($rutaArchivo)){
        header("Cache-Control: public");
        header("Content-Description: File transfer");
        header("Content-Disposition: attachment; filename=$nombreArchivo");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($rutaArchivo);
        exit;
    }
    else{
        echo "Este archivo no existe.";
    }
}