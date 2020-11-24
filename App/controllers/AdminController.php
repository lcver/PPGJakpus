<?php
/**
 * Initialized Controller
 * @return Controller
 */
use App\Core\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        echo "Admin Controller ";
    }

    public function index()
    {
        echo "index";
    }
}
