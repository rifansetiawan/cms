<?php
use App\Post;
use App\User;
//use Symfony\Component\Routing\Route;

//use Symfony\Component\Routing\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/insert', function(){

// 	DB::insert('insert into posts(title, content) value(?,?)',['Laravel title','laravel is the best thing that has happened now']);
// });

// Route::get('/posts', 'PostsController@index');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contact', function () {
//     return "Hi this is contact page";
// });

// Route::get('/about', function () {
//     return "hi this is about page";
// });

// Route::get('/post/{id}', function($id){

// 	return "Hi this is post number ".$id;

// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|*/

// Route::get('admin/post/example', array("as"=>"admin.home", function(){

// 	$url = Route("admin.home");

// 	return "this url is ".$url;


// }));

// Route::get('/read', function(){

// 	$results = DB::select('select * from posts where id=?', [1]);

// 	return var_dump( $results);
// 	// foreach ($results as  $post) {
// 	// 	return $post->title;
// 	// }



// });

// Route::get('/update', function(){
// 	$updated_things = DB::update('update posts set title = "Title has been updated" where id = ?', [1]);

// 	return $updated_things;

// });

// Route::get('/delete', function(){
// 	$delete = DB::delete('delete from posts where id =?', [1]);

	
// 	if ($delete == 1) {
// 		return "your data has been deleted";
// 	}

// });

//INSERT DATA TO DATABASE//

// Route::get('/insert', function(){

// 	DB::insert('insert into posts(title,content) value(?,?)',['PHP is the best','PHP content with laravel is good, its easy']);

// });

// Route::get('/insert', function(){
// 	DB::insert('insert into posts(title, content) value(?,?)',['Judul kedua PHP','Isi dari PHP content harus bagus, bismillah']);
// });

/*Route::resource('posts','PostsController');*/

// Route::get('/contact', 'PostsController@contact');

// Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|*/

// Route::get('/read', function() {

// 	//kita kan mau nampilin posts, nah berarti kita declare variable posts dong yaudah declare dulu:

// 	//$posts//-------------->kaya gini tok , diantara backslash
	
// 	//nah tuh udah udah dideclare , setelah dideclare mau di isi apaan tuh si posts , -
// 	//-isi lah value dari variablenya, isinya dari mana ? yah dari model si Posts
// 	//berarti :
// 	//$posts = Post::all();// udah gini doang..


// 	//setelah udah dideclare kan posts nya , udah dapet nilai nilainya, yaudah tampilin aja pakai foreach

// 	//hasil akhirnya kaya dibawah:

// 	$posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();

// 	return $posts;
// 	// foreach($posts as $post){

// 	// 	return $post->title;

// 	// }

// });


/*
|--------------------------------------------------------------------------
| CARA LAIN ELOQUENT -> FOR YOU INFORMATIONS ONLY, CAN'T BE RUN
|--------------------------------------------------------------------------
|*/


// Route::get('/findmore', function(){

// 	$posts = Post::where('users_count','<',50)->FirstOrFail();

// 	return $posts;


// });

/*
|--------------------------------------------------------------------------
| INSERT/SAVE ELOQUENT 
|--------------------------------------------------------------------------
|*/

// Route::get('/insertE', function(){

// 	$post = Post::find(1);

// 	$post-> title = 'Hai, updated 1';
// 	$post-> content = 'number 1 content of eloquent insert has been updated, pretty cool';

// 	$post -> save();

// });


/*
|--------------------------------------------------------------------------
| CREATE DATA ELOQUENT 
|--------------------------------------------------------------------------
|*/

Route::get('/create', function(){

	Post::create(['title'=>'3_Hai this is Rifan' , 'content'=>'3_Rifan is learning now about laravel, that\'s cool' ]);

});


/*
|--------------------------------------------------------------------------
| UPDATE DATA ELOQUENT 
|--------------------------------------------------------------------------
|*/

// Route::get('/update', function () {
// 	Post::where('id', 1)->where('isAdmin', 0)->update(['title'=>'Hai rifan sayang, semoga ini bener yaaa']);
	
// });

// Route::get('/restoredelete', function () {
// 	$post = Post::withTrashed()->restore();
// });



// Route::get('/readsoftdelete', function () {
// 	$posts = Post::withTrashed('isAdmin',0)->get();

// 	//return $post;
// 	foreach ($posts as $key => $post) {
// 		# code...
// 		return $posts;
// 		return "\n";
// 	}
// });

/*
|--------------------------------------------------------------------------
| BAB 11  Laravel Fundamentals - Database - Eloquent Relationships 
|--------------------------------------------------------------------------
|*/

Route::get('/user/{id}/post', function($id){
	return User::find($id)->post->content;
});

Route::get('post/{id}/user', function ($id) {
	return Post::find($id)->user->name;
});