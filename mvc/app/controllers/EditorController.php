<?php
require_once "../app/core/Controller.php";

class EditorController extends Controller {
    public function index() {
        $this->loadView('editor');
    }
}
?>