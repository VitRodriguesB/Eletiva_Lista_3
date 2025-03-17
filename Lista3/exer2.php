<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container mt-5">
  <h1>Lista 3 Exercicio 2</h1>
    
    <form action="exer2.php" method="POST">
            <div class="mb-3">
                    <label for="valor1" class="form-label"> Insera um valor para a soma</label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                    <label for="valor2" class="form-label"> Insera o segundo valor para a soma</label>
                    <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
        <button type="subit">Enviar</button>

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $soma = 0;
            if($valor1 == $valor2){
                $soma = $valor1 + $valor2;
                echo"<br> Valor da soma: $soma"; 
            }
            else{
                $soma = (($valor1 + $valor2) * 3);
                echo"<br> Valor do tripo da soma: $soma"; 
            }
            
                                                          //, e 'intval' e pra colocar em intervalo. 
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        }
        

    ?>
    <br>
</div>   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>