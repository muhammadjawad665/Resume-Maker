<?php
// getting dompdf
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

//getting data from resume.php
$name    = $_POST["name"];
$email   = $_POST["email"];
$contact = $_POST["contact"];
$object  = $_POST["Object"];
$abme    = $_POST["abme"];
$Matric  = $_POST["MatricGrade"];
$Inter   = $_POST["InterGrade"];
$BS      = $_POST["BSGrade"];
$Exp     = $_POST["Exp"];
$Skills  = $_POST["Skills"];

//Dompdf setup
$dompdf = new Dompdf();

//geting html format
$html = "
<html>
<body style='font-family: sans-serif;'>
    <h1 style='text-align:center;'> $name </h1>
    <p style='text-align:center;'> $email | $contact </p>

    <hr>

    <h3>Objective</h3>
    <p> $object </p>

    <h3>Education</h3>
    <p><b>Matric:</b> $Matric </p>
    <p><b>Inter:</b> $Inter </p>
    <p><b>BS:</b> $BS </p>

    <h3>Experience</h3>
    <p> $Exp </p>

    <h3>Skills</h3>
    <p> $Skills </p>

</body>
</html>
";

//making pdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

//downloading
$dompdf->stream("my_resume.pdf");
?>