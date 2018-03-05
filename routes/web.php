<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// create route
Route::get('tutorials', function () {
    return 'tutorials';
});
// Required Parameters
Route::get('tutorials/{name}', function ($name) {
    return $name . ' là tôi';
});
# Regular Expression
Route::get('regularExpression/{name}', function($name) {
    return $name . ' là tôi, max cute';
})->where(['name' => '[a-zA-Z0-9]+']); 





# Named Routes
Route::get('route-01',['as' => 'myRoute-01', function() {
    echo 'route 01';
}]);
Route::get('route-02', function() {
    echo 'route 02';
})->name('myRoute-02');
# http://localhost:..../goiten => http://localhost:..../route01
Route::get('returnRoute', function() {
    return redirect()->route('myRoute-01'); 
    # return redirect()->route('myRoute-02');
});





# Group -> need perfix
Route::group(['prefix' => 'myGroup'], function() {
    # http://localhost:..../myGroup/user01
    Route::get('user01', function() {
        echo 'user 01';
    });

    # http://localhost:..../myGroup/user02
    Route::get('user02', function() {
        echo 'user 02';
    });

    # http://localhost:..../myGroup/user03
    Route::get('user03', function() {
        echo 'user 03';
    });
});





# Controller function -> route
Route::get('getParameters/{name}', 'usersController@getParameters')->where('name', '[a-z]+');
Route::get('postUpController', 'usersController@postUpController');






# form method(post) in resources/views/tutorials.php
Route::get('getUser', function() {
    return view('postUser');
});
# Route::post('postUser', ['as' => 'postOneUser',  'uses' => 'usersController@postUser']);
Route::post('postUser', 'usersController@postUser')->name('postOneUser');





# #####################################################################
# Cookie
# #####################################################################
Route::get('setCookie', 'usersController@setCookie')->name('setCookie');
Route::get('getCookie', 'usersController@getCookie')->name('getCookie');





# #####################################################################
# Upload file
# #####################################################################
Route::get('fileUpload', function () {
    return view('postUpload');
});
Route::post('postUpload', 'usersController@postUpload')->name('postUpload');





# #####################################################################
# output JSON
# #####################################################################
Route::get('getJSON', 'usersController@getJSON')->name('getJSON');





# #####################################################################
# VIEW
# #####################################################################
Route::get('viewTutorial', 'usersController@viewTutorial')->name('viewTutorial');
Route::get('viewTutorial/{user}', 'usersController@viewTutorialUser')->name('viewTutorialUser');
view()->share('userViewShare', 'pinnguyen208');





# #####################################################################
#  Blade template
# #####################################################################
Route::get('bladeTemplate', function () {
    # return view('components.php');       # => return component
    # return view('components.laravel'); # => return component
    return view('layouts.viewMaster'); # => return layout master
});
Route::get('bladeTemplate/{nameView}', 'usersController@bladeTemplate');




# #####################################################################
# DATABASE
# #####################################################################
# Schema https://laravel.com/docs/5.0/schema
# create table
Route::get('db/create-table-test', function () {
    Schema::create('test', function($table) {
        $table->increments('id');
        $table->string('test1', 50)->nullable();
        $table->string('test2', 50);
        $table->string('test3', 50)->default('tình yêu');
        
    });
    echo "created table test";
    
});
Route::get('db/create-table-categories', function () {
    Schema::create('categories', function ($table) {
        $table->increments('id');
        $table->string('categoryName', 50)->nullable();
    });
    echo "created table categories";
});
Route::get('db/create-table-products', function () {
    Schema::create('products', function ($table) {
        $table->increments('id'); # id tự động tăng
        $table->string('name', 50)->nullable();
        $table->string('price', 50)->nullable()->default('$1000');
        $table->text('desciption')->nullable();

        $table->integer('categoryId')->unsigned();
        $table->foreign('categoryId')->references('id')->on('categories');
    });
    echo "created table products";
});



# add colum table
Route::get('db/add-column-table-test', function () {
    Schema::table('test', function($table) {
        $table->string('newcolumn', 50);
    });
    echo "added column newcolumn in table test";
    
});


# rename colum table
Route::get('db/rename-column-table-test', function () {
    Schema::rename('test', 'newtable');
    echo "renamed table";
});



# delete colum table
Route::get('db/del-column-table-newtable', function () {
    Schema::table('test', function($table) {
        $table->dropColumn('newtable');
    });
    echo 'deleled column newtable';
});




# drop table
Route::get('db/drop-table-newtable', function () {
    Schema::dropIfExists('newtable');
    echo "droped table newtable";
});
Route::get('db/drop-table-newtable', function () {
    Schema::drop('newtable');
    echo "droped table newtable";
});



# #####################################################################
# QUERY DB
# https://laravel.com/docs/5.5/queries
# #####################################################################
# DB::table($table)-> bảng {table}
# get()     lấy dữ liệu => trả về array([0],object())
Route::get('db/getData/table/{table}', function ($table) {
    $data = DB::table($table)->
            get();
    # var_dump($data);
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
            echo '"' . $col .'":"' . $value . '",  ';
        }
        echo '<hr/>';
    }
});

# where('id','=',$id)-> Điều kiện id = {id}
Route::get('db/getData/table/{table}/{id}', function ($name,$id) {
    $data = DB::table($name)->
            where('id','=',$id)->
            get();
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
           echo $col . ':' . $value . ', ';
        }
    }
});

