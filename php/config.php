<?php

class Connection extends mysqli
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'chat';

    public function __construct()
    {
        parent::__construct($this->host, $this->username, $this->password, $this->database);
        $this->set_charset('utf8');
        if ($this->connect_error) {
            throw new Exception('Error de conexión: ' . $this->connect_error);
        }
    }
}
