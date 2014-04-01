<?php 
    namespace application\view\model\hype\multimedia;
    use application\view\collections\Visual as Visual;
    /*
     * Collection of tagged or saved photos that reside in the Trophy Room.
     * 
     * @package multimedia
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PhotoAlbum implements Visuals
    {
        use Gallery;
        use Overview;
    }
?>