<h2>TO BE IMPLEMENTED</h2>


<?php
$base="ejemplo";
$tabla1="principal";
$servername= "localhost";
$c=mysqli_connect ($servername,"root","",$base);
$insertar = "INSERT INTO principal (Nombre) VALUES ('".$_POST["nombre"]."');";
$mostrar="SELECT * FROM principal;";
if(mysqli_query ($c, $insertar)){
    print "Se introdujo el dato<br>";
} else {
    print "No se introdujo el dato<br>";
}
$result = mysqli_query($c, $mostrar);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["Nombre"]."<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($c);
?>