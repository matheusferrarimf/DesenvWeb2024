<?php

class Query{
    private $sql;
    private $registros;
    private $connection;
    private $lastQuerry;


    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function getRegistros($registros) {
        $this->registros = $registros;
    }

    public function Open() {
        $this->lastQuerry = pg_query($this->connection->getInternalConnection(), $this->sql);
        if ($this->lastQuerry){
            //Retorna a quantidade de linhas da querry
            $this->registros = pg_num_rows($this->lastQuerry);
        }
    }

    public function getNextRow() {
        $row = pg_fetch_assoc($this->lastQuerry);
        if($row) {
            return $row;
        }
        return false;
    }
}
?>