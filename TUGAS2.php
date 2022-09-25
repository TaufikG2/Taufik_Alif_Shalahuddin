e<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2</title>
   <style>
      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #4db8ff;
         font-family: sans-serif;
      }

      .text {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: #b3e0ff;
         width: 500px;
         height: auto;
         padding: 30px 100px;
         box-shadow: 1px 1px 4px #bbb,-1px -1px 4px #fff;
      }

      h1 {
         text-align: center;
         font-size: 30px;
         font-weight: 300;
      }

      p {
         padding: 20px 20px;
         font-weight: 300;
         font-size: 16px;
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php

   interface turu
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements turu
   {
      public function Makan()
      {
         return "Monyet bisa makan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet bisa berjalan<br/>";
      }

      public function Bersuara()
      {
         return "Monyet bisa bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Monyet bisa Menaiki Sepeda <br/>";
      }
   }

   class Lainnya implements turu
   {
      public function Makan()
      {
         return "";
      }

      public function Berjalan()
      {
         return "";
      }

      public function Bersuara()
      {
         return "";
      }
      public function Sepeda()
      {
         return "<br/>";
      }
   }

   ?>
   <div class="text">
      <h1>Tugas 2</h1>
      <p>
         <?php
         $Monyet = new Monyet;
         $Lainnya = new Lainnya;
         echo "<b> Monyet Memiliki Kemampuan diantaranya : </b><br/>";
         echo $Monyet->Makan();
         echo $Monyet->Berjalan();
         echo $Monyet->Bersuara();

         echo "<b><br/>Kemampuan Monyet Lainnya Apabila Dilatih : </b><br/>";
         echo $Monyet->Sepeda();
         ?>
      </p>
   </div>
</body>

</html>
