<?php
use Database;
/*
* Database Class to take care of Database functions
*/

class Session extends Database {

    public function index(){
        $this->connect();
    }


}