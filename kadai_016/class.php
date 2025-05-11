<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題016</title>
</head>

<body>
   <p>
   <?php

   class Food
  {
    private $name;
    private $price;

   
    // コンストラクタ
    public function __construct($name, $price){
        $this->name = $name;
        $this->price= $price;
    }
     // メソッドを定義する
     public function show_price() {
      return $this->price;
  
    }
  }

      // インスタンス化する
      $food = new Food('potato', 250);
 

     // インスタンス$foodの各プロパティの値を出力する
     print_r($food);
     echo "<br/>";

     
    




  class Animal{
    private $name;
    private $height;
    private $weight;

    // メソッドを定義する
    public function show_height() {
      return $this->height;
  }
   
    // コンストラクタ
  public function __construct($name, $height, $weight){
   $this->name = $name;
   $this->height= $height;
   $this->weight= $weight;
  }
}
  // インスタンス化する
  $animal= new Animal('dog', 60, 5000);

  // インスタンス$animalの各プロパティの値を出力する
  print_r($animal);
  echo "<br/>";

  echo $food->show_price();
  echo "<br/>";
  echo $animal->show_height();
 


?>
 </p>
</body>

</html>
