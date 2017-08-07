<?php
class Language
{
    private $menuEN = [
        'Admin' => 'Admin',
        'Available actions'=>'Available actions',
        'View pivot table'=>'View pivot table',
        'View BWA'=>'View BWA',
        'End a session'=>'End a session'
        ];
    private $menuRU = [
        'Admin' => 'Меню администратора',
        'Available actions'=>'Доступные действия',
        'View pivot table'=>'Просмотреть свод',
        'View BWA'=>'Просмотреть P&L',
        'End a session'=>'Завершить сессию'
        ];
    private $pivotEN = [
        'Pivot Table'=>'Pivot Table',
        'Choose month'=>'Choose month',
        'Current selection'=>'Current selection',
        'Back to menu'=>'Back to menu',
        'Address'=>'Address',
        'Plan rental'=>'Plan rental',
        'Plan convertible costs'=>'Plan convertible costs',
        'Actual rental'=>'Actual rental',
        'Actual convertible costs'=>'Actual convertible costs',
        'Art'=>'Art',
        'Plan'=>'Plan',
        'Actual'=>'Actual',
        'Comments'=>'Comments',
        'BWA'=>'BWA',
        'Bezeichnung'=>'Bezeichnung',
        '2017 year'=>'2017 year',
        'Period'=>'Period',
        'Rental income'=>'Rental income',
        'Pre payment convertible costs'=>'Pre payment convertible costs',
        'Full income'=>'Full income',
        'Summary convertible costs'=>'Summary convertible costs',
        'Summary none convertible costs'=>'Summary none convertible costs',
        'Summary all costs'=>'Summary all costs',
        'Revenue'=>'Revenue'
    ];
    private $pivotRU = [
        'Pivot Table'=>'Сводная таблица',
        'Choose month'=>'Выбрать месяц',
        'Current selection'=>'Текущий выбор',
        'Back to menu'=>'Вернуться в меню',
        'Address'=>'Адрес',
        'Plan rental'=>'План арендной платы',
        'Plan convertible costs'=>'План покрываемых затрат',
        'Actual rental'=>'Факт арендной платы',
        'Actual convertible costs'=>'Факт покрываемых затрат',
        'Art'=>'Статья',
        'Plan'=>'План',
        'Actual'=>'Факт',
        'Comments'=>'Комментарий',
        'BWA'=>'P&L',
        'Bezeichnung'=>'Название статьи',
        '2017 year'=>'2017 year',
        'Period'=>'Период',
        'Rental income'=>'Арендная плата',
        'Pre payment convertible costs'=>'Комунальные с жильцов',
        'Full income'=>'Итого доход',
        'Summary convertible costs'=>'Итого покрываемые затраты',
        'Summary none convertible costs'=>'Итого непокрываемые затраты',
        'Summary all costs'=>'Итого затраты',
        'Revenue'=>'Чистая прибыль'
    ];

    public function checkCookie()
    {
        return unserialize(base64_decode($_COOKIE['login']));
    }
    public function getLanguage()
    {
        if ($this->checkCookie()=='1'){
            $lang['menu']=$this->menuRU;
            $lang['pivot']=$this->pivotRU;
            return $lang;
        }elseif($this->checkCookie()=='2'){
            $lang['menu']=$this->menuEN;
            $lang['pivot']=$this->pivotEN;
            return $lang;
        }
    }
}