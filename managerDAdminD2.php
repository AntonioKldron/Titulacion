<?php
require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

$fecha = "10/6/2023";
$noficio=342;
$alumno="JOsu";
$ncontrol= 18121500;
$carrera="INGENIERÍA EN TECNOLOGIAS DE LA INFORMACIÓN Y COMUNICACION";
//TITULO DEL PROYECTO//
$tituloproyecto="PLATAFORMA WEB ADMINISTRATIVA PARA EL PERSONAL DE LA DIVISIÓNDE ESTUDIO PROFESIONALES DEL INSTITUTO TECNOLÓGICO DE MORELIA";
//OPCION DE TITULACION//
$tipotitulacion="TITULACIÓN INTEGRAL POR PROYECTO DE INVESTIGACIÓN";

$asesor1="ABEL ALBERTO PINTOR ESTRADA";
$asesor2="MIRIAM ZULMA SANCHEZ HERNANDEZ";
$asesor3="MARIA YANETH VEGA FLORES";
$asesor4="CLAUDIO ERNESTO FLORIAN ARENAS";


$jefedocencia="José Manuel Cuin Jacuinde";
$jefedepartamento="Claudio Ernesto Florián Arenas";
$jefeacademia="J. Guadalupe Ramos Díaz";
$jefeinvestigacion="Brenda González Gómez";


//-asigna el documento 3-//
$templateWord = new TemplateProcessor('plantillas\3.AUTORIZACION O RECHAZO.docx');
// --- Asignamos valores a la plantilla
$templateWord->setValue('fecha',$fecha);
$templateWord->setValue('noficio',$noficio);
$templateWord->setValue('alumno',$alumno);
$templateWord->setValue('ncontrol',$ncontrol);
$templateWord->setValue('carrera',$carrera);
$templateWord->setValue('tituloproyecto',$tituloproyecto);
$templateWord->setValue('tipotitulacion',$tipotitulacion);
$templateWord->setValue('asesor1',$asesor1);
$templateWord->setValue('asesor2',$asesor2);
$templateWord->setValue('asesor3',$asesor3);
$templateWord->setValue('asesor4',$asesor4);
$templateWord->setValue('jefedocencia',$jefedocencia);
// --- Guardamos el documento
$templateWord->saveAs("registros/$alumno/3.AUTORIZACION O RECHAZO-$alumno.docx");
// Guarda el documento

//-asigna el documento 6.IMPRESION DEFINITIVA//
$noficio=$noficio+1;
$templateWord = new TemplateProcessor('plantillas\6.IMPRESION DEFINITIVA.docx');
// --- Asignamos valores a la plantilla
$templateWord->setValue('fecha',$fecha);
$templateWord->setValue('noficio',$noficio);
$templateWord->setValue('alumno',$alumno);
$templateWord->setValue('ncontrol',$ncontrol);
$templateWord->setValue('carrera',$carrera);
$templateWord->setValue('tituloproyecto',$tituloproyecto);
$templateWord->setValue('tipotitulacion',$tipotitulacion);
$templateWord->setValue('asesor1',$asesor1);
$templateWord->setValue('asesor2',$asesor2);
$templateWord->setValue('asesor3',$asesor3);
$templateWord->setValue('asesor4',$asesor4);
// --- Guardamos el documento
$templateWord->saveAs("registros/$alumno/6.IMPRESION DEFINITIVA-$alumno.docx");
// Guarda el documento