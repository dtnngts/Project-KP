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
			'siswa' => $DaftarModel->where('status', 'siswa')->findAll(),
			'alumni' => $DaftarModel->where('status', 'alumni')->findAll(),
			'nama' => session()->get('username')
		];
		return view('v_admin', $data);
	}

    public function siswa()
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
		];
        
        return view('data_kursus/v_siswa', $data);
    }

	public function alumni()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$alumni = $this->DaftarModel->where('status', 'alumni')->search($keyword);
		} else {
			$alumni = $this->DaftarModel;
		}

        $data = [
			'alumni' => $alumni->where('status', 'alumni')->findAll(),
		];
        
        return view('data_kursus/v_alumni', $data);
    }

	public function edit($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'row' => $this->DaftarModel->getDaftar($no_registrasi),
		];

		return view("v_edit", $data);
	}

	public function update($no_registrasi, $status)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$DaftarModel = model("DaftarModel");
		$data = $this->request->getPost();
		$DaftarModel->update($no_registrasi, $data);

		return redirect()->to(base_url($status));
	}

	public function delete($no_registrasi, $status)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$row = new DaftarModel();
		$row->where(['no_registrasi' => $no_registrasi])->delete();
		return redirect()->to(base_url($status));
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
		return view('v_inputadmin', $data);
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

		return redirect()->to(base_url('/inputadmin'));
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
		return view('v_lihatadmin', $data);
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
		];
        
        return view('data_kursus/excel_siswa', $data);
	}
}
