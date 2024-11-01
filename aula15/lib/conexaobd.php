<?php
class conexaoBd {
        private $host;
        private $porta;
        private $userName;
        private $password;
        private $dbconn;
        private $dataBase;
        
        public function __construct()
        {
            
        }

        public function setHost($host){
            $this->host = ($host);

        }
        public function setPorta($porta){
            $this->porta = ($porta);

        }
        public function setUserName($username){
            $this->userName = ($username);

        }
        public function setPassword($password){
            $this->password = ($password);

        }

        public function setDataBase($dataBase){
            $this->dataBase = ($dataBase);

        }

        public function conectar() {
           try  {
            $this ->dbconn = pg_connect ($this -> getConnectionString());
            if ($this->dbconn) {
                return true;
            }
           } catch (Exception $e){
                //
           }
        }

        private function getConnectionString() {
            return pg_connect("host=".$this->host.
                               "port=".$this->porta. 
                               "dbname=".$this->dataBase. 
                               "user=".$this->userName.
                               "password=".$this->password);
        }

        public function getInternalConnection() {
            return $this->dbconn;
        }
}




















?>