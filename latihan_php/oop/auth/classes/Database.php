<?php

class Database
{
    private static $INSTANCE = null;
    private $mysqli,
        $HOST = 'localhost',
        $USER = 'root',
        $PASS = '',
        $DBNAME = 'tutorial';

    /**
     * @return string
     */
    public function __construct()
    {
        $this->mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DBNAME);

        if (mysqli_connect_error()) {
            die('gagal koneksinya');
        }
    }

    /*
     * singleton pattern, menguji koneksi agar tidak double koneksi ke db
     */
    public static function getInstance()
    {
        if (!isset(self::$INSTANCE)) {
            self::$INSTANCE = new Database();
        }
        return self::$INSTANCE;
    }

    public function insert($table, $fields = array())
    {
        // mengambil kolom
        $kolom = implode(", ", array_keys($fields));

        // mengambil nilai array
        $valueArrays = array();
        $i = 0;

        foreach ($fields as $key => $values) {
            if (is_int($values)) {
                $valueArrays[$i] = $this->escape($values);
            } else {
                $valueArrays[$i] = "'" . $this->escape($values) . "'";
            }
            $i++;
        }
        $values = implode(", d", $valueArrays);

        $query = "INSERT INTO $table ($kolom) VALUES ($values)";

        return $this->run_query($query, 'Masalah saat memasukkan data');
    }

    public function run_query($query, $msg)
    {
        if ($this->mysqli->query($query)) return true;
        else die($msg);
    }

    public function escape($name)
    {
        return $this->mysqli->real_escape_string($name);
    }

}

?>