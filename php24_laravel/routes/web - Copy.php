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
//chay duong dan public/php24
Route::get("php24",function(){
	echo "Nguyen hieu";
});
//chay duong dan public/php24/hello
Route::get("php24/hello",function(){
	echo "Say hello";
});
//chay duong dan public/truyenbien/hello/php24
Route::get('truyenbien/{bien1}/{bien2}',function($bien1,$bien2){
	echo "<h1>$bien1 $bien2</h1>";
});
//group cac url co tag chung la admin
//vd: public/admin/news; public/admin/user
Route::group(array("prefix"=>"admin"),function(){
	Route::get("news",function(){
		echo "<h1>facebook.com.vn</h1>";
	});
	Route::get("user",function(){
		echo "<h1>24h.com.vn</h1>";
	});
});

//chay duong dan public/view1
Route::get('view1',function(){
	return view("php24.hello");
});
//chay duong dan public/view1/truyenbien
Route::get('view1/truyenbien',function(){
	$data["hovaten"] = "Nguyen Trung Hieu";
	$data["lop"] = "php";
	//lệnh extract(array) sẽ biến các key của array thành tên biến
	return view("php24.hello",$data);
});

//chay duong dan public/trangchu
Route::get('trangchu',function(){
	return view("php24.trangchu");
});

//hien thi form
Route::get('form',function(){
	return view("php24.form");
});
//bat form khi nguoi dung an nut submit
Route::post('form',function(){
	//su dung doi tuong Request->get('ten form control') de lay gia tri cua form control
	// $txt = Request::get('txt');
	// echo "<h1>$txt</h1>";
	return view("php24.form");
});

//goi controller theo duong dan public/controller
Route::get('controller','php24Controller@hello');
//truyen bien qua controller theo duong dan /public/controller1/hello/php24
Route::get('controller1/{bien1}/{bien2}','php24Controller@truyenbien');

//truy van csdl
Route::get('truyvan1',function(){
	//lay toan bo ban ghi cua tbl_test
	$data["arr"] = DB::table("tbl_test")->get();
	//duyet cac phan tu cua object
	foreach($data["arr"] as $rows){
		echo "<h1>{$rows->id} {$rows->name}</h1>";
	}
});
Route::get('truyvan2',function(){
	$data["arr"] = DB::table("tbl_test")->where('id','>','3')->get();
	//duyet cac phan tu cua object
	foreach($data["arr"] as $rows){
		echo "<h1>{$rows->id} {$rows->name}</h1>";
	}
});

Route::get('truyvan3',function(){
	//thuc hien truy van binh thuong
	$data["arr"] = DB::select("select * from tbl_test");
	//duyet cac phan tu cua object
	foreach($data["arr"] as $rows){
		echo "<h1>{$rows->id} {$rows->name}</h1>";
	}
});