<?php

use Illuminate\Http\Request;


Route::get('/t', function (Request $request) {

    /**
        Audit Implementation
        Audit Transformation
        Attribute Modifiers
        Audit Presentation
     */

    return \App\Models\Post::all();


    dd($request->all());
});
