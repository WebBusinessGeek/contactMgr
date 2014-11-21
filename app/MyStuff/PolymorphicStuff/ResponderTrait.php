<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 1:45 PM
 */

namespace App\MyStuff\PolymorphicStuff;


trait ResponderTrait {

    //create response in json format
    public function sendJsonFormat($toBeConverted)
    {
        return json_encode($toBeConverted);
    }

    //send message, error code (passed as argument) in json format
    public function sendErrorMessage($message, $errorCode)
    {
        $errorArray = [
            'error message' => $message,
            'code' => $errorCode
        ];

        return json_encode($errorArray);
    }
}