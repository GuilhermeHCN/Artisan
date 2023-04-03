<?php session_start();

if ( $_SESSION["logado"] != "sim"){
   
    ?>
    <script>
        alert('Usuário não está logado.');
         window.location='../login/login.html';
    </script>

<?php }  
?>
<?php
//dados do banco
    $servername = "localhost";
    $database = "u553234134_Artisan";
    $username = "u553234134_Gizaac";
    $password = "Gizaac12343124";

// Criação de conexão
$connection = mysqli_connect($servername, $username, $password, $database);

// Checagem de conexão
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// Deletar do banco
$query = " DELETE FROM Produto WHERE  Id_Produto = '".$_GET["Id_Produto"]."' ";

echo $query;
mysqli_query($connection,$query) or die ('Erro ao Deletar..');
echo "Deletado com sucesso";
//session_destroy()
?>

<script>
    window.location='../index.html';
</script>