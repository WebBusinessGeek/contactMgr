<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/21/14
 * Time: 11:31 AM
 */

namespace tests;


use App\MyStuff\ContactDirectory\RoleDirectory\RoleCommandController;

class RoleCommandControllerTest extends \PHPUnit_Framework_TestCase {

    public function test_roleCommandCtrl_retrieveAllRoles_method_retrieves_all_roles()
    {
        $roleCommandController = new RoleCommandController();

        $this->assertEquals(true, is_array($roleCommandController->retrieveAllRoles()));
    }

    public function test_roleCommandCtrl_retrieveSpecificRole_method_retrieves_a_specific_role()
    {
        $rolecommandController = new RoleCommandController();

        $this->assertEquals('Customer Support', $rolecommandController->retrieveSpecificRole(1));
    }

}
