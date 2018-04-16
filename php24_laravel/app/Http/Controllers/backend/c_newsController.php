<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//khai bao doi tuong DB de thao tac csdl
use DB;
class c_newsController extends Controller
{
    //list news
    public function list_news(){
    	//lay cac ban ghi cua tbl_news
    	$data["arr"] = DB::table("tbl_news")->orderBy("pk_news_id","desc")->paginate(6);
    	return view("backend.list_news",$data);
    }
    //edit news
    public function edit($id){
    	//lay ban ghi co id truyen vao
    	$data["arr"] = DB::table("tbl_news")->where("pk_news_id","=",$id)->first();
    	return view("backend.add_edit_news",$data);
    }
    //do edit news
    public function do_edit(Request $request,$id){
    	$c_name = $request->get('c_name');
    	$fk_category_news_id = $request->get('fk_category_news_id');
    	$c_description = $request->get('c_description');
    	$c_content = $request->get('c_content');
    	$c_hotnews = $request->get('c_hotnews')!=""?1:0;
    	$c_img = "";
    	//update ban ghi co id truyen vao
    	DB::table("tbl_news")->where("pk_news_id","=",$id)->update(array("c_name"=>$c_name,"fk_category_news_id"=>$fk_category_news_id,"c_description"=>$c_description,"c_content"=>$c_content,"c_hotnews"=>$c_hotnews));    	
    	//--------------
    	//kiem tra viec upload file
    	if($request->hasFile('c_img')){
    		//--------------
    		//lay ten anh cu va thuc hien xoa anh
    		$old_img = DB::table("tbl_news")->where("pk_news_id","=",$id)->select("c_img","pk_news_id")->first();
    		if(file_exists('upload/news/'.$old_img->c_img))
    			unlink('upload/news/'.$old_img->c_img);
    		//--------------
    		//lay ten anh
			$c_img = $request->file("c_img")->getClientOriginalName();
			$c_img = time().$c_img;
			//thuc hien viec upload anh
			$request->file("c_img")->move("upload/news",$c_img);
			//update csdl
			DB::table("tbl_news")->where("pk_news_id","=",$id)->update(array("c_img"=>$c_img));
    	}
    	//--------------
    	//quay tro lai trang tin tuc
        //lay bien page tu url
        $page = $request->get('page');
    	return redirect(url('admin/news?page='.$page));
    }
    //add
    public function add(){
    	return view('backend.add_edit_news');
    }
    //do add
    public function do_add(Request $request){
    	$c_name = $request->get('c_name');
    	$fk_category_news_id = $request->get('fk_category_news_id');
    	$c_description = $request->get('c_description');
    	$c_content = $request->get('c_content');
    	$c_hotnews = $request->get('c_hotnews')!=""?1:0;
    	$c_img = "";
    	//kiem tra viec upload file
    	if($request->hasFile('c_img')){
    		//lay ten anh
			$c_img = $request->file("c_img")->getClientOriginalName();
			$c_img = time().$c_img;
			//thuc hien viec upload anh
			$request->file("c_img")->move("upload/news",$c_img);
    	}
    	//add ban ghi vao csdl
    	DB::table("tbl_news")->insert(array("c_name"=>$c_name,"fk_category_news_id"=>$fk_category_news_id,"c_description"=>$c_description,"c_content"=>$c_content,"c_hotnews"=>$c_hotnews,"c_img"=>$c_img));
    	//quay tro lai trang tin tuc
    	return redirect(url('admin/news'));
    }
    public function delete($id){
    	//--------------
		//lay ten anh cu va thuc hien xoa anh
		$old_img = DB::table("tbl_news")->where("pk_news_id","=",$id)->select("c_img","pk_news_id")->first();
		if(file_exists('upload/news/'.$old_img->c_img))
			@unlink('upload/news/'.$old_img->c_img);
		//--------------
		//thuc hien xoa ban ghi khoi csdl
		DB::table("tbl_news")->where("pk_news_id","=",$id)->delete();
		//quay tro lai trang tin tuc
    	return redirect(url('admin/news'));
    }
}
