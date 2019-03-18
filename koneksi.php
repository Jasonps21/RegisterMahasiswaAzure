<?php

	$host = "jasonps21.database.windows.net";
    $user = "jasonps21";
    $pass = "Jps210998";
    $db = "Mahasiswa";

    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }

?>