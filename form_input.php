<?php
include "form.php";

echo "<h3>Silahkan isi form berikut ini:</h3>";

$form = new Form("proses_input.php", "Simpan Data");

$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

$form->displayForm();
?>
