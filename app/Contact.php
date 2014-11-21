<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/20/14
 * Time: 10:09 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    public $name;

    public $email;

    public $phoneNumber;

    public $company;

    public $title;

    public $website;

    public $role;

    public $industry;

    public $contactRelation;

    function __construct($name, $email, $phoneNumber, $industry, $contactRelation, $role, $company=null, $title=null, $website = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->industry = $industry;
        $this->contactRelation = $contactRelation;
        $this->role = $role;
        $this->company = $company;
        $this->title = $title;
        $this->website = $website;
    }


}