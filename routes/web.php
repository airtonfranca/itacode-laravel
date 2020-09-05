<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'frontController@index')->middleware('visita');

Route::get('admin', 'adminController@admin');

Route::get('setups', 'adminController@setups');

Route::post('addConfg', 'crudController@insertData');

Route::get('categorias', 'adminController@categorias');

Route::post('addCategoria', 'crudController@insertData');

Route::get('deletarCategoria/{id}', 'adminController@deletarCategoria');

Route::get('editarCategoria/{id}', 'adminController@editarCategoria');

Route::post('updateCategoria/{id}', 'crudController@updateData');

Route::get('novo-post', 'adminController@novoPost');

Route::post('addPost', 'crudController@insertData');

Route::get('all-posts', 'adminController@allPosts');

Route::get('editPost/{id}', 'adminController@editPost');

Route::post('updatePost/{id}', 'crudController@updateData');

Route::get('deletarPost/{id}', 'adminController@deletarPost');

Route::get('novo-portifolio', 'adminController@novoPortifolio');

Route::post('addPortifolio', 'crudController@insertData');

Route::get('all-portifolio', 'adminController@allPortifolio');

Route::get('editPortifolio/{id}', 'adminController@editPortifolio');

Route::post('updatePortifolio/{id}', 'crudController@updateData');

Route::get('deletarPortifolio/{id}', 'adminController@deletarPortifolio');
