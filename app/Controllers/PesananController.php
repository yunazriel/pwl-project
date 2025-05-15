<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PesananController extends BaseController {
    public function index() {
        return view('v_pesanan');
    }
}
