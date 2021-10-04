<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;

class Task extends DataObject
{

  private static $db = [
    "Title" => "Varchar",
    "Description" => "Text",
  ];

  private static $has_one = [
    "Project" => Project::class,
  ];

  private static $has_many = [
    "AssignedTo" => Member::class,
  ];


  public function getCMSFields()
  {
  }
}
