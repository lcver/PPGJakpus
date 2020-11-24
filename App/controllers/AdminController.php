<?php
/**
 * Initialized Controller
 * @return Controller
 */
use App\Core\Controller;

class AdminController extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $this->view('administrator/index');
    }
}
