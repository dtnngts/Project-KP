<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Home()
    {
        return view('admin/v_admin');
    }

    public function wellcome()
    {
        return view('v_dashboard');
    }

}
