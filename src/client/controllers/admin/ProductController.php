<?php
namespace src\client\controllers\admin;

use src\vendor\database\Database as Database;

class ProductController {
    
    public function index(){
        load_view('admin', 'product');
    }
    
    public function insertNewProduct(){
        
        $message = null;

        if(isset($_POST['product_tokken']) && $_POST ['product_tokken'] == 1){

            $title           = $_POST['product_title'];
            $price           = $_POST['product_price'];
            $quantity        = $_POST['product_quantity'];
            $productCategory = $_POST['product_category'];

            Database::insert('tb_products', ['title'    => Database::str($title), 
                                             'price'    => $price,
                                             'quantity' => $quantity]);

            $productId = Database::getLastInsertedId();

            
            Database::insert('tm_product__category', [
                'product_id'     => Database::getLastInsertedId(),
                'category_id'    => $productCategory
            ]);

            Database::update('tb_products', [
                'title' => Database::str('New product')
            ])::where(['id' => 10])::execute();

            $message = "Success product insertion";
        }
        
    }
    
    public function createProduct() {
            $title           = $_POST['product_title'];
            $price           = $_POST['product_price'];
            $quantity        = $_POST['product_quantity'];
            $productCategory = $_POST['product_category'];

            Database::insert('tb_products', ['title'    => Database::str($title), 
                                             'price'    => $price,
                                             'quantity' => $quantity]);

            $productId = Database::getLastInsertedId();


            Database::insert('tm_product__category', [
                'product_id'     => Database::getLastInsertedId(),
                'category_id'    => $productCategory
            ]);

    }
    
    public function updateProduct() {
        
            $id              = $_GET['id'];
            $title           = $_POST['product_title'];
            $price           = $_POST['product_price'];
            $quantity        = $_POST['product_quantity'];
            $productCategory = $_POST['product_category'];

            Database::update('tb_products', ['title'    => Database::str($title), 
                                             'price'    => $price,
                                             'quantity' => $quantity
            ])::where(['id' => $id])::execute();
            
    }
    
    public function deleteProduct() {
            $id              = $_GET['id'];
            
            Database::delete('tb_products')::where(['id' => $id])::execute();
    }
    
}

