<?php
require_once "pdo.php";
session_start();

echo("<h1>Patients List</h1>");
echo('<table border="1">'."\n");
$stmt = $pdo->query("SELECT id,doc_id,ip_no FROM patients");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($rows)>0){
    echo('<th>         ID</th><th>      DOC_ID</th><th>	IP_NO</th>');
foreach($rows as $row  ) {
    echo "<tr><td>";
    echo(htmlentities($row['id']));
    echo("</td><td>");
    echo(htmlentities($row['doc_id']));
    echo("</td><td>");
    echo(htmlentities($row['ip_no']));
    
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
}

.button1 {background-color: #4CAF50;}
    .button3 {background-color: red;}
</style>
<a href="add.php"><button class="button button1"> ADD PATIENT </button></a>
<a href="logout2.php"><button class="button button3"> LOGOUT </button></a>

</html>