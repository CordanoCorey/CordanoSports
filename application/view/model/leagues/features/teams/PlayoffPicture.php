<?php 
    namespace application\view\model\leagues\teams;
    
    use application\model\leagues\LeagueTeams as LeagueTeams;
    use application\view\model\protocol\Deployable as Deployable;
    use application\view\collections\protocol\Tabular as Tabular;
    /*
     * League playoff pictures show the playoff seeding as it
     * stands on the current date (seeding if the season ended 
     * today), along with odds that each team will be seeded at
     * each position. If a field in the table is clicked, the
     * played out scenarios that would lead to that team acquiring
     * that postseason seed are produced.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PlayoffPicture extends TeamsView implements Deployable,Tabular
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