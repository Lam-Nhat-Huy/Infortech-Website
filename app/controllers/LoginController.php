<?php
class LoginController extends Controller
{
    private $LoginModel;

    public function __construct()
    {
        $this->LoginModel = $this->model('LoginModel');
    }

    public function index()
    {
        $this->view('LoginMasterLayout', [
            'pages' => 'LoginAdminPage'
        ]);
    }
}
