<?php
    namespace application\delegate\factory;
    /*
     * Handles tasks that are delegated in-session and never stores any data, just
     * serves as a collection of utilities that require data input.
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
    class CDFactory
    {

        protected $target = null;
        protected $acl = null;

        public function __construct( )
        {
            //$this->target = $target;
            //$this->acl = $acl;
        }

        public function __call( $method, $arguments )
        {
            if ( 
                 method_exists( $this->target, $method )
              && $this->acl->isAllowed( get_class($this->target), $method )
            ){
                return call_user_func_array( 
                    array( $this->target, $method ),
                    $arguments
                );
            }
        }

    }
?>