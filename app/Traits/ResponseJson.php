<?php

namespace App\Traits;



/**
 *   @safwat
 *   response json function
 */
trait ResponseJson
{

     /**
     *  @param  Collection | array  
     *  @return Illuminate\Http\JsonResponse
    */

    private function responseSucessData( $data){
    
        return response()->json(
        [
          "key"=>1,
          "data"=>$data,
        ] ,200);
        
    }

    /**
     *  @param  array  
     *  @return Illuminate\Http\JsonResponse
    */
    private function responseError(array $errors){
        return response()->json(
            [
              "key"=>0,
              "errors"=>$errors,
            ] ,200);
    }


    /**
     *  @param  string  
     *  @return Illuminate\Http\JsonResponse
    */
    private function responseSucessMsg(string $msg){
        return response()->json(
            [
              "key"=>1,
              "msg"=>$msg,
            ] ,200);
    }


    /**
     *  @param  string  
     *  @return Illuminate\Http\JsonResponse
    */
    private function responseErrorMsg(string $msg){
        return response()->json(
            [
              "key"=>0,
              "msg"=>$msg,
            ] ,200);
    }
}
