<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:22 PM
 */

namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleInvoker {

    /**
     * Gets all roles from roles property on Roles class
     * @param Roles $roles
     * @return array
     */
    public function getAllRoles(Roles $roles)
    {
        return $roles->roles;
    }

    /**
     * Gets a specific role from roles property on Roles class
     * @param Roles $roles
     * @param $key
     * @return mixed
     */
    public function getSpecificRole(Roles $roles, $key)
    {
        return $roles->roles[--$key];
    }

}