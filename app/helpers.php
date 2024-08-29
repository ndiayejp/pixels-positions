<?php



if(!function_exists('assetImage')){
     function assetImage($path,$secure=null){
        return app('url')->asset($path, $secure);
     }

}
if(!function_exists('formatPrice')){
    function formatPrice(int $number){
        return number_format($number, 0, '', ' ');
    }
}
