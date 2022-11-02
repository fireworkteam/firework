<?php

use Firework\Core\Controller;
use Firework\Core\View;
use Firework\Models\indexModel;

class indexController extends Controller
{
    public function __construct()
    {
        $this->model = new indexModel();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->get_data();
        $this->view->generate('indexView.php', 'templateView.php', $data);
    }
}