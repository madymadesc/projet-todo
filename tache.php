<?php
$dbh = new PDO('mysql:
host=localhost;
dbname=projet_todo', 
"root", 
"");
echo "connexion reussi";
?>
<?php
$dbh = new PDO('mysql')