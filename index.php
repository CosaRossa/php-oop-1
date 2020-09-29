<?php

  // REPO: php-oop-1
  // GOAL: nell'ottica di quanto visto a lezione,
  //       generare una classe User definendo alcune variabili d'istanza
  //       che rappresentino alcune informazioni rilevanti nella registrazione.
  //       Generare inoltre costruttore e metodo toString nelle modalita' viste in classe.
  //       Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString.

  class User {

    public $name;
    public $lastname;
    public $username;
    public $password;
    public $sex;
    public $date_birth;

    public function __construct($name, $lastname, $username, $password) {
      $this -> name = $name;
      $this -> lastname = $lastname;
      $this -> username = $username;
      $this -> password = $password;
    }

    public function __toString() {
      $str = 'User:<br>Name: ' . $this -> name . '<br>'
              . 'Lastname: ' . $this -> lastname . '<br>'
              . 'Username: ' . $this -> username . '<br>'
              . 'Password: ' . $this -> password .'<br>';

      if ($this -> sex) {
        $str .= 'Sex: ' . $this -> sex . '<br>';
      } else {
        $str .= 'Sex: ---' . '<br>';
      }

      if ($this -> date_birth) {
        $str .= 'Date of Birth: ' . $this -> date_birth . '<br>';
      } else {
        $str .= 'Date of Birth: ---' . '<br>';
      }

      return $str;
    }
  }

  $user1 = new user('Gianluca', 'Benucci', 'Trusted97', 'gian97eseuser!!');
  $user2 = new user('Fufi', 'Fufolino', 'Fufolo', 'miao');

  $user1 -> sex = 'M';
  $user1 -> date_birth = '1997-03-20';

  echo $user1 . '<br>' . $user2;

?>
