<?php 
include 'db_config.php'; 

$sql = "SELECT * FROM books"; 
$result = $conn->query($sql); 
if (!$result)   
{ 
die("Query Failed: " . $conn->error); 
}

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><books></books>'); 
while ($row = $result->fetch_assoc())  
{ 
$book = $xml->addChild('book'); 
$book->addChild('id', $row['id']); 
$book->addChild('title', $row['title']); 
$book->addChild('author', $row['author']); 
$book->addChild('year', $row['year']); 
}

$file_path = 'books_file.xml'; 
$xml->asXML($file_path); 

header('Content-Type: text/xml'); 
echo $xml->asXML(); 
?>