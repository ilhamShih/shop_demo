<?php
	namespace App\Http\Controllers;
	use Session;
	use Illuminate\Support\Facades\DB;
	use App\Http\Controllers\Controller;
	
	class product_controller extends Controller
	{
		public function product()

		{
		     $users = DB::table('tes')->select('id','name','img','price')->get();
			// $users = DB::table('tes')->select('id','name','img','price')->where('id',' 2' )->get();
			   return view('product.product',['tes'=>$users]);
			
		}
}