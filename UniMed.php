<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Style/style.css">
    <title>UniMed</title>
</head>

<body>
    <input type="button" class="ab fadeInDown" value="Voltar" src="./Home.php">

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <?php
            if (!empty($login_err)) {
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>

            <!-- LOGO -->
            <img src="./Img/unimed-logo.png" alt="Logo Unimed" width="250" height="300">

            <!-- Login Form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">

                    <!-- User Label -->
                    <input placeholder="Name" type="text" class="fadeIn second" name="name">
                    <input placeholder="Age" type="text" class="fadeIn second" name="age">

                    <br><br>
                    <input type="radio" id="enf" name="plan" value="ENF" class="fadeIn third">
                    <label for="enf" class="fadeIn third">Nursery</label>
                    <br>
                    <input type="radio" id="apart" name="plan" value="APART" class="fadeIn third">
                    <label for="apart" class="fadeIn third">Apartment</label>
                    <br><br>
                    <label for="quantity" class="fadeIn third">Dependents (between 1 and 5):</label>
                    <input class="fadeIn third" type="number" id="quantity" name="quantidade" min="0" max="5" value="0">
                    <br><br>

                    <?php
                    $button = $_POST['quantidade'] == 1 ? '<input placeholder="Dependents 1" type="text" class="fadeIn second" name="name">' : "";
                    echo $button;
                    ?>
                    <!--
                    <label for="cars">Choose a plan:</label>
                    <select id="plans" name="plan">
                        <option value="ENF">Enfermaria</option>
                        <option value="APART">Apartamento</option>
                    </select>
-->
                    <!--

________________________________________________________________________________________________________________________________________________________________________________________________________________________________________

                    <input placeholder="Usuário" type="text" name="username" class="fadeIn second <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"> 
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    -->

                    <!-- Button -->
                    <input type="submit" class="fadeIn fourth" value="Proximo">
                    <input type="reset" class="fadeIn fourth" value="Limpar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php
$qt = $_POST['quantidade'];

if ($qt == 1) {
    echo "teste funfo";
    echo "$qt";
} else {
    echo "teste nnn funfo";
    echo "$qt";
}

//Faixa etaria
$fe = $_POST['age'];
$plan = $_POST['plan'];


echo "<br><br>";


if ($fe >= 0 && $fe <= 18) {

    if ($plan = "APART") {

        echo "apartamento";
    } else {
        echo "enfermaria";
    }
}



if ($fe >= 24 && $fe <= 28) {

    if ($plan = "APART") {

        echo "apartamento";
    } else {
        echo "enfermaria";
    }
}

if ($fe >= 29 && $fe <= 38) {

    if ($plan = "APART") {

        echo "apartamento";
    } else {
        echo "enfermaria";
    }
}

if ($fe >= 39 && $fe <= 53) {

    if ($plan = "APART") {

        echo "apartamento";
    } else {
        echo "enfermaria";
    }
}

if ($fe >= 54) {

    if ($plan = "APART") {

        echo "apartamento";
    } else {
        echo "enfermaria";
    }
}

if ($fe >= 0 && $fe <= 18) {
    echo "valor: 200";
}

echo $_POST['name'];
echo "<br>";
echo $_POST['age'];

?>