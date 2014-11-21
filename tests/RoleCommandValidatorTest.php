<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 12:32 PM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleCommandValidator;
use App\MyStuff\ContactDirectory\RoleDirectory\Roles;

class RoleCommandValidatorTest extends \PHPUnit_Framework_TestCase {

    public function test_rolecommandValidator_acceptableRoleKey_tells_if_a_key_is_available_on_roles_property()
    {
      //check if its available on roles->roles property
        $roleCommandValidator = new RoleCommandValidator();

        $this->assertEquals(false, $roleCommandValidator->acceptableRoleKey(64));
        $this->assertEquals(true, $roleCommandValidator->acceptableRoleKey(1));
    }

}
