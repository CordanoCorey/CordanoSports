<?php 
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Video profile of all plays that contributed to this statline.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class VideoBoxScore extends Multimedia
    {
        use Gallery;
    } 
    /*
     * Class for commentary surrounding a statline.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Commentary extends Commentary\Collection implements Collective
    {
        use Compilation;
    }
?>