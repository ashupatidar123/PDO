<?php
require_once ('dbCon.php');

class ADMIN{

	private $db;
	public function __construct($dbCon){
        $this->db = $dbCon;
    }

    public function adminAuth()
    {
    	echo "hy";
    }
}
?>