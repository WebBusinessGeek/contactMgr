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

    /**Retrieves all roles available on the Role class
     * @return array
     */
    public function retrieveAllRoles()
    {
       return $this->invoker->getAllRoles($this->factory->createNewRolesObject());

    }

    /**
     * Retrieves a specific role available on the Role class
     * @param $key
     * @return mixed
     */
    public function retrieveSpecificRole($key)
    {
        return $this->invoker->getSpecificRole($this->factory->createNewRolesObject(), $key);
    }

}