<?php 
    namespace application\view\model\leagues\teams;
    
    use application\model\leagues\LeagueTeams as LeagueTeams;
    use application\view\model\protocol\Deployable as Deployable;
    use application\view\collections\protocol\Tabular as Tabular;
    /*
     * Rank order of teams by record within the league and within 
     * each division partition. Standings can also be displayed as
     * a function of any "vs. (insert league parition)" criteria.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Standings implements Deployable,Tabular
    {
        public function setTableHeading(){
            
        }
        
        public function setTableRows(){
            $rows=[];
            foreach($this->league->getTeams as $idTeam){
                $rows[] = $this->fields[$idTeam];
            }
        }
        
        /*
        * 
        */
       public function deriveFields(){

       }
       /*
        * 
        */
       public function defineActions(){

       }
       /*
        * 
        */
       public function jsonSerialize(){

       }
       /*
       * 
       */
      public function getTableSummary(){

      }
      /*
       * 
       */
      public function getTableColumns(){

      }
      /*
       * 
       */
      public function getTableRows(){

      }
}