<?php
//frontend/controllers/CartController.php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class CartController extends Controller {
    public function index() {
      if (isset($_POST['submit'])) {
        foreach ($_SESSION['cart'] AS $product_id => $cart) {
          if ($_POST[$product_id] < 0) {
            $_SESSION['error'] = 'Quantity required > 0';
            header("Location: shopping-cart.html");
            exit();
          }
        }

        foreach ($_SESSION['cart'] AS $product_id => $cart) {
          $_SESSION['cart'][$product_id]['quantity']
              = $_POST[$product_id];
        }
        $_SESSION['success'] = 'Update cart successfully';
      }

        $this->content = $this->render('views/carts/index.php');
        require_once 'views/layouts/main.php';
    }


    public function add() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Product`s ID is not valid';
            header('Location: index.php');
            exit();
        }
        $product_id = $_GET['id'];
        $product_model = new Product();
        $product = $product_model->getById($product_id);
        $cart = [
            'name' => $product['title'],
            'price' => $product['price'],
            'avatar' => $product['avatar'],
            'quantity' => 1
        ];
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'][$product_id] = $cart;
        } else {
            if (!array_key_exists($product_id, $_SESSION['cart'])) {
                $_SESSION['cart'][$product_id] = $cart;
            } else {
                $_SESSION['cart'][$product_id]['quantity']++;
            }
        }
        echo TRUE;
    }

    public function delete() {
      $product_id = $_GET['id'];
      unset($_SESSION['cart'][$product_id]);
      if (empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
      }
      $_SESSION['success'] ="Delete product $product_id successful";
      header("Location: shopping-cart.html");
      exit();
    }
}