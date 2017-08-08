<?php
class Rental
{
    public $month = array();
    private $address;
    private $choosedMonth;

    public function __construct()
    {
        $this->month = $this->generateListOfMonth();
    }
    public function index()
    {
        $data['listOfMonth'] = $this->month;
        $data['choosedMonth'] = $this->choosedMonth;
        $data['address'] = $this->address;

        $view = new View();
        $view->render('rental/index',$data);
    }

    private function generateListOfMonth()
    {
        for ($i=1; $i<=12; $i++){
            $month[] = date('F Y',mktime(0,0,0,$i));
        }
        return $month;
    }

    public function filters()
    {
        if (!empty($_POST['Choose']))
        {
            $this->choosedMonth = $_POST['month'];
            $this->address = $_POST['address'];
        }
    }
}