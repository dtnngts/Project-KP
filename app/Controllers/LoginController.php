<?php
namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\SuperModel;
use App\Models\ValidatorModel;
class LoginController extends BaseController
{

	public function login()
	{
		if (!session()->get('username') == '') {
			return redirect()->to(base_url('/admin'));
		}
        echo view('v_login');
	}

	public function login_action()
	{
		$admin = new AdminModel();
		$super = new SuperModel();
		$validator = new ValidatorModel();
		// $table = 'admin';
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		$cekadmin = $admin->get_data($username, $password);
		$ceksuper = $super->get_data($username, $password);
		$cekvalidator = $validator->get_data($username, $password);
		if ($cekadmin != null) {
			
				$login = [
					'username' => $username,
				];
				session()->set($login);
				return redirect()->to(base_url('/login'));
		} 
		else if ($ceksuper != null) {
			$login = [
				'username' => $username,
			];
			session()->set($login);
			return redirect()->to(base_url('super'));
		} 
		else if($cekvalidator != null) {
			$login = [
				'username' => $username,
			];
			session()->set($login);
			return redirect()->to(base_url('entryvalid'));
		}
		else {
			session()->setFlashdata('gagal', 'Username/Password salah');
			return redirect()->to(base_url('/login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/login'));
	}

	public function create()
	{
		$AdminModel = new AdminModel();
		$ValidatorModel = new ValidatorModel();
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'title' => "Input Admin",
			'vaksinasi' => $AdminModel->findAll(),
			'vaksin' => $ValidatorModel->findAll(),
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
}