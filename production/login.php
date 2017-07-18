<?PHP
session_start();
include("Db.php");

$_SESSION['usuario'] = $_POST['txtUsername'];
$_SESSION['password'] = $_POST['txtPassword'];

$bd=Db::getInstance();

$sqlusuario = "select c.idcliente,usuario,password,nombre,documento,direccion,telefono,correo,c.estado,idusuario,
cuenta,saldo,ciclo,idtarifa from cliente c inner join usuario u on c.idcliente = u.idcliente
where usuario = '".$_SESSION['usuario']."' and password = '".$_SESSION['password']."' and u.estado=1";

$arrayusuario = $bd->ejecutar($sqlusuario);

while ($x=$bd->obtener_fila($arrayusuario,0)){
   $_SESSION['nombre']  = $x['nombre'];
   $_SESSION['correo']  = $x['correo'];
   $_SESSION['estado']  = $x['estado'];
   $_SESSION['idcliente']  = $x['idcliente'];
   $_SESSION['usuario']  = $x['usuario'];
   $_SESSION['idtarifa']  = $x['idtarifa'];
   $_SESSION['idusuario']  = $x['idusuario'];
   $_SESSION['cuenta']  = $x['cuenta'];
}
echo $_SESSION['estado']; 
if($_SESSION['estado']==1){
	header("location:inicio.php");
}else{
	header("location:salida.php");
}

?>