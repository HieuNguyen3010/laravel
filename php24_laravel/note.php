<?php 
/*
- Laravel là php framework
- Laravel hoạt động theo mô hình MVC
	- Model: nằm tại đường dẫn App\file-model
	- Controller: nằm tại đường dẫn App\Http\file-controller
		- Cấu trúc của file controller: tenfileController.php
	- View nằm tại đường dẫn resources\views\file-view
		- Cấu trúc của file view: tenfileview.blade.php
- Laravel điều phối các trang thông qua url, trang điều phối url nằm tại đường dẫn: route\web.php
- Cấu trúc điều phối url (điều phối qua file web.php)
	- Điều khiển url qua các thành phần
		Route::get('duong dan',function(){});// dùng cho phương thức get
		Route::post('duong dan',function(){});//dùng cho phương thức post
		Route::any('duong dan',function(){});//dùng cho cả get và post
	- Truyền biến lên url
		Route::get('duongdan/{bien1}/{bien2}',function($bien1,$bien2){})
	- Nhóm các đường dẫn có tag chung
		Route::group(array('prefix'=>"tagchung"),function(){
			Route::get('duongdansautagchung',function({}));
		}); 
	- Gọi view: 
		- sử dụng cú pháp: return view("tenview")
		- Nếu file view nằm trong 1 thư mục, sử dụng cú pháp: return view("tenthumuc.tenview")
	- Truyền biến ra view
		- Tất cả các biến phải đặt trong array, có nghĩa là tên biến là tên phần tử của array
		- Sử dụng cú pháp: return view("tenview",array)
	- Một số cú pháp trong blade engine (ở file view)
		- {{ "hello" }} -> xuất chữ hello lên màn hình. Cách xuất này sẽ biến một số ký tự html thành ký tự html đặc biệt. VD: < sẽ thành &gt; . > sẽ thành &lt;
		- {!! "hello" !!} -> xuất chữ hello lên màn hình. Xuất ra các ký tự html nguyên mẫu
		- sử dụng lệnh if
			@if(mệnh đề)
			các lệnh + html
			@endif
		- sử dụng vòng lặp for
			@for(bắt đầu; kết thúc; giátrịđểkếtthúc)
			các lệnh + html
			@endfor
		- sử dụng lệnh foreach
			@foreach(array as $key=>$value)
			các lệnh + html
			@endforeach
	- form trang laravel
		- trong thẻ form, bắt buộc phải có thẻ token theo cú pháp: <input type="hidden" name="_token" value="{{ csrf_token() }}">
	- controller: 
		- Cấu trúc file controller: tenfileController.php
		- tenfile phải trùng với tên class
		- Từ file web.php, gọi controller bằng cú pháp:
		Route::get('duong dan ao',tencontroller@tenham)
	- Thao tác với csdl
		- File lưu thông tin kết nối csdl: .env
		- Từ cmd, chạy dòng lệnh: php artisan migrate . Khi đó chương trình sẽ tự động tạo 2 bảng: users và migration
		- Cấu trúc truy vấn:
		DB::table('tenbang')
			->where(tencot,'<>=',giatri) -> sử dụng điều kiện where
				->get() -> lấy toàn bộ bản ghi
				->paginate(so phan tu tren 1 trang) -> phân trang
				->first() -> lấy một bản ghi
				->orderBy(tencot,'asc/desc') -> sắp xếp theo thứ tự tăng/giảm dần
					->limit() -> lấy bao nhiêu bản ghi
		DB::select("cau truy van sql") -> sẽ trả về kết quả như bình thường
		- insert dữ liệu
		DB::table('tenbang')->insert(array(tencot1=>giatri1,tencot2=>giatri2));
		DB::insert("insert into table ....");
		- update dữ liệu
		DB::table('tenbang')->where()->update(array(tencot1=>giatri1,tencot2=>giatri2));
		DB::update("update table ....");
		- delete dữ liệu
		DB::table('tenban')->where->delete();
		DB::delete("delete from table ....");
//--------------
	- Trong laravel, muốn sử dụng chức năng Authennication (xác thực đăng nhập) thì cần chạy câu lệnh sau ở cmd: php artisan make:auth
	- Tạo controller trong laravel bằng lệnh cmd: php artisan make:controller tenController
	- Tạo model trong laravel bằng lệnh cmd: php artisan make:model tenmodel
*/
 ?>
 