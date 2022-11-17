<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Lo stato brama ancora di più i tuoi soldi</h1>
        <label class="labelPadding" for="prezzo">Prezzi:</label>
        <label class="labelPadding" for="IVA">IVA:</label>
        <?php
          $nElementi = $_POST['nElementi'];

          echo "<div>";
          echo "<form action='total.php' method='post'>";
          echo "<input type='hidden' name='nElementi' value='$nElementi'>";
          for ($i = 0; $i < $nElementi; $i++) {
            echo "<input class='input' type='number' id='prezzo$i' name='prezzo$i' placeholder='Prezzo $i'>";
            echo "<select class='select' name='IVA$i'>
                    <option value='0'>0%</option>
                    <option value='4'>4%</option>
                    <option value='10'>10%</option>
                    <option value='22'>22%</option>
                  </select><br>";
          }
          echo "<button class='button' type='submit'>Fattura</button>";
          echo "</form>";
          echo "</div>";
        ?>
      </body>
</div>
</html>