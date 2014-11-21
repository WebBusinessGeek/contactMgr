<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:23 PM
 */

namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleInternalService {

    public $commandController;

    public $responder;

    public $commandValidator;

    function __construct()
    {
        $this->commandController = new RoleCommandController();
        $this->responder = new RoleResponder();
        $this->commandValidator = new RoleCommandValidator();
    }



    //retrieve all roles - both json and non json

        //commandcontroller calls method

        //commandresponse converts them json


    //retrieve a specific role - both json and non json

        //commandvalidator checks argument

        //if bad

            // commandresponder sends message

        //if good

            //commandcontroller calls method

            //commandresponse converts to json

}