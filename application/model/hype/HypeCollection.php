<?php

namespace application\model\hype;

/**
 * Description of HypeCollection
 *
 * @package hype
 * @author coreygelbaugh
 * @version 1.0
 */
class HypeCollection implements Filterable{
    
    use Sifter;
    use Sorter;
    
    protected $hype;
    
    public function orderByPopularity(){
        
    }
    
    public function orderByReviewCriteria(){
        
    }
    
    public function orderByContributorRating(){
        
    }
}
