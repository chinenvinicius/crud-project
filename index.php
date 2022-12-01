<?php

class Fruit {

 public $name ;
 public $color;

 function __construct($name = 1, $color = 'blue'){
  $this->name = $name;
  $this->color = $color;
 }
 function get_name(){
  return $this->name;
 }
 function get_color(){
  return $this->color;
 }
 public function getLength(string $value ): bool{
     return $this->name == $value;
 }

}

$fruitcontent = new Fruit('banana');


class Counter {

     public static int $count = 0;

     private static int $conta = 20;

     public function __construct(){
          self::$count++;
     }

     function setNewCount(int $counter): int{
       return  Counter::$count + $counter;
     }

     public static function getConta():int{
          return  self::$conta;
     }
     
}

//static method
print Counter::getConta() . PHP_EOL;
$counting = new Counter();
// for ($i = 0; $i < 10; $i++) {
//      $connection = new Counter();
//      echo Counter::$count . PHP_EOL;
//  }
 
class Fruits {
	public string $game;
	public array $color;
     public string $typegame;

     /**
      * @var int|float
      */
     private int|float $rating;
     //void it used when method are not return anything
     public function addGames(string $game):void{
          $this->typegame = $game;
     }
     private $protectedProperty = 'this is protected';

	 function __construct($game, $color){
		$this->game = $game;
		$this->color = $color;
          
	}
     function getGameColor(): array{
          return $this->color;
     }
	
     function gametype():string{
		return 'game is ' . $this->protectedProperty ;
	}
     public function setRating(int|float $rating):void{
          $rating  = max(0,$rating);
          $this->rating =min(5, $rating);
     }
     public function getRating(): int|float{
      return $this->rating;
     }
}

$gametypo = new Fruits('GTA', ['work', 'gameblue']);


//const doesnt use $ symbol before.
//const values cannot be changed;

class Http {
     public const NOT_FOUND = 404;
     public const OK = 200;
     public const CREATED = 201;
}

print Http::NOT_FOUND;


// you cant instantiate abstract class
abstract class Book {
     public $title;

     public function __construct(string $title){
          $this->title = $title;
     }

     public function getTitle():string{
       return $this->title;
     }
}

$bookex = new Book("work");
print $bookex->getTitle(). PHP_EOL;