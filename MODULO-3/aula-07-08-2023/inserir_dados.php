<?php 
$con = mysqli_connect("localhost", "root", "", "db3hpw3");

if(mysqli_connect_errno()){
    echo  "Erro: ".mysqli_connect_error();

}else{
    $sql = "INSERT INTO pessoa VALUES ('$_POST[nome]','$_POST[sobrenome]', $_POST[idade])";
if(mysqli_query($con,$sql)){
    echo "Pessoa Inserida com sucesso!!!";
}else{
    echo "Erro ao inserir: ".mysqli_error($con);
}
    mysqli_close($con);
}
?>