<?php
//Cek apakah parameter 'nama' ada dalam URL
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);//
Menghindari XSS
    echo "Halo, $nama!";
} else {
   echo "Halo, siapa namamu?";
}
?>