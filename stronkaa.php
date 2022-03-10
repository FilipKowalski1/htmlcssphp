<!DOCTYPE HTML>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
  <head>
    <title>Stronka:DDDDDD</title>
  </head>
  <div class="center">
    <h1>BANK</h1>
    </div>
    
  <body>
   
    <div class="cos">

        <form method="POST" action="">
        <div class="cos1">
            KWOTA:<br><input name="kwota"></input><br>
            <br>
            PODATEK:<br><input name="podatek"></input><br>
            <br>
            <button type="submit" name="licz">POLICZ</button>

            <br>
            <br>
            </form>
            <?php
            if (isset($_POST['licz'])){
                $kwota = $_POST['kwota'];
                $podatek = $_POST['podatek'];
            
                $podatek = $podatek /100;
                $suma= $kwota * $podatek;
            
                echo "Kwota netto: ". $suma;
            }
                ?>
                </div>
                
      </div>

  </body>
</html>