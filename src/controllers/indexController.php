<?php

use Firework\Core\Controller;
use Firework\Core\View;
use Firework\Core\Hash;

use Firework\Models\indexModel;

class indexController extends Controller
{
    public function __construct()
    {
        $this->model = new indexModel();
        $this->view = new View();
        $this->hash = new Hash();
    }

    public function index()
    {
        $data = $this->model->get("*", "customers", ["age" => 25, "name" => "alex"]);
        $this->model->set('customers', ['age' => 20, 'name' => 'j']);
        $this->view->generate('indexView.php', 'templateView.php', $data);
    }
}