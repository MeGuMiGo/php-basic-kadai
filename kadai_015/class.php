<!DOCTYPE html>
 <html lang="ja">
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 <body>
     <p>
         <?php
         // 「Food」クラスを定義する
         class Food {
         // プロパティを定義する                        
          private $name;
          private $price;
         // 「Food」クラスには「price」プロパティの値を出力する「show_price」メソッド
         public function set_name(string $name) {
          $this->name = $name;
         }
         public function show_name() {    
          echo $this->name . '<br>';      
         }

         public function set_price(int $price) {
          $this->price = $price;
         }
         public function show_price(int $price) {
          echo $this->price . '<br>';
         } 
         // プロパティに値を代入するコンストラクタ
         public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
         }
        }
         // インスタンス化する
          $food = new Food('potato', 250);
         // print_r関数を使いそれぞれのインスタンスを出力 
          print_r($food);
          echo '<br>'; 
         // 「Animal1」クラスを定義する
         class Animal {
         // プロパティを定義する                        
          private $name;
          private $height;
          private $weight;
         // 「Animal」クラスには「price」プロパティの値を出力する「show_price」メソッド
         public function set_name(string $name) {
          $this->name = $name;
         }
         public function show_name() {
          echo $this->name . '<br>'; 
         }
         public function set_height(int $height) {
          $this->height = $height;
         }
         public function show_height(int $height) {
          echo $this->height . '<br>';
         }
         // プロパティに値を代入するコンストラクタ
         public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
         }
        }        
         // インスタンス化する
          $animal = new Animal('dog', 60, 5000);
         // print_r関数を使いそれぞれのインスタンスを出力 
          print_r($animal);
          echo '<br>';
         //それぞれのクラスに作成したメソッドにアクセスしメソッドを実行 
         $food->show_price(250);
         echo $food->show_price;
         $animal->show_height(60);
         echo $animal->show_height;
         ?>
      </P>
 </body>
 </html>