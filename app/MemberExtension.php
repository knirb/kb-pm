<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\Filterable;

class MemberExtension extends DataExtension
{
  private static $belongs_many_many = [
    "Projects" => Project::class,
  ];

  private static $has_many = [
    "Tasks" => Task::class,
  ];
}
