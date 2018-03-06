<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class usersController extends Controller
{
    # get Parameters
    public function getParameters($name)
    {
        return 'controller of ' . $name;
    }



    # nhập tham số truyền lên
    public function postUpController(Request $request)
    {
        # trả về tên của request 
        # return $request->path();

        # trả về url đầy đủ
        echo $request->url() . '<br/>'; 
        
        # kiểm tra url có chứa admin/ hay không?
        if($request->is('request*')) {
            echo '<h3>đường dẩn có chữ request</h3>';
        } else {
            echo '<h3>headers :' .$request .'</h3>';
        }
        
        # kiểm tra method truyền lên
        if($request->isMethod('get')) {
            echo "<h1>is method GET</h1>";
        }
    }



    # post user
    public function postUser(Request $req)
    {
        /**
         * kiễm tra tham số name có tồn tại hay không?
         * $req->has('name'); 
         * 
         * nhập dữ liệu từ thẻ <input name="id" />
         * $req->input('id');
         * 
         * nhận dữ liệu dưới dạng mãng
         * $req->input('products.0.name');
         * 
         * nhận dữ liệu JSON dạng mãng
         * $req->input('user.name');
         * 
         * nhập hết tất cả dữ liệu lưu dạng mãng
         * $req->all();
         * 
         * chỉ nhận tham số age
         * $req->only('age');
         * 
         * nhập hết tất cả các tham số trừ age
         * $req->except('age');
         * 
         */
        echo $req->username;
    }




    # COOKIE
    public function setCookie() {
        $res = new Response();
        $res->withCookie(
            'username', # tên cookie
            'DFGDJGM4WFSDMWOYDVNSET4IYWET93RSAFW4YMW4Y5UWFE5U7I73T', # giá trị
            1 # minutis - phút
        );
        echo "Cookie is created";
        return $res;
    }
    public function getCookie(Request $req) {
        return $req->cookie('username');
    }




    # Upload file
    public function postUpload(Request $req) {
        # isValid('myFile')                    => kiễm tra upload file có thành công hay ko?
        # getClientMimeType('myFile')          => trả về kiểu file (image/png)
        # getClientOriginalExtension('myFile') => trả về đuôi của file (png)
        # getClientOriginalName('myFile')      => trả về tên file (taolaobidao.png)
        # getClientSize('myFile')              => trả về dung lượng file, tính theo (byte)
 
        // kiễm tra file có tồn tại?
        if($req->hasFile('fileUpload')) {
            $file = $req->file('fileUpload');

            if($file->getClientOriginalExtension('fileUpload') == 'png' || $file->getClientOriginalExtension('fileUpload') == 'jpg' )
            {
                $path = $file->getClientMimeType('fileUpload');
                $fileName = $file->getClientOriginalName();
                # $fileName = "img";
    
                $file->move(
                    $path,     # nơi lưu
                    $fileName # tên file lưu
                );

                echo "Ảnh đã được lưu trong thư mục : " 
                    . $file->getClientMimeType('fileUpload') 
                    . " | Size : " . $file->getClientSize('fileUpload') . " byte";
            }
            else 
            {
                echo "Vui lòng chọn ảnh .PNG hoặc .JPG";
            }
            
        }
    }




    # GET JSON
    public function getJSON() {
        $array = array('name' => ['laravel','php','.net', 'java','html']);
        return response()->json($array);
    }




    # VIEW
    public function viewTutorial() {
        return view('viewTutorial');
        # return view('pages.viewTutorial');
    }
    public function viewTutorialUser($value) {
        # truyền sang viewTutorial giá trị $value với tên user
        return view ('viewTutorial',['user'=>$value]);
    }





    # blade Template
    public function bladeTemplate($nameView) {
        $value ='<b>' . $nameView . "</b>" ;
        if($nameView == "laravel") {
            return view('components\laravel',['tutorials'=>$value]);
        } elseif($nameView == "php") {
            return view('components\php',['tutorials'=>$value]);
        }
    }




}
