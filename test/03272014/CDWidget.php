    <?php
    //namespace application\view\html;
        /*
     * This class contains methods for all view Cordano Sports view widgets. 
         * 
     * @Package View
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CDWidget{
        
        /*
         * HTML to display app button links.
         * 
         * @param string|array $app
         * @return string
         */
         public static function appMenu($apps){
             $appMenu="<ul id='sidebar-nav'>";
             foreach($apps as $app){
                 switch($app){
                    default:
                            $appMenu.="<li><a href='#'class='appLink'>$app</a></li>";
                }
             }
            $appMenu.="</ul>";
            return $appMenu;
         }
         
         /*
          * 
          */
         public static function horizontalScroller($sender){
             
         }
    }