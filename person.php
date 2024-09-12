<?php
class Person {

  public $birth;

  function birthday() {
    $date_birth = DateTime::createFromFormat('d/m/Y', $this->birth);

    if (($date_birth->format('d') == date('d')) and ($date_birth->format('m') == date('m'))) {
      echo "Yes";
    } else {
      echo "No";
    }
  }
}