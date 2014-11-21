<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:22 PM
 */


namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleFactory {


    /**
     * Creates a new instance of the Roles class
     * @return Roles
     */
    public function createNewRolesObject()
    {
        return new Roles();
    }


}