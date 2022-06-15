<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Datamodel  extends Model
    {
        function __construct()
        {
            $this-> db = db_connect();
        }

        function getData()
        {
            return $this->db->table("mahasiswa")->get();
        }

        function getDataBarang()
        {
            return $this->db->table("penjualan.barang")->get();
        }
    }