# select(['name','email','password'])->  lấy các cột tương ứng
Route::get('db/getData/select/user/{id}', function ($id) {
    $data = DB::table('users')->
            select(['name','email','password'])->
            where('id',$id)->
            get();
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
           echo $col . ':' . $value . ', ';
        }
    }
});

# DB::raw('name as `họ tên`, password as `mật khẩu`')-> query 
Route::get('db/getData/select/renameColumn', function () {
    $data = DB::table('users')->
            select(DB::raw('name as `họ tên`, password as `mật khẩu`'))->
            where('id',10)->get();
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
           echo $col . ':' . $value . ', ';
        }
        echo '<br/>';
    }
});

# orderBy('id','desc')-> sắp xếp ngược 12 11 10 ....
Route::get('db/getData/orderBy', function () {
    $data = DB::table('users')->
            select(DB::raw('id, name, password'))->
            orderBy('id','desc')->
            get();
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
           echo $col . ':' . $value . ', ';
        }
        echo '<br/>';
    }
});

# skip(5)-> bỏ qua 5 phần tử đầu tiên
# take(5)-> lấy 5 phần tử kế tiếp
# orderBy('id','desc')->  sắp xếp ngược bảng
Route::get('db/getData/skip-take', function () {
    $data = DB::table('products')->
            select(DB::raw('id, name, price'))->
            skip(5)-> 
            take(5)->
            orderBy('id','desc')-> # sắp xếp ngược bảng
            get();
    foreach ($data as $row) {
        foreach ($row as $col => $value) {
           echo $col . ':' . $value . ', ';
        }
        echo '<br/>';
    }
});

# where('id',12)->  điều kiện id=12
# update name={name}
Route::get('db/getData/update/{name}', function ($name) {
    DB::table('users')->
        where('id',12)->
        update(['name'=>$name]);
    echo 'updated';
});

# increment('id', 5)->  tăng cột Id 5 giá trị
Route::get('db/getData/increments', function () {
    DB::table('users')->
        increment('id', 5);
    echo 'incremented';
});

# decrement('id', 5)->  giảm cột Id 5 giá trị
Route::get('db/getData/decrements', function () {
    DB::table('users')->
        decrement('id', 5);
    echo 'decremented';
});

# delete()   xóa dữ liệu trong bảng
Route::get('db/getData/delete', function () {
    DB::table('users')->
        where('id', 1)->
        delete();
    echo 'deleted';
});

# xóa tất cả dữ liệu trong bảng
Route::get('db/getData/truncate', function () {
    DB::table('users')->
        delete();
    echo 'truncated';
});

# xóa tất cả dữ liệu trong bảng và reset id = 0
Route::get('db/getData/truncate', function () {
    DB::table('users')->
        truncate();
    echo 'truncated';
});




# #####################################################################
# MODEL
# app/nameModel.php 
# #####################################################################
# $u = new App\User(); new 1 class mới 
# $u->save(); Lưu các giá trị trên vào db
Route::get('db/model/users/insert', function () {
    $u = new App\User();
    $u->name = 'email';
    $u->email = 'email@gmail.com';
    $u->password = '123456';

    $u->save();
    echo 'saved : ' .$u;
});
# $u = App\User()::find(4) -> tìm dữ liệu vs id = 4
Route::get('db/model/users/findId', function () {
    $u = App\User::find(1);
    
    echo 'name : ' .$u->name;
});

# App\User::delete() delete row with id=4
Route::get('db/model/users/delete', function () {
    $u = App\User::find(5);
    $u->delete();
    echo 'deleted '.$u;
});

# App\User::destroy(1) delete row with id = 1 
Route::get('db/model/users/destroy', function () {
    App\User::destroy(1);
    echo 'destroyed';
});

# insert use model
Route::get('db/model/categories/insert/{categoryName}', function ($categoryName) {
    $cat = new App\Models\category();
    $cat->categoryName = $categoryName;
    
    $cat->save();
    echo 'saved';
});

# select * from categories use model
Route::get('db/model/categories/select/all', function () {
    $cat = App\Models\category::all(); # return to object
    echo $cat->toJson();
    # var_dump($cat->toArray());
});

# select * from categories where id={} use model
Route::get('db/model/categories/select/id/{id}', function ($id) {
    $cat = App\Models\category::where('id', $id)->get()->toJson();
    echo $cat;
});

# liên kết products with categories
Route::get('db/model/products/select/id/{id}', function ($id) {
    $catId = App\Models\product::find(10)->getCategory->toJson();
    echo $catId;
});

# liên kết categories with products
Route::get('db/model/categories/select/id/{id}', function ($id) {
    $p = App\Models\category::find($id)->getProducts->toJson();
    echo $p;
});







# #####################################################################
# middleware
# https://laravel.com/docs/5.5/middleware
# #####################################################################

# ->middleware('product') in app/Http/Kernal.php
Route::get('middleware', function () {
    echo 'middlewared';
})->middleware('product')->name('p_Middleware');

Route::get('next/middleware', function () {
    return view('next_middleware');
})->name('next_p_Middleware');



# #####################################################################
# ERROR PAGES
# #####################################################################
# 404
Route::get('404', function () {
    return view('errors\404');
})->name('404');
# 503
Route::get('503', function () {
    return view('errors\503');
})->name('503');


