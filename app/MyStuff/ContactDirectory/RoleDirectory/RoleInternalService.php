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

    
    /**
     * retrieves all roles from the Roles class
     * @return array
     */
    public function retrieveAllRoles()
    {
        return $this->commandController->retrieveAllRoles();
    }

    /**retrieves all roles from the Roles class and converts to json
     * @return string
     */
    public function retrieveAllRolesJson()
    {
        return $this->responder->sendJsonFormat($this->retrieveAllRoles());
    }


    //retrieve a specific role - both json and non json

        //commandvalidator checks argument

        //if bad

            // commandresponder sends message

        //if good

            //commandcontroller calls method

            //commandresponse converts to json

}