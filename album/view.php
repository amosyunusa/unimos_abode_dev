<?php



$servername = "localhost";

$username = "root";

$password = "pass";



try {

     $conn = new PDO("mysql:host=$servername;dbname=multiple_tbl", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $sql = "SELECT imgdata FROM pix";

    foreach ($conn->query($sql) as $row){



        $image = $row['imgdata'];





    }

    header("content-type: image/jpeg");

    echo $image;

}

catch(PDOException $e)

{

    echo "Connection failed: " . $e->getMessage();

}

?>


