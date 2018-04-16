<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//muốn sử dụng đối tượng nào trong controller thì phải khai báo đối tượng đó bằng từ khóa user
//khai báo đối tượng DB để thao tác csdl
use DB;
//khai báo đối tượng mã hóa password
use Hash;
class userController extends Controller
{
    //list user
    public function list_user(){
    	//lay toan bo ban ghi trong table users, có phân 4 bản ghi trên một trang
    	$data["arr"] = DB::table('users')->orderBy('id','asc')->paginate(4);
    	//goi view, truyen du lieu ra view
    	return view('backend.list_user',$data);
    }
    //edit user
    public function edit($id){
    	//lay 1 ban ghi tuong ung voi id truyen vao
    	$data["arr"] = DB::table('users')->where('id','=',$id)->first();
    	//goi view va truyen du lieu ra view
    	return view('backend.add_edit_user',$data);
    }	
    //do edit user
    public function do_edit(Request $request,$id){
    	$name = $request->name; //name la ten cua form control
    	$password = $request->password;
    	//update ban ghi co id truyen vao
    	DB::table('users')->where('id','=',$id)->update(array("name"=>$name));
    	//neu password khong rong thi update password
    	if($password != ""){
    		$password = Hash::make($password);
    		DB::table('users')->where('id','=',$id)->update(array("password"=>$password));
    	}
    	//quay tro ve trang list user
    	return redirect(url('admin/user'));
    }
    //add user
    public function add(){
    	//goi view va truyen du lieu ra view
    	return view('backend.add_edit_user');
    }
    //do add user
    public function do_add(Request $request){
    	$name = $request->name; //name la ten cua form control
    	$email = $request->email;
    	$password = $request->password;
    	$password = Hash::make($password);
    	//insert ban ghi vao table
    	DB::table('users')->insert(array("name"=>$name,"email"=>$email,"password"=>$password));
    	//quay tro ve trang list user
    	return redirect(url('admin/user'));
    }
    //delete user
    public function delete($id){
    	//xoa ban ghi co id truyen vao
    	DB::table('users')->where('id','=',$id)->delete();
    	//quay tro ve trang list user
    	return redirect(url('admin/user'));
    }
}
