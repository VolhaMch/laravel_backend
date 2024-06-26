<?php

namespace App\Actions;

use App\Models\Feed;

 class Feeder
 {
     function save($obj, $model_name, $type){
         $feed = new Feed;
         if(optional($obj)->user_id !== null){
             $feed->user_id = optional($obj)->user_id;
         }
//         else{
//             $feed->user_id = optional($obj)->sponsor->user_id;
//         }
//         if(optional($obj)->country_id !== null){
//             $feed->country_id = optional($obj)->country_id;
//         }
//         else{
//             $feed->country_id = optional($obj)->sponsor->country_id;
//         }
         $feed->model_name = $model_name;
         $feed->model_id = $obj->id;
         $feed->type = $type;
         $feed->save();
     }
 }

