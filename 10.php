<?php 
// Load XML file 
$xml = simplexml_load_file('books_file.xml') or die("Error: Cannot load XML file."); 
// Display parsed XML data 
echo "<h2>Parsed XML Data</h2>"; 
echo "<table border='1'>"; 
echo "<tr><th>Title</th><th>Author</th><th>Year</th></tr>"; 
foreach ($xml->book as $book)  
{ 
} 
echo "<tr>"; 
echo "<td>" . $book->title. "</td>"; 
echo "<td>" . $book->author. "</td>"; 
echo "<td>" . $book->year ."</td>"; 
echo "</tr>"; 
echo "</table>"; 
?>