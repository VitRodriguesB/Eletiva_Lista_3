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
  <h1>Lista 3 Exercicio 7</h1>
    
    <form action="exer7.php" method="POST">
            <div class="mb-3">
                    <label for="valor" class="form-label"> Informe um numero </label>
                    <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
            
        <button type="subit">Enviar</button>

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $num = $_POST['valor'];
            $soma = 0;
            $i = 1;
            while($i <= $num){
                $soma += $i;
                $i++; 
            }
            echo"A soma dos valores: $soma ";
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