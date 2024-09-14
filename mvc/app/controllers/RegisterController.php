<?php
require_once "../app/core/Controller.php";

class RegisterController extends Controller {
    public function index() {
        $this->loadView('register');
    }
}
?>
