<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $products;
    public function __construct()
    {
        $this->products = new ProductModel();
    }

    public function index()
    {
        $data['items'] = $this->products->findAll();
        $data['title'] = "Display All products";

        return view("products/index", $data);
    }

    public function create()
    {
        return view("products/create");
    }
    public function store()
    {
        $data = [
            'product' => $this->request->getVar('name'),
            'category' => $this->request->getVar('cat'),
            'price' => $this->request->getVar('price'),
            'sku' => $this->request->getVar('sku'),
            'model' => $this->request->getVar('model'),

        ];
        $rules = [
            'name' => 'required|max_length[30]|min_lenght[3]',
        ];
        if (!$this->validate($rules)) {
            return view('products/create');
        } else {
            // return $data;
            $this->products->insert($data);
            $session = session();
            $session->setFlashdata('mgs', 'Inserted Sucessfully');
            $this->response->redirect('/products');
        }
    }

    public function delete($id)
    {
        // $this->products->where('product_id', $id);
        // // $this->products->delete();

        // // return redirect("products");
    }
}
