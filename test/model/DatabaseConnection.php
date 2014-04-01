<?php
    /*
     * Class responsible for communicating with the database.
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Trait DatabaseConnection
    {
        private $cxn=NULL;
        /*
         * Connect to the localhost server.
         */
	private function connect_to_server()
	{
		$cxn = mysqli_connect("162.242.242.13","root","nyKnicks4230","CDdb")
				OR die("error");
		return $cxn;
	}
        public function executeQuery($query,$closeConnection=FALSE)
        {
            $cxn=$this->connect_to_server();
            mysqli_free_result($result);
            mysqli_close($cxn);
            $result=mysqli_query($cxn,$query);
            $row_cnt = mysqli_num_rows($result);
            return $result;
        }
    }
?>
 	