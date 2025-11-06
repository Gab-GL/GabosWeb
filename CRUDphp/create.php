
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('./logica/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ./index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include('./head.php'); ?>

<h1>Agrear usuario </h1>
    <form method="POST" action="">
        <label>Nombre</label>
            <input name="nombre" type="text" maxlength="100" required placeholder="Ingresa tu nombre"><br>
        <label for="">Email:</label>
            <input name="email" type="email" maxlength="100" required placeholder="Correo"><br>
        <label for="">Telefono: </label>
            <input name="telefono" type="text" maxlength="10" required placeholder="Numero de celular"><br>
        <input type="submit" value="Agregar Usuario"> 

    </form>
<br>
<?php include('./footer.php'); ?>