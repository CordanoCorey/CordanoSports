<?php
namespace Games;
/*
* Using Game Creator, users can optimize the gameplay experience
* by customizing settings to optimal specifications for their
* intended use.
* 
* @package games
* @version 1.0
* @author coreygelbaugh
*/
Class GameCreator implements Indexable,Responsive
{
   /*
   * 
   */
  public function getBackground(){
      return "bg-signed-in.jpg";
  }
  /*
   * 
   */
  public function getTitle(){
      return "Cordano :: Believe the Hype";
  }
  /*
   * 
   */
  public function getLayout(){
      return "game-creator.php";
  }
  /*
   * 
   */
  public function loadView(){
      return new AppView($this);
  }
}