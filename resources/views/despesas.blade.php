
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Despesas</title>
</head>
<body>
<style>
#tbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #tbl td, #tbl th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #tbl tr:nth-child(even){background-color: #f2f2f2;}
  
  #tbl tr:hover {background-color: #ddd;}
  
  #tbl th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }</style>

   <?php
echo "<table id='tbl'>";
echo "<tr>";
echo "<th>Despesa</th>";
echo "<th>Data</th>";
echo "<th>Valor</th>";
echo "<th>Email</th>";
echo "</tr>";
$user = auth()->user();
print($user->email);
$despesas = DB::table('despesas')->where('email',$user->email)->get();
echo $despesas;

foreach ($despesas as $despesa) {
    echo "<tr>";
    echo "<td>".$despesa->id_despesa; "</td>";
    echo "<td>". $despesa->date; "</td>";
    echo "<td>". $despesa->valor; "</td>";
    echo "<td>". $despesa->email ;"</td>";
    echo "</tr>";
    echo "</table>";
}

?>
</body>
</html>