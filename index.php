<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Php oop - Christian Pucci</title>
  </head>
  <body>

    <!-- GOAL: Definire la classe Magazzino e la classe Prodotto nel seguente modo:

                - Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori.

                - Prodotto: definire gli attributi per nome, peso e prezzo -->

      <?php

      class Magazzino {
          public $name;
          public $location;
          public $products  = [];
          public function __construct($name,$location) {
              $this -> name = $name;
              $this -> location = $location;
          }

      }

      class Prodotto {
          public $name;
          public $weight;
          public function __construct($name,$weight,$price = 'Prezzo non disponibile') {
              $this -> name = $name;
              $this -> weight = $weight;
              $this -> price = $price;
          }

      }

      $magazzino = new Magazzino("Abbigliamento","Roma");

      $magazzino->products[] = new Prodotto('Scarpe', 1,10);
      $magazzino->products[] = new Prodotto('Giacche', 2,20);
      $magazzino->products[] = new Prodotto('Pantaloni', 3,30);

      $magazzino2 = new Magazzino("Supermercato","Milano");

      $magazzino2->products[] = new Prodotto('Latte', 1,1);
      $magazzino2->products[] = new Prodotto('Pane', 2,2);
      $magazzino2->products[] = new Prodotto('Pasta', 3);

       ?>

       <div class="container">

        <div class="table"> <!-- Magazzino 1 -->

          <div class="box"><?php echo "Nome magazzino: "." ". $magazzino -> name; ?></div>
          <div class="box"><?php echo "Location magazzino: " ." ". $magazzino -> location; ?></div>
          <div class="box"><?php  foreach ($magazzino->products as $key => $value) {
            ?>

             <ul>

               <li> <?php echo "Nome prodotto :"." ".$value -> name; ?></li>
               <li> <?php echo "Peso prodotto :"." ".$value -> weight. " Kg"; ?></li>
               <li> <?php echo "Prezzo prodotto :"." ".$value -> price. " €"; ?></li>

             </ul>

             <?php
          } ?></div>

        </div>

        <div class="table"> <!-- Magazzino 2 -->

          <div class="box"><?php echo "Nome magazzino: "." ". $magazzino2 -> name; ?></div>
          <div class="box"><?php echo "Location magazzino: " ." ". $magazzino2 -> location; ?></div>
          <div class="box"><?php  foreach ($magazzino2->products as $key => $value) {
            ?>

             <ul>

               <li> <?php echo "Nome prodotto :"." ".$value -> name; ?></li>
               <li> <?php echo "Peso prodotto :"." ".$value -> weight. " Kg"; ?></li>
               <li> <?php echo "Prezzo prodotto :"." ".$value -> price. " €"; ?></li>

             </ul>

             <?php
          } ?></div>

        </div>


      </div>


  </body>
</html>
