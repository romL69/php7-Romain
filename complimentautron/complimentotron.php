<?php
     require_once(__DIR__.'/function/complimentotron.php');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     </head>
     <body>

         <h1 class="display-3">Complimentotron</h1>
         <p style="font-size: 2em;"><?= complimentotron() ?></p>

       <p><a href="/php7-Romain/complimentautron/complimentotron.php" class="btn btn-primary btn-lg" role="button">Aléatoire</a></p>
       </div>
 </html>
