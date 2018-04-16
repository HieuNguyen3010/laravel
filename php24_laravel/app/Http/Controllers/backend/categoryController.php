<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//khai bao doi tuong DB de thao tac csdl
use DB;

class categoryController extends Controller
{
    //hien thi danh sach danh muc tin tuc
    public function list_category(){
    	//lay toan bo ban ghi cua table tbl_category_news
    	$data["arr"] = DB::table("tbl_category_news")->orderBy("pk_category_news_id","desc")->paginate(4);
    	//goi view,truyen du lieu ra view
    	return view("backend.list_category_news",$data);
    }
    //do add edit
    public function add_edit_category(Request $request){
    	//lay bien act de phan biet la chuc nang add hay la edit
    	$act = $request->get("act");
    	switch($act){
    		case "edit":
    			$id = $request->get("id");
    			$c_name = $request->get("c_name");
    			//update ban ghi co id truyen vao
    			DB::table("tbl_category_news")->where("pk_category_news_id","=",$id)->update(array("c_name"=>$c_name));
    			//hoac update bang cach thuc hien cau lenh sau
    			//DB::update("update tbl_category_news set c_name=$c_name where pk_category_news_id=$id");
    			//di chuyen den trang category (de bo ?act=...)
    			return redirect(urldecode("admin/category"));
    		break;
    		case "add": 
    			$c_name = $request->get("c_name");
    			//insert ban ghi 
    			DB::table("tbl_category_news")->insert(array("c_name"=>$c_name));
    			//hoac insert bang cach thuc hien cau lenh sau
    			//DB::insert("insert into tbl_category_news(c_name) values ('$c_name')");
    			//di chuyen den trang category (de bo ?act=...)
    			return redirect(urldecode("admin/category"));
    	}
    }
    public function delete($id){
    	//xoa ban ghi co id truyen vao
    	DB::table('tbl_category_news')->where("pk_category_news_id","=",$id)->delete();
    	//di chuyen den trang category (de bo ?act=...)
    	return redirect(urldecode("admin/category"));
    }
}
