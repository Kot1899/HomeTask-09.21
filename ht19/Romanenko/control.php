<?php
namespace Romanenko;
class Control
{
    public function Filter($users)
    {
        return array_filter($users, function ($v) {
            if ($v->age > 18) {
                return true;
            } else {
                return false;
            }
        });
    }
}

