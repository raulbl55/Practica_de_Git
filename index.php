<!doctype html>
 <html>

   <head>
      <meta charset="utf-8"/>
      <title>document</title>    
   </head>

   <body>
 
 <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      echo "Método get"
    }else{
      echo "Hola mundo"
    }
  ?>

</body>
  

 </html>
