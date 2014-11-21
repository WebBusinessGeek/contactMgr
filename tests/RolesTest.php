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
        $this->assertEquals('Customer Support', $role->roles[0]);
    }

    public function test_roles_roles_property_contains_correct_values()
    {
        $correctValues = [

            'Customer Support',

            'Business/Admin Support',

            'Marketing',

            'Sales',

            'Developer',

            'Designer',

            'IT',

            'Management',
        ];

        $roles = new Roles();

        for($count = 0; $count < count($correctValues); $count++)
        {
            $this->assertEquals($correctValues[$count], $roles->roles[$count]);
        }
    }

}
