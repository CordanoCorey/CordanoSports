<?php 
    namespace application\view\model\leagues\league;
    use application\view\model\collections\TopicsView as TopicsView;
    use application\view\containers\protocol\Collective as Collective;
    use application\view\containers\protocol\Pageable as Pageable;
    /*
     * A league rule book is the league-specific gameplay ruleset.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class RuleBook extends TopicsView implements Collective,Pageable
    {
        use Compilation;
    }