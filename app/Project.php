<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;

class Project extends DataObject
{

  private static $db = [
    "Title" => "Varchar",
    "Description" => "Text",
  ];

  private static $has_many = [
    "Tasks" => Task::class,
  ];

  private static $many_many = [
    "Users" => Member::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    return $fields;
  }
}
