<?php

namespace App\Controllers;

use App\Models\DaftarModel;

#[\AllowDynamicProperties]
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

    public function jadwal()
    {
        $daftar_model = new DaftarModel();
        $data['daftar'] = $daftar_model->findAll();

        $i = 0;
        foreach ($data['daftar'] as $dt) {
            $data['jadwal_orang'][$i] = $dt['jadwal'];
            $i++;
        }
        return view('/users/v_jadwal', $data);
    }

    public function instruktur($instruktur)
    {
        // // Set your Merchant Server Key
        // \Midtrans\Config::$serverKey = 'SB-Mid-server-qUtCV-cdfhAOZGUEpxXuyT_N';
        // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        // \Midtrans\Config::$isProduction = false;
        // // Set sanitization on (default)
        // \Midtrans\Config::$isSanitized = true;
        // // Set 3DS transaction for credit card to true
        // \Midtrans\Config::$is3ds = true;

        // $items = array(
        //     array(
        //         'id'       => 'item1',
        //         'price'    => 100000,
        //         'quantity' => 1,
        //         'name'     => 'Adidas f50'
        //     ),
        //     array(
        //         'id'       => 'item2',
        //         'price'    => 50000,
        //         'quantity' => 2,
        //         'name'     => 'Nike N90'
        //     )
        // );

        // // Populate customer's info
        // $customer_details = array(
        //     'first_name'       => "Andri",
        //     'last_name'        => "Setiawan",
        //     'email'            => "test@test.com",
        //     'phone'            => "081322311801",
        //     // 'billing_address'  => $billing_address,
        //     // 'shipping_address' => $shipping_address
        // );

        // $params = [
        //     'transaction_details' => array(
        //         'order_id' => rand(),
        //         'gross_amount' => 7500,
        //     ),
        //     'item_details'        => $items,
        //     'customer_details'    => $customer_details
        // ];
        // $data = [
        //     'snapToken' => \Midtrans\Snap::getSnapToken($params)
        // ];

        $daftar_model = new DaftarModel();

        if ($instruktur == false) {
            $data['daftar'] = $daftar_model->findAll();

            $i = 0;
            foreach ($data['daftar'] as $dt) {
                $data['jadwal_orang'][$i] = $dt['jadwal'];
                $i++;
            }
            return view('/users/v_jadwal', $data);
        } else {
            $data['daftar'] = $daftar_model->getInstruktur($instruktur);
            $i = 0;
            foreach ($data['daftar'] as $dt) {
                $data['jadwal_orang'][$i] = $dt['jadwal'];
                $i++;
            }
            if (!isset($data['jadwal_orang'])) {
                $data['jadwal_orang'] = null;
            }
            return view('/users/v_jadwal', $data);
        }
    }

    public function regis()
    {
        $DaftarModel = model("DaftarModel");
        $transfer = $this->request->getFile('buktiTF');
        $namaTF = $transfer->getRandomName();
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
            'status' => " ",
            'harga' => $this->request->getVar('harga'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            // 'jadwal' => $this->request->getVar('jadwal'),
            'buktiTF' => $namaTF,
            'metode' => $this->request->getVar('metode')
        ];
        //
        $transfer->move('assets/transfer', $namaTF);
        $DaftarModel->insert($data);
        return redirect()->to(base_url('/daftar'));
    }

    function modalPembayaran()
    {
        $harga = $this->request->getPost('harga');

        $daftarmodel = new DaftarModel();
        $cekdata = $daftarmodel->tampilDataTemp($harga);


        if ($cekdata->getNumRows() > 0) {
        }
    }

    function simpanPembayaran()
    {
        if ($this->request->isAJAX()) {
            $harga = str_replace(",", "", $this->request->getPost('harga'));

            $daftarmodel = new DaftarModel();
            $$daftarmodel->insert([
                'harga' => $harga
            ]);
            $daftarmodel = new DaftarModel();
            $dataTemp = $modelTemp->getWhere(['']);
        }
    }

    public function payMidtrans()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getPost('nama');
            $alamat = $this->request->getPost('alamat');
            $telpon = $this->request->getPost('telpon');
            $paket = $this->request->getPost('paket');
            $harga = (int) filter_var($this->request->getPost('harga'), FILTER_SANITIZE_NUMBER_INT);

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-qUtCV-cdfhAOZGUEpxXuyT_N';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            // Populate items
            $items = array(
                array(
                    'id'       => 'item2',
                    'price'    => $harga,
                    'quantity' => 1,
                    'name'     => 'Paket Kursus ' . strtoupper($paket)
                )
            );

            // Populate customer's billing address
            $billing_address = array(
                'first_name'   => $nama,
                'address'      => $alamat,
                'phone'        => $telpon,
                'country_code' => 'IDN'
            );

            // Populate customer's info
            $customer_details = array(
                'first_name'       => $nama,
                'phone'            => $telpon,
                'billing_address'  => $billing_address
            );

            $params = [
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $harga,
                ),
                'item_details'        => $items,
                'customer_details'    => $customer_details
            ];

            $json = [
                'snapToken' => \Midtrans\Snap::getSnapToken($params)
            ];
            echo json_encode($json);
        }
    }
}
