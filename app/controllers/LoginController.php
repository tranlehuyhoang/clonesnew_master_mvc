<?php
class LoginController extends Controller
{

    public function get()
    {

        // $first_8 = $this->model('product')->getFirst8Products();
        // $last_8 = $this->model('product')->getSecond8Products();
        // $category = $this->model('category')->getAllPublished();
        // $latest_product = $this->model('product')->getLastestProduct();
        // if ($first_8 || $last_8) {
        //     $this->view('frontend/invoices', [
        //         'products_first' => $first_8, 'products_second' => $last_8, 'cate' =>  $category,
        //         'latest_product' => $latest_product
        //     ]);
        // } else {

        $this->view('frontend/login');
        // }
    }
    public function getProducts()
    {
    }
}
