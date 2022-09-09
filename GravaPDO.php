<!DOCTYPE html>
<html>

<head>
    <title>PDO</title>
</head>

<body>
    <form method="POST" action="#">
        CPF: <input type="text" name="caixa1"><br>
        Nome: <input type="text" name="caixa2"><br>
        Salario: <input type="text" name="caixa3"><br>
        <input type="submit" value="Enviar" name="bt1">
        <input type="reset" value="Cancelar">
    </form>
</body>

</html>

<!--
    Verifica se o botão bt1 foi presionado, se precionado ele passa para o php, impedindo que a pagina execute TUDO ao carregar!
-->
<?php
if (isset($_POST['bt1'])) {
    try {
        $cpf=$_POST['caixa1'];
        $nome=$_POST['caixa2'];
        $salario=$_POST['caixa3'];

        //Conexão padrão PDO
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bdaula", "root", "");
        //"nome_do_banco_usado: host=endereço_dobanco;   port=porta_do_banco;   dbname=nome_do_banco_crido", "Nome_do_usuario", "Senha_do_usuario"

        //Exceção de erro
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Inseri os dados no banco
        $texto = "INSERT INTO funcionarios (cpf, nome, salario) VALUE ('" . $cpf . "', '" . $nome . "', '" . $salario . "')";
        $conecta->exec($texto);
        echo "Dados Salvos no Banco";
    } catch (\Throwable $th) {
        echo "Problema na conexão";
    }
}
