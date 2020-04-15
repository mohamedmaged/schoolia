<?php
namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;



/**
 * @safwat
 * handle the error in request Api object
 */
trait ErrorRequestApi
{
    
    protected function failedValidation(Validator $validator)
    {
        
      
        // check if requect need response json
        if(request()->header('Accept') == "application/json" ){
            throw new HttpResponseException(
                response()->json(
               [
                 "key"=>0,
                 "errors"=>$validator->errors(),
               ] ,200) //status 422
           );
        }else{
            parent::failedValidation($validator);
        }
        
        
    }
}

