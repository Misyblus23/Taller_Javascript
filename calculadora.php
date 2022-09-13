<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="stylesheet" href="united-1.js"> 
     <link href="calculadora.css" rel="stylesheet">   
    <title>Calculadora PHP</title>
</head>
<body>
<div class="container">
        <h1>Calculadora PHP</h1>
        <hr>
        <form method="post">
            <label>Numero 1</label>
            <input type="number" max="1000" min="0" name="numero1" placeholder="0" required autofocus>
            <label>Numero 2</label>
            <input type="number" max="10000" min="0" placeholder="0" name="numero2" required>
            <hr>
            <input type="radio" class="form-check-input" name="opcion" value="sumar" required> sumar
            <input type="radio" class="form-check-input" name="opcion" value="restar" required> restar
            <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required> multiplicar
            <input type="radio" class="form-check-input" name="opcion" value="divicion" required> divicion
            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> potenciacion
            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> concatenacion
            <hr>
            <input type="submit" class="btn btn-dark w-25"  value="enviar" >
            <input type="reset" class="btn btn-dark w-25"  value="limpiar" >
            <hr>
        </form>
</div>
<div class="container">
<?php
    if ($_POST){
        function sumar (){
           echo "la suma de los numeros es: ".($_POST ['numero1']+$_POST['numero2']);
    }
    function restar (){
        echo "la resta de los numeros es: ".($_POST ['numero1']-$_POST['numero2']);
    }
    function multiplicar (){
        echo "la multiplicacion de los numeros es: ".($_POST ['numero1']*$_POST['numero2']);
    }
    function divicion (){
        if ($_POST ['numero1']==0)
        $d="error: division por 0";
        else
        $d=$_POST ['numero1']/$_POST['numero2'];
        echo "la divicion de los numeros es: ".$d;  
    }
    function potenciacion (){
        echo "la potenciacion de los numeros es: ".
        (pow($_POST ['numero1'],$_POST['numero2']));
}
function concatenacion (){
    echo "la concatenacion de los numeros es: ".
    ($_POST ['numero1'].$_POST['numero2']);
}
switch($_POST['opcion']){
    case 'sumar':
        sumar();
        break;
    case 'restar':
        restar();
        break;
    case 'multiplicar':
        multiplicar();
        break;
    case 'divicion':
        divicion();
        break;
    case 'potenciacion':
        potenciacion();
        break;
    case 'concatenacion':
        concatenacion();
        break;
    default:
    echo "error en la opcion selecionada ";
    break;
}
}

?>
</div>
</body>
</html>                                      