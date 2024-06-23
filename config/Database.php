<?php

class Database
{
  private static $instance;

  public static function getConn()
  {
    if (!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=localhost;dbname=biblioteca_online', 'root', '');
    }
    return self::$instance;
  }
}