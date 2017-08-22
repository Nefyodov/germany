<?php
class Rental extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'rental';
    public static function planRentalForPlaceholder($month)
    {
        return Rental::where([['month','=',$month],['model','=','plan']])
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