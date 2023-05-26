<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/


Route::prefix('authentication')->name('authentication.')->middleware('isLogin')->group(function (){
    Route::get('login', 'App\Http\Controllers\Backend\Authentication@login')->name('login');
    Route::post('login', 'App\Http\Controllers\Backend\Authentication@loginPost')->name('login.post');
    Route::get('register', 'App\Http\Controllers\Backend\Authentication@register')->name('register');
    Route::post('register', 'App\Http\Controllers\Backend\Authentication@registerPost')->name('register.post');
    Route::get('forgotpassword', 'App\Http\Controllers\Backend\Authentication@forgotpassword')->name('forgotpassword');
    Route::post('forgotpassword', 'App\Http\Controllers\Backend\Authentication@forgotpasswordPost')->name('forgotpassword.post');
});

Route::prefix('admin')->name('admin.')->middleware('isBackend')->group(function (){
    Route::get('dashboard', 'App\Http\Controllers\Backend\Dashboard@index')->name('dashboard');

    /** POSTS **/
    Route::get('/post/{id}/published', 'App\Http\Controllers\Backend\PostController@published')->name('post.published');
    Route::get('/post/{id}/destroy', 'App\Http\Controllers\Backend\PostController@destroy')->name('post.destroy');
    Route::get('/post/{id}/delete', 'App\Http\Controllers\Backend\PostController@delete')->name('post.delete');
    Route::get('/post/{id}/harddelete', 'App\Http\Controllers\Backend\PostController@harddelete')->name('post.harddelete');
    Route::get('/post/{id}/undelete', 'App\Http\Controllers\Backend\PostController@undelete')->name('post.undelete');
    Route::get('/posts/trashed', 'App\Http\Controllers\Backend\PostController@trashed')->name('post.trashed');
    Route::resource('posts','App\Http\Controllers\Backend\PostController');

    /** CATEGORİES **/
    Route::get('/category/{id}/destroy', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
    Route::get('/category/{id}/delete', 'App\Http\Controllers\Backend\CategoryController@delete')->name('category.delete');
    Route::get('/category/{id}/harddelete', 'App\Http\Controllers\Backend\CategoryController@harddelete')->name('category.harddelete');
    Route::get('/category/{id}/undelete', 'App\Http\Controllers\Backend\CategoryController@undelete')->name('category.undelete');
    Route::get('/categories/trashed', 'App\Http\Controllers\Backend\CategoryController@trashed')->name('category.trashed');
    Route::resource('categories','App\Http\Controllers\Backend\CategoryController');

    /** NOTIFICATIONS **/
    Route::get('/notification/{id}/destroy', 'App\Http\Controllers\Backend\NotificationController@destroy')->name('notification.destroy');
    Route::get('/notification/{id}/delete', 'App\Http\Controllers\Backend\NotificationController@delete')->name('notification.delete');
    Route::get('/notification/{id}/harddelete', 'App\Http\Controllers\Backend\NotificationController@harddelete')->name('notification.harddelete');
    Route::get('/notification/{id}/undelete', 'App\Http\Controllers\Backend\NotificationController@undelete')->name('notification.undelete');
    Route::get('/notifications/trashed', 'App\Http\Controllers\Backend\NotificationController@trashed')->name('notification.trashed');
    Route::resource('notifications','App\Http\Controllers\Backend\NotificationController');

    /** CONTACTS **/
    Route::get('/contact/{mail}/sendMail', 'App\Http\Controllers\Backend\ContactController@sendMail')->name('contact.sendMail');
    Route::get('/contact/{id}/destroy', 'App\Http\Controllers\Backend\ContactController@destroy')->name('contact.destroy');
    Route::get('/contact/{id}/delete', 'App\Http\Controllers\Backend\ContactController@delete')->name('contact.delete');
    Route::get('/contact/{id}/harddelete', 'App\Http\Controllers\Backend\ContactController@harddelete')->name('contact.harddelete');
    Route::get('/contact/{id}/undelete', 'App\Http\Controllers\Backend\ContactController@undelete')->name('contact.undelete');
    Route::get('/contact/trashed', 'App\Http\Controllers\Backend\ContactController@trashed')->name('contact.trashed');
    Route::resource('contacts','App\Http\Controllers\Backend\ContactController');

    /** PAGES **/
    Route::get('/page/{id}/published', 'App\Http\Controllers\Backend\PageController@published')->name('page.published');
    Route::get('/page/{id}/orderUp', 'App\Http\Controllers\Backend\PageController@orderUp')->name('page.orderUp');
    Route::get('/page/{id}/orderDown', 'App\Http\Controllers\Backend\PageController@orderDown')->name('page.orderDown');
    Route::get('/page/{id}/destroy', 'App\Http\Controllers\Backend\PageController@destroy')->name('page.destroy');
    Route::get('/page/{id}/delete', 'App\Http\Controllers\Backend\PageController@delete')->name('page.delete');
    Route::get('/page/{id}/harddelete', 'App\Http\Controllers\Backend\PageController@harddelete')->name('page.harddelete');
    Route::get('/page/{id}/undelete', 'App\Http\Controllers\Backend\PageController@undelete')->name('page.undelete');
    Route::get('/page/trashed', 'App\Http\Controllers\Backend\PageController@trashed')->name('page.trashed');
    Route::resource('pages','App\Http\Controllers\Backend\PageController');

    /** USERS **/
    Route::get('/user/{id}/status', 'App\Http\Controllers\Backend\UserController@status')->name('user.status');
    Route::get('/user/{id}/destroy', 'App\Http\Controllers\Backend\UserController@destroy')->name('user.destroy');
    Route::get('/user/{id}/delete', 'App\Http\Controllers\Backend\UserController@delete')->name('user.delete');
    Route::get('/user/{id}/harddelete', 'App\Http\Controllers\Backend\UserController@harddelete')->name('user.harddelete');
    Route::get('/user/{id}/undelete', 'App\Http\Controllers\Backend\UserController@undelete')->name('user.undelete');
    Route::get('/user/trashed', 'App\Http\Controllers\Backend\UserController@trashed')->name('user.trashed');
    Route::resource('users','App\Http\Controllers\Backend\UserController');

    /** FCM USERS **/
    Route::get('/fcmuser/{id}/destroy', 'App\Http\Controllers\Backend\FCMUserController@destroy')->name('fcmuser.destroy');
    Route::get('/fcmuser/{id}/delete', 'App\Http\Controllers\Backend\FCMUserController@delete')->name('fcmuser.delete');
    Route::get('/fcmuser/{id}/harddelete', 'App\Http\Controllers\Backend\FCMUserController@harddelete')->name('fcmuser.harddelete');
    Route::get('/fcmuser/{id}/undelete', 'App\Http\Controllers\Backend\FCMUserController@undelete')->name('fcmuser.undelete');
    Route::get('/fcmuser/trashed', 'App\Http\Controllers\Backend\FCMUserController@trashed')->name('fcmuser.trashed');
    Route::resource('fcmusers','App\Http\Controllers\Backend\FCMUserController');

    /** ROLES **/
    Route::get('/role/{id}/destroy', 'App\Http\Controllers\Backend\RoleController@destroy')->name('role.destroy');
    Route::get('/role/{id}/delete', 'App\Http\Controllers\Backend\RoleController@delete')->name('role.delete');
    Route::get('/role/{id}/harddelete', 'App\Http\Controllers\Backend\RoleController@harddelete')->name('role.harddelete');
    Route::get('/role/{id}/undelete', 'App\Http\Controllers\Backend\RoleController@undelete')->name('role.undelete');
    Route::get('/role/trashed', 'App\Http\Controllers\Backend\RoleController@trashed')->name('role.trashed');
    Route::resource('roles','App\Http\Controllers\Backend\RoleController');
    Route::resource('roles','App\Http\Controllers\Backend\RoleController');

    Route::get('logout', 'App\Http\Controllers\Backend\Authentication@logout')->name('logout');
});







/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'App\Http\Controllers\Frontend\Homepage@index')->name('homepage');
Route::get('/blog/pages/', 'App\Http\Controllers\Frontend\Blogpage@index');
Route::get('/blog/sayfalar/', 'App\Http\Controllers\Frontend\Blogpage@index');

