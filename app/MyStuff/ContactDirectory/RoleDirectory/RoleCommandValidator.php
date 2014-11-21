<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:23 PM
 */

namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleCommandValidator {

    public $invoker;

    public $factory;

    public $repository;

    function __construct()
    {
        $this->invoker = new RoleInvoker();
        $this->factory = new RoleFactory();
        $this->repository = new RoleRepository();
    }


    /**
     * checks if key is in roles property on role object
     * @param $key
     * @return bool
     */
    public function acceptableRoleKey($key)
    {
       return array_key_exists($key,$this->factory->createNewRolesObject()->roles);
    }
}