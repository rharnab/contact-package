<?php 

/*Route::get('contact', function(){

return view('contact::contact');

});

Route::post('send', function(){

	echo "sdfsdfdf";
});*/

Route::group(['namespace'=>'Ramjan\Contact\Http\Controllers'], function(){

	Route::get('contact', 'ContactController@index');
	Route::post('send', 'ContactController@send');

});

 ?>