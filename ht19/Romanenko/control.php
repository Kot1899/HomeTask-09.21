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

       // return $users_new;
    }
}

//    $adult=18;
//    $users_new=[];
//        for ($i=0; $i<3; $i++){
//            if ($users[$i]->age > $adult) {
//                $users_new[]=$users[$i];
//            }
//        }
//       return $users_new;
//    }
//}




