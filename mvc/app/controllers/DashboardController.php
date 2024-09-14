<?php
require_once "../app/core/Controller.php";

class DashboardController extends Controller {
    public function index() {
        $data = [
            'title' => 'Dashboard'
        ];

        $this->loadView('dashboard', $data);
    }
}
?>
