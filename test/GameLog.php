<?php
namespace application\view\model\games;
use \application\view\model\collections\GamesView as GamesView;
use \application\view\collections\protocol\Listable as Listable;
use \application\view\collections\protocol\Tabular as Tabular;

/**
 * 
 * @package Games
 * @author coreygelbaugh
 * @version 1.0
 */
class GameLog extends GamesView implements Listable,Tabular,Chronological{
    
}
