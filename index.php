<?php
  $infinito = "Sempre caro mi fu quest’ermo colle,\n
  e questa siepe, che da tanta parte\n
  dell'ultimo orizzonte il guardo esclude.\n
  Ma sedendo e mirando, interminati\n
  spazi di là da quella, e sovrumani\n
  silenzi, e profondissima quiete\n
  io nel pensier mi fingo; ove per poco\n
  il cor non si spaura. E come il vento\n
  odo stormir tra queste piante, io quello\n
  infinito silenzio a questa voce\n
  vo comparando: e mi sovvien l’eterno,\n
  e le morte stagioni, e la presente\n
  e viva, e il suon di lei. Così tra questa\n
  immensità s’annega il pensier mio:\n
  e il naufragar m’è dolce in questo mare.\n
  ";
?>

<pre>
  <h2 style="text-align: center;">
    <?php 
      echo str_replace($_GET["censored"], "***", $infinito);
    ?> 
  </h2>
</pre>