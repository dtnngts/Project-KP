<?php

namespace App\Controllers;
use App\Models\DaftarModel;

class DaftarController extends BaseController
{

    public function __construct()
	{
        
		$this->DaftarModel = new DaftarModel();
	}

    public function daftar()
    {
        return view('users/v_daftar');
    }

    public function regis()
    {
        $data = [
			'nama' => $this->request->getVar('nama'),
			'ttl' => $this->request->getVar('ttl'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'alamat' => $this->request->getVar('alamat'),
			'telpon' => $this->request->getVar('telpon'),
			'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
			'kode_kendaraan' => $this->request->getVar('kode_kendaraan'),
			'instruktur' => $this->request->getVar('instruktur'),
			'paket' => $this->request->getVar('paket'),
			'jadwal' => implode('; ', $this->request->getVar('jadwal')), 
            // 'jadwal' => $this->request->getVar('jadwal'),
			'status' => $this->request->getVar('status'),
		];

        $DaftarModel = model("DaftarModel");
		$DaftarModel->insert($data);

        return redirect()->to(base_url('/daftar'));
    }

    public function jadwal(){
        $daftar_model = new DaftarModel();
        $data['daftar'] = $daftar_model->findAll();
     
        $i=0;
        foreach($data['daftar'] as $dt){
            $data['jadwal_orang'][$i] = $dt['jadwal'];
            $i++;
        }
        return view('v_jadwal',$data);
    }

    public function instruktur($ins = false){
        $daftar_model = new DaftarModel();
        if($ins == false){
            $data['daftar'] = $daftar_model->findAll();
         
            $i=0;
            foreach($data['daftar'] as $dt){
                $data['jadwal_orang'][$i] = $dt['jadwal'];
                $i++;
            }
            return view('v_jadwal',$data);
        }
        else{
            $data['daftar'] = $daftar_model->getInstruktur($ins);
         
            $i=0;
            foreach($data['daftar'] as $dt){
                $data['jadwal_orang'][$i] = $dt['jadwal'];
                $i++;
            }
            return view('v_jadwal',$data);

        }
    }
}
