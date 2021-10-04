<?php

use SilverStripe\ORM\DataExtension;

class MemberExtension extends DataExtension
{
  private static $belongs_many_many = [
    "Projects" => Project::class,
    "Tasks" => Task::class,
  ];
}
