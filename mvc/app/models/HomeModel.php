<?php
require_once "../app/core/Model.php";

class HomeModel extends Model {
    public function getData() {
        return ['message' => 'Hello World'];
    }
}
?>
