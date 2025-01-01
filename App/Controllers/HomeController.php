<?php



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name" => "Abdallah Ahmed"];
        $this->view('home', $data);
    }
}
