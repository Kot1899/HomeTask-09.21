<?php
namespace Romanenko;
class Control{
    public function Filter($users)
    {
        $users_new = [];
        for ($i = 0; $i < 3; $i++) {
            function ($v){
                $adult = 18;
                if ($users[$i]->age > $adult) {
                    $users_new[] = $users[$i];
                }
            }

            return $users_new;
        }
    }
}



array_filter($users,function($v));