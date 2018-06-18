<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'isadmin'], function () {
	Route::get('/admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
	});


Route::get('/', [
    'uses' => 'HomeController@getIndex'
]);



							// ALL FOR CATALOG
//Route for cataloge
Route::get('/' , [
	'uses' => 'CatalogeController@getAllCataloge',
]);

Route::get('/catalog/{size_id?}/{typeClothes?}' , [
	'uses' => 'CatalogeController@getAlltypeClothes',
]);



//Route for one
Route::get('/tshirt/one/{id?}', [
	'as' => 'one',
	'uses' => 'CatalogeController@OneItemCataloge',
]);

Route::get('/polo/one/{id?}', [
	'as' => 'one',
	'uses' => 'CatalogeController@OneItemCataloge',
]);
Route::get('/sweatshirt/one/{id?}', [
	'as' => 'one',
	'uses' => 'CatalogeController@OneItemCataloge',
]);

Route::get('/hoodie/one/{id?}', [
	'as' => 'one',
	'uses' => 'CatalogeController@OneItemCataloge',
]);

Route::get('/bomber/one/{id?}', [
	'as' => 'one',
	'uses' => 'CatalogeController@OneItemCataloge',
]);





//							Авторизация/Регистрация

// Вызов страницы регистрации пользователя
Route::get('register', 'AuthController@register');

// Пользователь заполнил форму регистрации и отправил
Route::post('register', 'AuthController@registerProcess');

// Пользователь получил письмо для активации аккаунта со ссылкой сюда
Route::get('activate/{id}/{code}', 'AuthController@activate');

// Вызов страницы авторизации
Route::get('login', 'AuthController@login');

// Пользователь заполнил форму авторизации и отправил
Route::post('login', 'AuthController@loginProcess');

// Выход пользователя из системы
Route::get('logout', 'AuthController@logoutuser');

// Пользователь забыл пароль и запросил сброс пароля. Это начало процесса -
// Страница с запросом E-Mail пользователя
Route::get('reset', 'AuthController@resetOrder');

// Пользователь заполнил и отправил форму с E-Mail в запросе на сброс пароля
Route::post('reset', 'AuthController@resetOrderProcess');

// Пользователю пришло письмо со ссылкой на эту страницу для ввода нового пароля
Route::get('reset/{id}/{code}', 'AuthController@resetComplete');

// Пользователь ввел новый пароль и отправил.
Route::post('reset/{id}/{code}', 'AuthController@resetCompleteProcess');

// Сервисная страничка, показываем после заполнения рег формы, формы сброса и т.
// о том, что письмо отправлено и надо заглянуть в почтовый ящик.
Route::get('wait', 'AuthController@wait');

// Пользователь получил письмо после регистрации в приложении для активации аккаунта со ссылкой
Route::get('activate_app/{id}/{code}', 'AuthController@activateForAppUser');

//Авторизация через соцсети
Route::get('signin', 'AuthController@signin');

//Коллбэк после авторизации через соцсети
Route::get('callback', 'AuthController@callbackSignin');