<?php

namespace App\Services\Validation\Item;

class CategoryValidation{
    public static function validate1($request){
        return $request->validate([
            'name'=>'required|string|unique:categories,name',
            'parent_id'=>'required|numeric',
        ]);
    }

    public static function validate2($request){
        return $request->validate([
            'name'=>'required|string|max:255',
            'parent_id'=>'required|numeric',
        ]);
    }
}