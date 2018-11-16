<?php

// __sleep() __wakeup()
class Connection {
    protected $link;
    private $server, $user, $password, $database;

    public function __construct($server, $user, $password, $database) {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    private function connect() {
        $this->link = mysqli_connect($this->server,$this->user,$this->password,$this->database);
    }

    public function __sleep() {
        return array('localhost','root','123456','data');
    }
    public function __wakeup() {
        $this->connect();
    }
}

//__construct() __destruct()
// __call() __callStatic()
// __get() __set()
// __isset() __unset()

// __toString()

// __invoke()
// __set_state()
// __clone()
// __debugInfo()