<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;

class Project extends DataObject
{

  private static $db = [
    "Title" => "Varchar",
    "Description" => "Text",
    "HImage" => "Text",
  ];

  private static $has_one = [
    "HeaderImage" => Image::class,
  ];

  private static $has_many = [
    "Tasks" => Task::class,
  ];

  private static $many_many = [
    "Users" => Member::class,
  ];

  private static $owns = [
    "HeaderImage",
  ];

  public function getHImage()
  {
    $image = $this->HeaderImage();
    if ($image) {
      return $image->getAbsoluteURL();
    }
    return "";
  }

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    return $fields;
  }
}
