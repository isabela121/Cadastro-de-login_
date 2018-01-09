<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_conect($host, $uer, $pass) or die(my sql_error());
mysql_select_db($banco) or die mysql_error());

?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Autenticando usuário</title>
	<script type="text/javascript">

	function loginsuccessfully(){
		setTimeout(window.location='painel.php', 5000)

	}



function loginfailed(){

	setTimeout("window.location"login.php" , 500);
}
	</script>
</head>
<body>
	

<?php
$email=$_POST['email'];
$senha=$_POST['senha'];$sql = mysql_query("SELECT * FROM usuaraios WHERE email = '$email' and senha = '$senha'" or die(mysql_error());
$row = mysql_num_rows($sql);
if($row > 0) {
	session_start();
	$SESSION['email'] = $_POST['email'];
	$SESSION['senha'] = $_POST['senha'];
	echo "</center> Você foi autentiacado com sucesso </center>";
	echo "<script> loginsuccessfully() </script>";
}


else {
	echo "</center>"Nome de usuário ou senha inválidos! Aguarde um instant para tentar novamente."</center>;
	echo "<script> loginfailed() </script>";
}
?>

</body>
</html>