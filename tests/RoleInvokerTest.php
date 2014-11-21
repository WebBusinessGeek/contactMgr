<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 11:41 AM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleFactory;
use App\MyStuff\ContactDirectory\RoleDirectory\RoleInvoker;

class RoleInvokerTest extends \PHPUnit_Framework_TestCase {

    public function test_roleInvoker_getAllRoles_method_gets_all_roles_on_roles_object()
    {
        $roleFactory = new RoleFactory();

        $roles = $roleFactory->createNewRolesObject();

        $roleInvoker = new RoleInvoker();

        $this->assertEquals(true, is_array($roleInvoker->getAllRoles($roles)));
    }

}
