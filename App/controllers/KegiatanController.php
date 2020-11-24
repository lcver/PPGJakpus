<?php
/**
 * Initialized Controller
 * @return Controller
 */
use App\Core\Controller;

class KegiatanController extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $this->view('home/kegiatan');
    }
}
