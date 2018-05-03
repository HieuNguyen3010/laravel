<!-- load layout de su dung -->
@extends('backend.layout')
<!-- khai bao block section de do du lieu vao tag controller trong layout -->
@section('controller')
<?php 
	$act = Request::get("act");
	switch($act){
		case "edit":
			$id = Request::get("id");
			$form_action = url('admin/category?act=edit&id='.$id);
			//lay ban ghi co id truyen vao
			$obj = DB::table("tbl_category_news")->where("pk_category_news_id","=",$id)->first();
			//hoac
			//$obj = DB::select("select * from tbl_category_news wher pk_category_news_id=$id");
		break;
		case "add":
			$form_action = url('admin/category?act=add');
		break;
	}
 ?>
 @if($act == "edit" || $act== "add")
 <script type="text/javascript">
 	$(window).on('load',function(){
 		$('#myModal').modal('show');
 	});
 </script>
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm - sửa danh mục</h4>
      </div>
      <div class="modal-body">
        <!-- body -->
        <form method="post" action="{{ $form_action }}">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<div class="form-group">
        		<!-- row -->
        		<div class="row">
	        		<div class="col-md-2">Tên danh mục</div>
	        		<div class="col-md-10"><input type="text" name="c_name" value="{{ isset($obj->c_name)?$obj->c_name:'' }}" required class="form-control"></div>
        		</div>
        		<!--end row -->
        		<!-- row -->
        		<div class="row">
	        		<div class="col-md-2"></div>
	        		<div class="col-md-10"><input type="submit" class="btn btn-primary" value="{{ isset($act)&&$act=='add'?'Add':'Edit' }}"> <input type="Reset" class="btn btn-danger" value="Reset"></div>
        		</div>
        		<!--end row -->
        	</div>
        </form>
        <!--end body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 @endif
 <div class="col-md-6 col-xs-offset-3">
 	<div style="margin-bottom: 5px;">
 		<a href="{{ url('admin/category?act=add') }}" class="btn btn-primary">Add</a>
 	</div>
 </div>
<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Category news</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Chức năng</th>
				</tr>
				@foreach($arr as $rows)
				<tr>
					<td>{{ $rows->c_name }}</td>
					<td style="text-align:center">
						<a href="{{ url('admin/category/?act=edit&id='.$rows->pk_category_news_id) }}">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/category/delete/'.$rows->pk_category_news_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection