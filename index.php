<?php
// Generate a random integer between min and max (inclusive)
$randomNumber = rand($min, $max);

// Generate a random float
$randomFloat = mt_rand() / mt_getrandmax();

// Generate a random number within a specific range

// For integers
$randomInRange = rand($min, $max); 

// For floats
$randomInRange = mt_rand($min, $max) / mt_getrandmax(); 

$bits = 8 * PHP_INT_SIZE;
echo "(Info: This script is running as $bits-bit.)\r\n\r\n";

$connStr = 
        '$connection = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=$mdbFilename", $user, $password);' .
        'Dbq=C:\\Users\\Gord\\Desktop\\foo.accdb;';

$dbh = new PDO($connStr);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 
        "SELECT AgentName FROM Agents " .
        "WHERE ID < ? AND AgentName <> ?";
$sth = $dbh->prepare($sql);

// query parameter value(s)
$params = array(
        5,
        'Homer'
        );

$sth->execute($params);

while ($row = $sth->fetch()) {
    echo $row['AgentName'] . "\r\n";
}
?>
