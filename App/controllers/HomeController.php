<?php
/**
 * Initialized Controller
 * @return Controller
 */
use App\Core\Controller;

class HomeController extends Controller
{
    public function __construct()
    { }

    public function index()
    {
        $this->view('home/index');
    }
}
