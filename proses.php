<?php

$username = $_GET["uname"];
$pass = $_GET["pwd"];

echo "Username = ".$username." <br>";
echo "Pawod = ".$pass." <br>";

$data = array("andi"=>"12345", "budi"=>"15456");
$ada = false;
foreach($data as $u => $p){
    if($u == $username && $p == $pass){
        $ada = true;
        break;
    }
}

if ($ada) {
    echo "Anda berhasil tol";
}else {
    echo "anda gagal goblok";
}
