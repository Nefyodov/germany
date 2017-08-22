<?php
class Description extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'description';

    public static function tableColums($address)
    {
        return Description::where('address', '=', $address)
            ->select
            (
                'id',
                'address',
                'location',
                'room nr',
                'space'
            )
            ->get();
        /**
         * SELECT description.id,`address`, `location`, `room nr`, `space`,`purpose`,`cost`,rental.comments FROM `description`
         * LEFT JOIN `rental`
         * ON description.id=rental.id_description
         * WHERE rental.model='plan' AND rental.month='April' AND address='Duisburger Str. 101'
         */
    }
}

