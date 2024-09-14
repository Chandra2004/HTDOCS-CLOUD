<?php
require_once "../app/core/Controller.php";

class HomeController extends Controller {
    public function index() {
        $model = $this->loadModel('HomeModel');
        $data = $model->getData();
        $this->loadView('home', $data);
    }
}
?>
