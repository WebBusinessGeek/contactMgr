<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:22 PM
 */

namespace App\MyStuff\ContactDirectory\RoleDirectory;

class RoleInvoker {

    public function getAllRoles(Roles $roles)
    {
        return $roles->roles;
    }

    public function getSpecificRole(Roles $roles, $key)
    {
        return $roles->roles[--$key];
    }

}