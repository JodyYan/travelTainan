<?php

use App\Travel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/insert-json-file-to-database-table', function(){
	$json = file_get_contents('storage/attractions_zh-tw.json');
	$objs = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );
	foreach ($objs as $obj)  {
		foreach ($obj as $key => $value) {
			// $insertArr[str_slug($key,'_')] = $value;
			$insertArr[$key] = $value;
            if ($key==='services' || $key==='category') {
                $insertArr[$key]=json_encode($value);
            }
		}
		DB::table('travels')->insert($insertArr);
	}
//	dd("Finished adding data in examples table");
});
