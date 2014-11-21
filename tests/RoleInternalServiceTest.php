<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 1:34 PM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleInternalService;
use App\MyStuff\ContactDirectory\RoleDirectory\Roles;

class RoleInternalServiceTest extends \PHPUnit_Framework_TestCase {



    public function test_roleInternalService_retrieveAllRoles_method_receives_all_roles()
    {
        $roleInternalService = new RoleInternalService();

        $this->assertEquals(true, is_array($roleInternalService->retrieveAllRoles()));

    }

    public function test_roleInternalService_retrieveAllRolesJson_method_receives_all_roles_and_responds_in_json()
    {
        $roleInternalService = new RoleInternalService();

        $roles = new Roles();

        $this->assertEquals(json_encode($roles->roles), $roleInternalService->retrieveAllRolesJson());

    }
}
