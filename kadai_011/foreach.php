 <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題011</title>
 </head>
 
 <body>
     <p>
         <?php
         $product = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
         foreach ($product as $key => $value) {
             echo "{$key}：{$value}<br>";
         }
         ?>
  </body>
 
 </html>