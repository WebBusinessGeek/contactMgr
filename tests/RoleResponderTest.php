<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 1:41 PM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleResponder;

class RoleResponderTest extends \PHPUnit_Framework_TestCase {

    public function test_responderTrait_sendJsonFormat_method_converts_argument_to_json()
    {
        $roleResponder = new RoleResponder();

        $array = [

            'first' => 'apple',

            'second' => 'pear',

            'third' => 'some other fruit'
        ];

        $array2 = $array;

        $this->assertEquals(true, is_array($array));
        $this->assertJsonStringEqualsJsonString($roleResponder->sendJsonFormat($array),json_encode($array2));
        $this->assertEquals(true, is_array($array));

    }


    public function test_responderTrait_sendErrorMessage_sends_an_error_message_in_json_format()
    {
        $roleResponder = new RoleResponder();

        $array = [
            'error message' => 'This is an error message',

            'code' => 404
        ];

        $this->assertJsonStringEqualsJsonString(json_encode($array),
            $roleResponder->sendErrorMessage('This is an error message', 404));
    }


}
