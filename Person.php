<!DOCTYPE html>
<?php
class Person {
  // Properties
  public $name;
  public $status;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_status($status) { // Corrected method name from set_color to set_status
    $this->status = $status;
  }
  function get_status() {
    return $this->status;
  }
}
?>
 
