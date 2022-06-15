<?php
    namespace App\controllers;

    use CodeIgniter\Controller;
    use App\Models\DataModel;

    class Mahasiswa extends controller
    {
        function __construct()
        {
            $this->data = new Datamodel();
        }

        function index()
        {
            $data['mhs'] = $this->data->getData();
            return view('mahasiswa',$data);
        }

        function edit()
        {
            $data = $this->data->getDataBarang();
            foreach($data->getResult() as $dtbrg)
            {
                echo $dtbrg->id_barang,"<br>";
                echo $dtbrg->nama,"<br>";
                echo $dtbrg->harga,"<br>";
            }
        }
    }