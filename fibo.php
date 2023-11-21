
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fibonacci.css">
    <link rel="icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    <title>Fibonacci</title>
</head>
<body class="web">
<nav class="navbar navbar-expand-lg bg-warning" >
                    <div class="container-fluid">
                      <a class="navbar-brand" href="MarceloskyWeb.php">La web de Marcelosky</a>
                      <a class="navbar-brand" href="cuentos.php">Cuentos</a>
                      <a class="navbar-brand" href="fibo.php">Fibonacci</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <br>
<div class="container text-center">
    <h1 class="my-5">Fibonacci</h1>
<form action="fibo.php" method="POST">
    <div class="form-group">
<label class="subtitulo" for="num_fibonacci">Número de fibonacci</label>
<input type="text"class="form-control" id="num_fibonacci" name="num_fibonacci" placeholder="Ingrese unn numero">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-danger">calcular</button>
</div>
</form>

</div>

<?php
$fibonacci = array(0,1);
$numFibonacci = 1;

if(isset($_POST['num_fibonacci'])) {
    $numFibonacci = $_POST['num_fibonacci'];
    if($numFibonacci > 1){
        for($i = 2; $i < $numFibonacci; $i++){
            $fibonacci[] = $fibonacci[$i -1] + $fibonacci[$i -2];
        }
    }


}

?>

<h2 class="my-2">Num Fibonacci: <?php echo $numFibonacci ?></h2>

<div class="serie_fibonacci">
    <?php
        foreach($fibonacci as $item){
            ?>
            <div class="f-item"><?php echo $item ?></div>
            <?php
        }
    
    ?>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

   
</body>
</html>

