<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:23 PM
 */

namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleCommandController {

    public $invoker;

    public $factory;

    public $repository;

    function __construct()
    {
        $this->invoker = new RoleInvoker();
        $this->factory = new RoleFactory();
        $this->repository = new RoleRepository();
    }



    //retrieve all

        //factory create new - done

        //invoker to return all - done

    public function retrieveAllRoles()
    {
       return $this->invoker->getAllRoles($this->factory->createNewRolesObject());

    }

    //retrieve single

        //facotry create new - done

        //invoker to return specific by key - done


}