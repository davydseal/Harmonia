<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?php

$pdf = new FPDF();

//abre novo arquivo pdf
if ($pdf->begin_document($arquivo, "") == 0){
die("Error: " . $pdf->get_errmsg());
$pdf->begin_document("teste.pdf," "");
$pdf->set_info("Author", "Davyd Seal");
$pdf->set_info("Titler", "Documento teste");
$pdf->set_info("Creator", "Davyd Seal");
$pdf->set_info("Subject", "Meu primeiro documento PDF");

$pdf->begin_page_ext(595, 842, "");
    $fonte = $pdf->load_font("Times New Roman", "winansi", "");
    $pdf->setfont($fonte, 16);

$pdf->end_page_ext("");
$pdf->end_document("");

echo "Arquivo <b>$arquivo</b> Criado!";
echo "<br><a href="$arquivo">Clique para acessalo</a>";

?>
</BODY>
</HTML>
