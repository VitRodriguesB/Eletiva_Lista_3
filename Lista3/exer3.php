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
  <h1>Lista 3 Exercicio 3</h1>
    
    <form action="exer3.php" method="POST">
            <div class="mb-3">
                    <label for="A" class="form-label"> Insera o valor do A</label>
                    <input type="number" id="A" name="A" class="form-control" required="">
            </div>
            <div class="mb-3">
                    <label for="B" class="form-label"> Insera o valor do B</label>
                    <input type="number" id="B" name="B" class="form-control" required="">
            </div>
        <button type="subit">Enviar</button>

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $A = $_POST['A'];
            $B = $_POST['B'];
            if($A == $B){
                echo"Numeros igiuas : $A";
            }
            else{
                echo min($A,$B)."".max($A,$B);
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