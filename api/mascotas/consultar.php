<?php

header('Content-Type: application/json');

require_once 'modelosRequest/consultarRespuesta.php';
require_once '../../modelo/DatosMascota.php';
require_once '../../modelo/ResponsableMascota.php';


$resp= new ConsultarRespuesta();


$rm= New ResponsableMascota();
 $rm->Id='2';
 $rm->Nombre='Maria';
 $rm->Apellido='Cabrini';
 $rm->NumeroDocumento=30123456;
 $rm->Genero='Sin indicar';

$dm= New DatosMascota();
$dm->NroMascota=$_GET['nromascota'];
$dm->Nombre='Toto';
$dm->Raza='Mestizo';
$dm->Genero='Macho';
$dm->AltaDeMascota=($dm->NroMascota <= 100) ? "Software anterior" : "Software actual";
$dm->ResponsableMascota=$rm;



 
 
 

$resp->DatosMascota=$dm; 




echo json_encode ($resp);