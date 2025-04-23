<?php
  // 「Food」というクラス名を作成し、プロパティを定義
  class Food{
  private $name;
  private $price;

  // priceプロパティの値を出力するメソッドを作成
  public function show_price(){
    echo $this->price . '<br>';
  }

  // コンストラクタを定義
  public function __construct(string $name, int $price){
    $this->name = $name;
    $this->price = $price;
  }
}

 // インスタンス化する
 $potato = new Food('potato', 250);

 // インスタンス$Foodのプロパティ値を出力する
 print_r($potato);
 echo '<br>';

//  「Animal」というクラス名を作成、プロパティを定義
 class Animal {
  private $name;
  private $height;
  private $weight;

  // heightプロパティ値を出力するメソッドを作成
  public function show_height(){
    echo $this ->height .'<br>';
  }

  // コンストラクタを定義
  public function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// インスタンス化する
$dog = new Animal('dog', '60', '5000');

// インスタンス$dogの値を出力
print_r($dog);
echo '<br>';

// それぞれのメソッドにアクセスし、メソッドを実行
$potato->show_price();
$dog->show_height();
?>