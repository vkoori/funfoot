<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class uploadController
{

    private $accepted_origins = array("http://localhost", "http://127.0.0.1");
    private $origin = FALSE;

    /**
     * set origin if exist
     */
    public function __construct() {
        if (isset($_SERVER['HTTP_ORIGIN']))
            $this->origin = $_SERVER['HTTP_ORIGIN'];
    }

    /**
     * 
     * 
     * @return 
     */
    public function upload($imageFolder, $temp) {

        if ($this->origin) {
            // same-origin requests won't set an origin. If the origin is set, it must be valid.
            if (in_array($this->origin, $this->accepted_origins)) {
                header('Access-Control-Allow-Origin: ' . $this->origin);
            } else {
                abort(403, "HTTP/1.1 403 Origin Denied");
            }
        }

        // Sanitize input
        if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
            abort(400, "HTTP/1.1 400 Invalid file name.");
        }

        // Verify extension
        if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "jpeg", "png"))) {
            abort(400, "HTTP/1.1 400 Invalid extension.");
        }

        // Check if file already exists
        $img_name = $temp['name'];
        $index = 1;
        while (file_exists($imageFolder.$img_name)) {
            $img_name = $index . "-" . $temp['name'];
            $index ++;
        }

        $check = getimagesize($temp["tmp_name"]);
        if($check[0] > 2048 && $check[1] > 2048){
            abort(400, "HTTP/1.1 400 ابعاد تصویر باید کوچکتر از 2048 در 2048 باشد.");
        }

        // Check file size
        if ($temp["size"] > 2097152) {
            abort(400, "HTTP/1.1 400 حداکثر حجم فایل ".(2097152/1048576)." mb میتواند باشد.");
        }

        // Accept upload if there was no origin, or if it is an accepted origin
        move_uploaded_file($temp['tmp_name'], $imageFolder.$img_name);

        return url('public/assets/images/logo').'/'.$img_name;
        
    }


}