<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Contracts\Routing\UrlGenerator;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendLinkMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
class ConstCommon {
    const TypeUser = 111;
    const TypeAdmin = 222;
    const TypeSuperAdmin = 333;
    const SUCCESS = "Thành công";
    const ERROR = "Không thành công";
    const INFO = "Không thể thực hiện";
    const AGAIN = "Không thành công, vui lòng thử lại";
    const RULE = "Không có quyền truy cập";

    public static function getnameByTypeCategory($key){
        return array_search($key, ConstCommon::ListTypeCatogory);
    }
     public static function getAllCategory(){
          return Category::all();
     }
     public static function addImageToStorage($file, $name ){
          $file->storeAs('images', $name, 'public');
     }
     public static function getLinkImageToStorage($name){
          return url('storage/images/'.$name);
     }
     public static function delImageToStorage($name){
          return Storage::delete('images/'.$name);
     }
     public static function getCurrentTime(){
        $now = Carbon::now();
        $now->setTimezone('Asia/Ho_Chi_Minh');
        return $now->format('Y-m-d').'-'. $now->format('h-s-i');
     }
     public static function priceUp($count, $price){
        $totalShow = $price;
        for ($i=0; $i < $count; $i++) {
            $totalShow = $totalShow + ($totalShow * 6/100);
        }
        return $totalShow;
     }
     public static function sendMail($email, $content){
        $mail = new SendMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function sendMailLinkPass($email, $content){
        $mail = new SendLinkMail($content);
        return Mail::to($email)->queue($mail);
    }



}
