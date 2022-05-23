<?php
namespace romanenko;
class control
{
    public function myFilter($students)
    {
        return array_filter($students, function ($v) {
            if ($v->age >= 18) {
                return true;
            } else {
                return false;
            }
        });
    }
}