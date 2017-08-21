<?php
class Rental extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'rental';
    public static function planRentalForPlaceholder($address,$month)
    {
        return Rental::where([['address','=',"$address"],
                              ['month','=',"$month"],
                              ['model','=',"plan"]])
                            ->select
                                (
                                'id_description',
                                'purpose',
                                'cost',
                                'comments'
                                )
                            ->get();
    }
}