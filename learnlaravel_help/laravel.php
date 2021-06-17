<?php

//  	//	Routing

		Route::get('about',function(){
			return "hello world";
		});

		// routing with parameter

		Route::get('user/{u_id}',function($id){
			return $id;
		});

		//routing mutiple parameters.............. 

		Route::get('post/{post_id}/comment/{comment_id}',function($post_id,$comment_id){
		return $post_id.$comment_id;
		});

		//optional multiple perameter.....................
		// ist case.....
		Route::get('student/{name?},'function($name=null){
		return $name; 
		});
		//2cnd case......................
		Route::get('student/{name?},'function($name='sonam'){
		return $name; 
		});

		// Routes parameters and regular expression....................
		Route::('manager/{id}/{$sname}',function($id,$name){
			return $id.$name;
		})->where(['id'=>'[0-9]+','name'=>[a-z]+]);

		// with expression in shors

		Route::get('user/{$id}/{$name}',function($id,$name){

		})->whereNumber($id)->whereAlpha("name");

	// redirect route......................
	// by default route:redirect return a 302 status code.
	Route::redirect('/login-success','/dashboard');
	Route::redirect('/here','/there',301);
	Route::permanentRedirect('/here','/there');

	//







?>