<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 11:33 AM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleFactory;

class RoleFactoryTest extends \PHPUnit_Framework_TestCase {

    public function test_roleFactory_createNewRolesObject_method_creates_new_roles_object()
    {
        $roleFactory = new RoleFactory();

        $roles = $roleFactory->createNewRolesObject();

        $this->assertEquals(true, is_object($roles));
        $this->assertObjectHasAttribute('roles', $roles);

    }

}
