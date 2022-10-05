<?php

namespace App\Libraries;

class koneksi
{
    // This function fetch data from db table
    public function getData()
    {
        $db = db_connect(); // Load database, it loads the default database

        $tbl = $db->table("malasngoding");

        $all_emps = $tbl->get()->getResult();

		return $all_emps;
    }
}