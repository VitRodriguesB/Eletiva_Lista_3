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
  <h1>Lista 3 Exercicio 1</h1>

    <form action="exer1.php" method="POST">
        <?php for($i=0;$i<7;$i++): ?>
            <input type="number" name="num[]" placeholder="Numero"/>
            <br/>
        <?php endfor; ?>
            
        <button type="subit">Enviar</button>

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $numeros = array_map('intval', $_POST['num']); // array_map e para passar os numeros de string para int
            $menor = min($numeros);
            $posicao = array_search($menor, $numeros) + 1;
            echo"Menor valor : $menor <br>";
            echo"Posição no sequência: $posicao";                                               //, e 'intval' e pra colocar em intervalo. 
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