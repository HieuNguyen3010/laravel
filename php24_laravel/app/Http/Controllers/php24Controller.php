<?php 
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	//khai báo đối tượng DB để thao tác csdl
	use DB;
	class php24Controller extends Controller{
		public function hello(){
			echo "<h1>Hello word</h1>";
		}
		public function truyenbien($bien1,$bien2){
			echo "<h1>$bien1 $bien2</h1>";
		}
	}
 ?>