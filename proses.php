<?php
$penerima = "db85154e-7100-428b-87b9-7158a00788d7@email.webhook.site";
$subyek = $_POST['subyek'];
$pesan = $_POST['pesan'];
$pesan = wordwrap($pesan, 70);
$header = "From: no-reply@saidalfaruq.net\r\n";
$header .= "MIME-Version: 0\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$kirim = mail($penerima, $subyek, $pesan, $header);
if ($kirim) {
    echo "Pesan email berhasil dikirim.";
} else {
    echo "Pesan email gagal dikirim.";
}
?>
