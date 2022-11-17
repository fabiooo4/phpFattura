<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Mega fattura</h1>
        <?php
          $prezzi = array();
          $IVA = array();
          $nElementi = $_POST['nElementi'];
          for ($i = 0; $i < $nElementi; $i++) {
            $prezzi[$i] = $_POST["prezzo$i"];
            $IVA[$i] = $_POST["IVA$i"];
          }

          $totale = 0;
          for ($i = 0; $i < $nElementi; $i++) {
            $totale += $prezzi[$i] * (1 + $IVA[$i] / 100);
          }
          $iva = $totale - array_sum($prezzi);

          echo "<div>";
          echo "<h2>Il totale è $totale €</h2>";
          echo "<h2>Il totale dei soldi che lo stato ti ha rubato è $iva €</h2>";
          echo "</div>";


        ?>
        <form action="quantity.php">
          <button class="button" type="submit">Altro pagamento</button>
        </form>
      </body>
</div>
</html>