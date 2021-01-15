<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Php oop</title>
  </head>
  <body>

    <!-- GOAL: Definire la classe Magazzino e la classe Prodotto nel seguente modo:

                - Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori.

                - Prodotto: definire gli attributi per nome, peso e prezzo -->

    <div class="container">

      <?php

      class Magazzino {
          public $name;
          public $location;
          public $products  = [];
          public function __construct($name,$location) {
              $this -> name = $name;
              $this -> location = $location;
          }
          public function test(){
            echo "Nome: ". $this -> name;
            echo "<br>";
            echo "Location: ". $this -> location;
            echo "<br>";
          }
      }

      class Prodotto {
          public $name;
          public $quantity;
          public function __construct($name,$quantity) {
              $this -> name = $name;
              $this -> quantity = $quantity;
          }
      }

      $magazzino = new Magazzino("Magazzino_Abbigliamento","Roma");
      $magazzino -> test();
      // $magazzino->products[] = new Prodotto('Scarpe', 1);
      // $magazzino->products[] = new Prodotto('Giacche', 2);
      // $magazzino->products[] = new Prodotto('Pantaloni', 3);
      $magazzino2 = new Magazzino("Magazzino_Supermercato","Milano");
      $magazzino2 -> test();
      // $magazzino->products[] = new Prodotto('Latte', 1);
      // $magazzino->products[] = new Prodotto('Pane', 2);
      // $magazzino->products[] = new Prodotto('Pasta', 3);

       //
       // var_dump($magazzino);
       // var_dump($magazzino['name']['quantity']);
       // var_dump($magazzino2);
       // var_dump($magazzino2['name']['quantity']);

       ?>

    </div>

  </body>
</html>
