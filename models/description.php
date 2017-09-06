<?php
class Description
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function tableColums($address,$month)
    {
    $stmt = $this->db->prepare('SELECT description.id,`address`, `location`, `room nr`, `space`,`rent_plan`,`costs_plan`,`heating_plan`,`cable_TV`,rent.comments FROM `description`
                                    LEFT JOIN `rent`
                                    ON description.id=rent.id_description
                                    WHERE rent.model=\'plan\' 
                                    AND rent.month = :month 
                                    AND address = :address');
    $stmt->execute(array(
                    ':month'    => $month,
                    ':address'  => $address
                    ));
    return $stmt->fetchAll();
    }

    public function saveRental($arrayToSave)
    {
        $dbdata = $this->checkForAvailability($arrayToSave);
        if (empty($dbdata)){
            //save in db
        } else{
            $preparedArray = $this->prepareForSave($arrayToSave,$dbdata);
            $saveForRent = $preparedArray[0];
            $saveForRentCorrection = $preparedArray[1];
        }
    }

    private function prepareForSave($arrayToSave, $dbdata)
    {
        foreach ($arrayToSave['id'] as $p1 => $p2){
            foreach ($p2 as $key => $value){
            }
        }
        //compare two arrays
        //$preparedArray[0] for rent
        //$preparedArray[1] for rent_correction
        return $preparedArray;
    }
    private function checkForAvailability($array)
    {
     $dbdata = $this->db->prepare('SELECT `model`,`month`,`id_description`,`rent_plan`,`costs_plan`,`heating_plan`,`cable_TV`,`comments`
                                    FROM `rent`
                                    WHERE model = \'actual\'
                                    AND month = :month');
     $dbdata->execute(array(':month' => $array['month']));
     $result = $dbdata->fetchAll();
     return $result;
    }
}

