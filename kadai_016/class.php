<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題16</title>
 </head>
 
 <body>
     <p>
         <?php
        //  クラスを定義
         class Food {
            // プロパティを定義
            private $name;
            private $price;
            // コンストラクタを定義
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッド定義
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        //   インスタンス化
        $food = new Food('potato', 250);
        print_r($food);
        echo '<br>';

       class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height =$height;
            $this->weight = $weight;
        }
        public function show_height() {
            echo $this->height . '<br>';
        }
       }
       $animal = new Animal('dog', 60, 5000);
       print_r($animal);
       echo '<br>';

    //    メソッドへのアクセスと実行
        $food->show_price();
        $animal->show_height();
 
       ?>