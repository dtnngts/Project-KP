<?php
namespace App\Controllers;
use App\Models\AdminModel;
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
		$validator = new ValidatorModel();
		// $table = 'admin';
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		$cekadmin = $admin->get_data($username, $password);
		$cekvalidator = $validator->get_data($username, $password);
		if ($cekadmin != null) {
			
				$login = [
					'username' => $username,
				];
				session()->set($login);
				return redirect()->to(base_url('/admin'));
		} 
		else if($cekvalidator != null) {
			$login = [
				'username' => $username,
			];
			session()->set($login);
			return redirect()->to(base_url('/validasisiswa'));
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