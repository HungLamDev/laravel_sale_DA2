<?php

namespace App\Utilities;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;



class Common
{
     public static function uploadFile($file, $path)
     {

          $file_name_original = $file->getClientOriginalName();
          $extention = $file->getClientOriginalExtension();
          $file_name_without_extention = Str::replaceLast('.' . $extention, '', $file_name_original);

          $str_time_now = Carbon::now()->format('ynd_his');
          $file_name = Str::slug($file_name_without_extention) . '_' . uniqid() . '_' . $str_time_now . '.' . $extention;
          $file->move($path, $file_name);
          return $file_name;
     }
}
