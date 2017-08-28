<?php
class RentalIncome
{
    public $listOfMonth = array();
    public $currentMonth;
    public $currentAddress;

    public function __construct()
    {
        $this->listOfMonth = $this->generateListOfMonth();
    }
    public function index()
    {

        $data['listOfMonth'] = $this->listOfMonth;

        $view = new View();
        $view->render('rental/index',$data);
    }
    private function generateListOfMonth()
    {
        for ($i=1; $i<=12; $i++){
            $month[] = date('F',mktime(0,0,0,$i));
        }
        return $month;
    }
    public function filter()
    {
        if ($_POST['address'] && $_POST['month'])
        {
            $this->currentAddress = htmlspecialchars(trim($_POST['address']));
            $this->currentMonth = htmlspecialchars(trim($_POST['month']));
            $this->sendJSON();
        }
        else
        {
            return false;
        }
    }

    public function prepareJSON()
    {
        $data['selection'] = [
            'address' => $this->currentAddress,
            'month' => $this->currentMonth,
        ];
        $data['tableColumsName'] = Description::tableColums($this->currentAddress,$this->currentMonth);
        return $data;
    }

    public function sendJSON()
    {
        $data = $this->prepareJSON();
        echo json_encode($data);
    }
}