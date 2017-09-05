<?php
class RentalIncome
{
    public $listOfMonth = array();
    public static $currentMonth;
    public static $currentAddress;

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

    /**
     * выводит на экран выбранные данные (месяц+адрес) и отрисовывает таблицу из базы.
     * @return bool
     */
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
    public function prepareJSONToWriteTable()
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
        $data = $this->prepareJSONToWriteTable();
        echo json_encode($data);
    }


    public function saveRental()
    {
        $arrayToSave = $this->prepareArrayToSave();
        Description::saveRenral($arrayToSave);

    }
    public function prepareArrayToSave()
    {
        /**
         * Подготавливает массив для сохранения в базу данных
         */
        $arrayToSave = [];
        if ($_POST){
            foreach ($_POST as $key => $value){
                if ($key == 'address'){
                    $arrayToSave['address'] = $value;
                }
                elseif ($key == 'month'){
                    $arrayToSave['month'] = $value;
                }else{
                    $r = explode('|',$key);
                    $arrayToSave['id'][$r[0]][$r[1]] = $value;
                }
            }
        }
        echo json_encode('Data insert to database!');
        return $arrayToSave;
        /**
         * конец блока кода
         */
    }

}