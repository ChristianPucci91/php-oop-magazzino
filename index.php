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
         public $products  = [

				  [
					 'name' => 'Scarpe',
					 'quantity' => '1'
				  ],
          [
           'name' => 'Giacche',
           'quantity' => '2'
          ],
          [
           'name' => 'Pantaloni',
           'quantity' => '3'
          ]

        ];
         public function __construct($name,$location) {

           $this -> name = $name;
           $this -> location = $location;

         }

       }

       $magazzino = new Magazzino("Magazzino_Abbigliamento","Roma");

       var_dump($magazzino);
       var_dump($magazzino['name']['quantity']);

       ?>

    </div>

  </body>
</html>
