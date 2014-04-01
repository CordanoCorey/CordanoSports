    <?php
    //namespace application\view\html;
    /*
     * This class contains methods for all view Cordano Sports view templates. 
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CDTemplate
    {
        
        /*
         * HTML template to display Cell View.
         * 
         * @param HypeCellView $hypeCellView
         * @param bool $reviewable
         * @return string
         * @throws NonFeatureException
         */
         public static function cellView($cellViewModel,$reviewable=FALSE)
         {
            $name=isset($cellViewModel->name)?$cellViewModel->name:"";
            $status=isset($cellViewModel->status)?$cellViewModel->status:"";
            $html= <<< CELL
            <div id="hypemachine">
            	<span class="headline"> $name </span><span class="source">$status</span>
            </div>
CELL;
            return $html;
         }
         
        public function preview()
        {
            $html= <<< PREVIEW
                <div class="red-wrapper">
                            <div class="home-feature">
                    <img src="images/feature-placeholder.jpg" />
                    <div class="home-feature-copy">
                            <h3>Feature Title</h3>
                        <p>Thanks for my birthday presents mom!!!</p>
                    </div>
                    <p><a href="#" class="button">Do something button</a></p>
                </div>
            </div>
PREVIEW;
            return $html;
        }
        
        /*
         * HTML template to display Hype Cell View.
         * 
         * @param HypeCellView $hypeCellView
         * @param bool $reviewable
         * @return string
         * @throws NonFeatureException
         */
         public function hypeCellView($hypeCellView,$reviewable=FALSE)
         {
            $headline=$hypeCellView->headline;
            $source=$hypeCellView->source;
            $date=$hypeCellView->date;
            $html= <<< HYPECELL
            <div id="hypemachine">
            	<span class="headline">Today is a.... $headline </span><span class="source">($source) $date</span>
            </div>
HYPECELL;
            return $html;
         }
         
         /*
          * HTML template to display Hype Preview.
          * 
          * @param HypePreview $hypePreview 
          * @param bool $reviewable
          * @return string
          */
         public function hypePreview($hypePreview,$reviewable=FALSE)
         {
            $headline=$hypePreview->headline;
            $source=$hypePreview->source;
            $date=$hypePreview->date;
            $html= <<< HYPEPREVIEW
            <div id="hypemachine">
            	<div style="overflow:auto;"><span class="headline">Today is a.... $headline </span><span class="source">($source) $date</span></div>
                <div id="hypemachine-content">
                	<p>Sausage shankle jerky meatball leberkas chuck turkey beef short loin ham tongue shank frankfurter. Kielbasa tongue jerky hamburger, beef andouille prosciutto salami. Brisket strip steak chuck, meatball sirloin tongue cow pastrami shankle spare ribs. Strip steak turkey tongue shoulder meatloaf sirloin bacon tail venison. Doner pastrami filet mignon, tongue hamburger short ribs chicken ham hock tri-tip jowl pork loin prosciutto. Short loin beef ribs corned beef cow salami.</p>
                    <div class="clear">
                    	<a href="#" id="comment-count">2 Comments</a><a href="#" class="social-icon"><img src="images/icon-facebook.png" /></a><a href="#" class="social-icon"><img src="images/icon-twitter.png" /></a>
                    </div>
                </div>
            </div>
HYPEPREVIEW;
            return $html;
         }
         
         /*
          * HTML template to display Comment View.
          * 
          * @param CommentView $commentView
          * @param bool $reviewable
          * @return string
          */
         public function commentView($commentView,$reviewable=TRUE)
         {
            $html= <<< COMMENTVIEW
                <div class="comment-block">
                    <div class="clear">
                            <a href="#"><img src="images/avatar.jpg" class="avatar" /><span class="user-name">Mr_Football123</span></a>
                    </div>
                    <div class="comment-bubble">
                            This is a sample comment meatball leberkas chuck turkey beef short loin ham tongue shank frankfurter.
                    </div>
COMMENTVIEW;
            if($reviewable){
                $html.= <<< COMMENTINPUT
                    <form action="" method="post" id="post-comment">
                            <textarea></textarea><br />
                        <input type="submit" class="button" value="Comment">
                    </form>
COMMENTINPUT;
            }
            $html.="</div>";
            return $html;
         }
         
         /*
          * HTML template to display Comment View.
          * 
          * @param CommentView $commentView
          * @param bool $reviewable
          * @return string
          */
         public function pollView($commentView,$reviewable=TRUE)
         {
             if($reviewable){
                 $html= <<< POLLINPUTVIEW
                    <div class="survey-block">
                        <h3>Who is the greatest basketball player of all time?</h3>
                        <form action="" method="post" id="post-survey">
                            <input type="radio" name="survey" value="A"> MJ
                            <input type="radio" name="survey" value="B"> Lebron
                            <input type="radio" name="survey" value="C"> Russell
                            <input type="radio" name="survey" value="D"> Magic
                            <input type="radio" name="survey" value="E"> Bird
                            <input type="radio" name="survey" value="F"> Kobe
                            <input type="radio" name="survey" value="G"> Shaq
                            <input type="radio" name="survey" value="H"> Corey G.
                            <br /><br />
                            <input type="submit" class="button" value="Vote">
                        </form>
                    </div>
POLLINPUTVIEW;
             }
             else{
                 $html= <<< POLLVIEW
                    <div class="survey-block">
                        <h3>How long with Desean Jackson be out in the 2014-15 season?</h3>
                    </div>
POLLVIEW;
             }
            return $html;
         }
         
         public function hypeDetailView($hypeCellView,$editable=FALSE)
         {
           $headline=$hypeCellView->headline;
           $source=$hypeCellView->source;
           $date=$hypeCellView->date;
                     $html= <<< HYPELINE
            <div id="hypemachine">
            	<span class="headline"> $headline </span><span class="source">($source) $date</span>
            </div>
            <div id="hypemachine">
            	<div style="overflow:auto;"><span class="headline">Kobe Bryant or Kobe Beef?</span><span class="source">(CNN) 2/14/14</span></div>
                <div id="hypemachine-content">
                	<p>Sausage shankle jerky meatball leberkas chuck turkey beef short loin ham tongue shank frankfurter. Kielbasa tongue jerky hamburger, beef andouille prosciutto salami. Brisket strip steak chuck, meatball sirloin tongue cow pastrami shankle spare ribs. Strip steak turkey tongue shoulder meatloaf sirloin bacon tail venison. Doner pastrami filet mignon, tongue hamburger short ribs chicken ham hock tri-tip jowl pork loin prosciutto. Short loin beef ribs corned beef cow salami.</p>
                    <div class="clear">
                    	<a href="#" id="comment-count">2 Comments</a><a href="#" class="social-icon"><img src="images/icon-facebook.png" /></a><a href="#" class="social-icon"><img src="images/icon-twitter.png" /></a>
                    </div>
                    <div class="comment-block">
                    	<div class="clear">
                        	<a href="#"><img src="images/avatar.jpg" class="avatar" /><span class="user-name">Mr_Football123</span></a>
                        </div>
                        <div class="comment-bubble">
                        	This is a sample comment meatball leberkas chuck turkey beef short loin ham tongue shank frankfurter.
                        </div>
                    </div>
                    <div class="comment-block">
                    	<div class="clear">
                        	<a href="#"><img src="images/avatar.jpg" class="avatar" /><span class="user-name">Mr_Football123</span></a>
                        </div>
                        <div class="comment-bubble">
                        	This is a sample comment meatball leberkas chuck turkey beef short loin ham tongue shank frankfurter.
                        </div>
                        <form action="" method="post" id="post-comment">
                        	<textarea></textarea><br />
                            <input type="submit" class="button" value="Comment">
                        </form>
                    </div>
                    <div class="survey-block">
                    	<h3>How long with Desean Jackson be out in the 2014-15 season?</h3>
                    	<form action="" method="post" id="post-survey">
                        	<input type="radio" name="survey" value="A"> A
                            <input type="radio" name="survey" value="B"> B
                            <input type="radio" name="survey" value="C"> C
                            <input type="radio" name="survey" value="D"> D
                            <input type="radio" name="survey" value="E"> E
                            <br />
                            <input type="submit" class="button" value="Vote">
                        </form>
                    </div>
                </div>
            </div>
            <div id="hypemachine">
            	<span class="headline">Kobe Bryant or Kobe Beef?</span><span class="source">(CNN) 2/14/14</span>
            </div>
            <div id="hypemachine">
            	<span class="headline">Kobe Bryant or Kobe Beef?</span><span class="source">(CNN) 2/14/14</span>
            </div>
            <div id="hypemachine">
            	<span class="headline">Kobe Bryant or Kobe Beef?</span><span class="source">(CNN) 2/14/14</span>
            </div>
            <div id="hypemachine">
            	<span class="headline">Kobe Bryant or Kobe Beef?</span><span class="source">(CNN) 2/14/14</span>
            </div>
HYPELINE;
             return $html;
         }
         
    }