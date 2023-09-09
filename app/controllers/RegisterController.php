<?php
class RegisterController extends Controller
{

    public function get()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result =  $this->model('user')->register($_POST['user_username'], $_POST['user_email'], $_POST['user_password']);
            //if authed -> go to dashboard
            if ($result == "200") {
                redirect('/login');
            } else {
                $this->view('frontend/register', [
                    'register' => $result
                ]);
            }
            //if submit form -> check -> home 
        }


        // $last_8 = $this->model('product')->getSecond8Products();
        // $category = $this->model('category')->getAllPublished();
        // $latest_product = $this->model('product')->getLastestProduct();
        // if ($first_8 || $last_8) {
        //     $this->view('frontend/shop_document', [
        //         'products_first' => $first_8, 'products_second' => $last_8, 'cate' =>  $category,
        //         'latest_product' => $latest_product
        //     ]);
        // } else {

        $this->view('frontend/register');
        // }
    }
}
