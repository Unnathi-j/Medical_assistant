<?php
require_once "pdo.php";
session_start();
echo("<h1>DOCTORS LIST</h1>");

echo('<table border="1">'."\n");
$stmt = $pdo->query("SELECT id,name,no_patients FROM doctors");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($rows)>0){
    echo('<th>ID</th><th>NAME</th><th>	NUMBER OF PATIENTS</th>');
foreach($rows as $row  ) {
    echo "<tr><td>";
    echo(htmlentities($row['id']));
    echo("</td><td>");
    echo(htmlentities($row['name']));
    echo("</td><td>");
    echo(htmlentities($row['no_patients']));
    
    echo("</td></tr>\n");
}
}


?>
<html>
    <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: blue;
}
</style>
<a href="admin1.php"><button class="button"> BACK </button></a>

</html>