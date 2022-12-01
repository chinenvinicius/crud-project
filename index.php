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
}

$gametypo = new Fruits('GTA', ['work', 'gameblue']);

var_dump($gametypo->getGameColor());