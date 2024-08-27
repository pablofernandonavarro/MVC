<?php

namespace App\Models;

use mysqli;

class User
{
    protected $db_host= DB_HOST;
    protected $db_user = DB_USER;
    protected $db_password = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;
    public function __construct()
    {
        $this->connection();
    }
    public function connection()
    {

        $this->connection = new  mysqli( $this->db_host, $this->db_user, $this->db_password, $this->db_name);

        if ($this->connection->connect_error) {
            die("Error de coneccion" . $this->connection->connect_error);
        }
    }
}
