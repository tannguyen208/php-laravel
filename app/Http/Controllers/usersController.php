<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    # cmd> php artisan make:controller usersController --resource


    public function welcome() {
        echo 'controller of mr.pin';
        # route in routes/web.php name('nameRoute');
        return redirect()->route('welcome');
    }

    public function post(Request $req)
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



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        return 'controller of ' . $name;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