Route::get('/about-us', 'App\Http\Controllers\Frontend\Homepage@aboutpage')->name('about');
Route::get('/hakkimizda', 'App\Http\Controllers\Frontend\Homepage@aboutpage')->name('about');

Route::get('/Privacy Policy', 'App\Http\Controllers\Frontend\Homepage@termspage')->name('terms');
Route::get('/gizlilik-politikası', 'App\Http\Controllers\Frontend\Homepage@termspage')->name('terms');

Route::get('/contact', 'App\Http\Controllers\Frontend\Homepage@contactpage')->name('contact');
Route::get('/iletisim', 'App\Http\Controllers\Frontend\Homepage@contactpage')->name('contact');
Route::post('/contact', 'App\Http\Controllers\Frontend\Homepage@contactpagepost')->name('contact.post');
Route::post('/iletisim', 'App\Http\Controllers\Frontend\Homepage@contactpagepost')->name('contact.post');

Route::get('/blog', 'App\Http\Controllers\Frontend\Blogpage@index')->name('blogpage');
Route::get('/blog/{cSlug}', 'App\Http\Controllers\Frontend\Blogpage@category')->name('category');
Route::get('/blog/{cSlug}/pages/', 'App\Http\Controllers\Frontend\Blogpage@category');
Route::get('/blog/{cSlug}/{pSlug}', 'App\Http\Controllers\Frontend\Blogpage@blogpage')->name('blog.page');
Route::get('/{pSlug}', 'App\Http\Controllers\Frontend\Blogpage@blogpages');
Route::get('/{page}', 'App\Http\Controllers\Frontend\Homepage@page')->name('page');

