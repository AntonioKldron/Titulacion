<?php
require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

$fecha = $_POST["fecha"];
$noficio = $_POST["noficio"];
$alumno = $_POST["alumno"];
$ncontrol = $_POST["ncontrol"];
$carrera = $_POST["carrera"];
$tituloproyecto = $_POST["tituloproyecto"];
$tipotitulacion = $_POST["tipotitulacion"];
$asesor1 = $_POST["asesor1"];
$asesor2 = $_POST["asesor2"];
$asesor3 = $_POST["asesor3"];
$asesor4 = $_POST["asesor4"];
$tipodoc = $_POST["TipoDocumentos"];

$jefedocencia="JOSÉ MANUEL CUIN JACUINDE";
$jefedepartamento="CLAUDIO ERNESTO FLORIÁN ARENAS";
$jefeacademia="J. GUADALUPE RAMOS DÍAZ";
$jefeinvestigacion="BRENDA GONZÁLEZ GÓMEZ";
$jefedivision="RAÚL RIVERA NIETO";
$anio="2024";

$nombreCarpeta = "registros/$alumno";

if (!file_exists($nombreCarpeta)) {
    if (mkdir($nombreCarpeta)) {
        echo "La carpeta '$nombreCarpeta' se ha creado correctamente.";
    } else {
        echo "Hubo un error al crear la carpeta.";
    }
} else {
    echo "La carpeta '$nombreCarpeta' ya existe.";
}

if($tipodoc==="Doc0-1-2"){
//-asigna el documento 0.REGISTRO DE TESIS PROYECTO//
$templateWord = new TemplateProcessor('plantillas\PROCESO DE TITULACION.docx');
$templateWord->setValue('fecha',$fecha);
$templateWord->setValue('anio',$anio);
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
$templateWord->setValue('jefedepartamento',$jefedepartamento);
$templateWord->setValue('jefeacademia',$jefeacademia);
$templateWord->setValue('jefeinvestigacion',$jefeinvestigacion);
$templateWord->setValue('jefedivision',$jefedivision);
$templateWord->setValue('jefedocencia',$jefedocencia);
$templateWord->saveAs("registros/$alumno/PROCESO DE TITULACION-$alumno.docx");
}

header('Location: control1.html');
exit; 

?>