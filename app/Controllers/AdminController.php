<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\SuperModel;
use App\Models\ValidatorModel;
use App\Models\DaftarModel;

class AdminController extends BaseController
{

    public function __construct()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		$this->DaftarModel = new DaftarModel();
	}

    public function admin()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
		$DaftarModel = model("DaftarModel");
		$data = [
			'title' => "Home",
			'hendri' => $DaftarModel->where('instruktur', 'Hendri')->findAll(),
			'suhadi' => $DaftarModel->where('instruktur', 'Suhadi')->findAll(),
			'yono' => $DaftarModel->where('instruktur', 'Yono')->findAll(),
			'eko' => $DaftarModel->where('instruktur', 'Eko')->findAll(),
			'allMem' => $DaftarModel->findAll(),
			// 'alumni' => $DaftarModel->where('status', 'alumni')->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_admin', $data);
	}

	public function allMem()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$allMem = $this->DaftarModel->search($keyword);
		} else {
			$allMem = $this->DaftarModel;
		}
		

        $data = [
			'allMem' => $allMem->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/v_allMem', $data);
    }

    public function hendri()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$hendri = $this->DaftarModel->where('instruktur', 'Hendri')->search($keyword);
		} else {
			$hendri = $this->DaftarModel;
		}

        $data = [
			'hendri' => $hendri->where('instruktur', 'Hendri')->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/v_hendri', $data);
    }

	public function suhadi()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$suhadi = $this->DaftarModel->where('instruktur', 'Suhadi')->search($keyword);
		} else {
			$suhadi = $this->DaftarModel;
		}

        $data = [
			'suhadi' => $suhadi->where('instruktur', 'Suhadi')->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/v_suhadi', $data);
    }

	public function yono()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$yono = $this->DaftarModel->where('instruktur', 'Yono')->search($keyword);
		} else {
			$yono = $this->DaftarModel;
		}

        $data = [
			'yono' => $yono->where('instruktur', 'Yono')->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/v_yono', $data);
    }

	public function eko()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$eko = $this->DaftarModel->where('instruktur', 'Eko')->search($keyword);
		} else {
			$eko = $this->DaftarModel;
		}

        $data = [
			'eko' => $eko->where('instruktur', 'Eko')->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/v_eko', $data);
    }

	public function edit($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'row' => $this->DaftarModel->getDaftar($no_registrasi),
			'nama' => session()->get('username')
		];

		$daftar_model = new DaftarModel();

		if ($no_registrasi == false) {
			$data['daftar'] = $daftar_model->findAll();

			$i = 0;
			foreach ($data['daftar'] as $dt) {
				$data['jadwal_orang'][$i] = $dt['jadwal'];
				$i++;
			}
			return view('v_jadwal', $data);
		} else {
			$data['daftar'] = $daftar_model->getNoReg($no_registrasi);
			$i = 0;
			// var_dump($data);
			// exit();
			foreach ($data['daftar'] as $dt) {
				$data['jadwal_orang'][$i] = $dt['jadwal'];
				$i++;
			}
			if (!isset($data['jadwal_orang'])) {
				$data['jadwal_orang'] = null;
			}
		}

		return view("admin/v_edit", $data);
	}

	public function update($no_registrasi, $instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$DaftarModel = model("DaftarModel");
		$data = $this->request->getPost();
		$DaftarModel->update($no_registrasi, $data);

		return redirect()->to(base_url($instruktur));
	}

	public function delete($no_registrasi, $instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$row = new DaftarModel();
		$data = $row->find($no_registrasi);
		unlink("./assets/transfer/".$data['buktiTF']);
		
		$row->delete($no_registrasi);
		return redirect()->to(base_url($instruktur));
	}

	public function create() {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$AdminModel = new AdminModel();
		$SuperModel = new SuperModel();
		$ValidatorModel = new ValidatorModel();

		$data = [
			'admin' => $AdminModel->findAll(),
			'super' => $SuperModel->findAll(),
			'validator' => $ValidatorModel->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_inputadmin', $data);
	}

	public function store() {
		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nama' => $this->request->getVar('nama'),
			'admin' => $this->request->getVar('admin'),
			'role' => $this->request->getVar('role'),
		];

		model($data['admin'])->insert($data);
		return redirect()->to(base_url('/lihatadmin'));
	}

	public function lihatadmin()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $AdminModel = new AdminModel();
		$SuperModel = new SuperModel();
		$ValidatorModel = new ValidatorModel();

		$data = [
			'admin' => $AdminModel->findAll(),
			'super' => $SuperModel->findAll(),
			'validator' => $ValidatorModel->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_lihatadmin', $data);
    }

	public function excel () 
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$siswa = $this->DaftarModel->where('status', 'siswa')->search($keyword);
		} else {
			$siswa = $this->DaftarModel;
		}

        $data = [
			'siswa' => $siswa->where('status', 'siswa')->findAll(),
			'nama' => session()->get('username')
		];
        
        return view('admin/data_kursus/excel_siswa', $data);
	}

	public function valid()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$allMem = $this->DaftarModel->search($keyword);
		} else {
			$allMem = $this->DaftarModel;
		}
		
		$data = [
			'allMem' => $allMem->findAll(),
			'nama' => session()->get('username')
		];
		return view("admin/v_validator", $data);
	}

	public function validasi ($no_registrasi) {
		$data = [
			'status' => "siswa",
			'nama' => session()->get('username')
		];
		$where = array('no_registrasi' => $no_registrasi);

		$this->DaftarModel->update($where, $data, 'allMem');
		return redirect()->to(base_url('/validasisiswa'));
	}

	public function adminjadwal()
	{
		$data = [
			'title' => "Home",
			'nama' => session()->get('username')
		];
		return view('admin/v_lihatjadwal', $data);
	}

	public function lihatjadwal($instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$daftar_model = new DaftarModel();

		$data = [
			'nama' => session()->get('username')
		];
		$data['daftar'] = $daftar_model->getInstruktur($instruktur);
		$i = 0;
		// var_dump($data);
		// exit();
		foreach ($data['daftar'] as $dt) {
			$data['jadwal_orang'][$i] = $dt['jadwal'];
			$i++;
		}
		if (!isset($data['jadwal_orang'])) {
			$data['jadwal_orang'] = null;
		}
		return view('admin/v_lihatjadwal', $data);
	}
}
