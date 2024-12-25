
<?php

namespace App\Controllers;

use App\Models\PenjualanModel;
use CodeIgniter\Controller;

class PenjualanController extends Controller
{
    public function create()
    {
        return view('penjualan/create');
    }

    public function store()
    {
        $penjualanModel = new PenjualanModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price'),
            'total' => $this->request->getPost('quantity') * $this->request->getPost('price'),
        ];
        $penjualanModel->save($data);
        return redirect()->to('/penjualan');
    }

    public function laporan()
    {
        $penjualanModel = new PenjualanModel();
        $data['penjualan'] = $penjualanModel->findAll();
        return view('penjualan/laporan', $data);
    }
}