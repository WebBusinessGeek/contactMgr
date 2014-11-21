<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:40 PM
 */

namespace tests;





use App\MyStuff\ContactDirectory\RoleDirectory\Roles;

class RolesTest extends \PHPUnit_Framework_TestCase {

    public function test_roles_returns_an_array_of_roles_for_domain()
    {
        $role = new Roles();


        $this->assertEquals(true, is_array($role->roles));
    }

}
