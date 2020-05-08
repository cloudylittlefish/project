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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'],function (){
    //登录页面
    Route::get('login','LoginController@index')->name('admin.login.index');
    //登录处理
    Route::post('login','LoginController@login')->name('admin.login.login');
    //后台首页
    Route::get('index','IndexController@index')->name('admin.index.index');
    //退出登录
    Route::get('logout','IndexController@logout')->name('admin.index.logout');

    //管理员管理
    //管理员列表
    Route::get('users','UserController@index')->name('admin.user.index');
    //管理员添加界面
    Route::get('user/add','UserController@add')->name('admin.user.add');
    //管理员添加处理
    Route::post('user/add','UserController@addSave')->name('admin.user.add');
    //管理员修改界面
    Route::get('user/edit/{id}','UserController@edit')->name('admin.user.edit')->where(['id'=>'\d+']);
    //管理员修改处理
    Route::post('user/edit/{id}','UserController@editSave')->name('admin.user.edit')->where(['id'=>'\d+']);
    //管理员删除
    Route::get('user/delete/{id}','UserController@delete')->name('admin.user.delete')->where(['id'=>'\d+']);

    //分类列表
    Route::get('cate','CateController@index')->name('admin.cate.index');
    //分类添加界面
    Route::get('cate/add','CateController@add')->name('admin.cate.add');
    //分类添加处理
    Route::post('cate/add','CateController@addSave')->name('admin.cate.add');
    //分类修改界面
    Route::get('cate/edit/{id}','CateController@edit')->name('admin.cate.edit')->where(['id'=>'\d+']);
    //分类修改处理
    Route::post('cate/edit/{id}','CateController@editSave')->name('admin.cate.edit')->where(['id'=>'\d+']);
    //分类删除
    Route::get('cate/delete/{id}','CateController@delete')->name('admin.cate.delete')->where(['id'=>'\d+']);

    //文章列表
    Route::get('articles','ArticleController@index')->name('admin.article.index');
    //文章添加界面
    Route::get('article/add','ArticleController@add')->name('admin.article.add');
    //文章添加处理
    Route::post('article/add','ArticleController@addSave')->name('admin.article.add');
    //文章修改界面
    Route::get('article/edit/{id}','ArticleController@edit')->name('admin.article.edit')->where(['id'=>'\d+']);
    //文章修改处理
    Route::post('article/edit/{id}','ArticleController@editSave')->name('admin.article.edit')->where(['id'=>'\d+']);
    //文章删除
    Route::get('article/delete/{id}','ArticleController@delete')->name('admin.article.delete')->where(['id'=>'\d+']);

    //文章回收站
    Route::get('restored','ArticleController@restored')->name('admin.article.restored');
    //文章恢复
    Route::get('recovery/{id}','ArticleController@recovery')->name('admin.article.recovery')->where(['id'=>'\d+']);;
    //文章永久删除
    Route::get('del_forever/{id}','ArticleController@del_forever')->name('admin.article.del_forever')->where(['id'=>'\d+']);;
});

Route::group(['namespace'=>'Index'],function (){
    Route::get('/','IndexController@index')->name('index.index.index');
    Route::get('cate/{id}','CateController@index')->name('index.cate.index')->where(['id'=>'\d+']);
    Route::get('article/{id}','ArticleController@index')->name('index.article.index')->where(['id'=>'\d+']);
    Route::get('search','ArticleController@search')->name('index.article.search');
});
