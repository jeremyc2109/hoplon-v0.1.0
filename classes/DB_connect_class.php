<?php

class DB_connect {

    private $_dbName;
    private $_dbUser;
    private $_dbPwd;
    private $_dbHost;
    private $_pdo;
    
    public function __construct($_dbName, $_dbUser = 'root', $_dbPwd = '', $_dbHost = 'localhost') {
        $this->_dbName = $_dbName;
        $this->_dbUser = $_dbUser;
        $this->_dbPwd = $_dbPwd;
        $this->_dbHost = $_dbHost;
    }

    private function getPDO() {
        if($this->_pdo === null) {
            $pdo = new PDO('mysql:dbname=hoplon;host=localhost', 'root', '');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $this->_pdo = $pdo;
        }

        return $this->_pdo;
    }

    public function query($statement) {
        $request = $this->getPDO()->query($statement);
        $datas = $request->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
}

?>