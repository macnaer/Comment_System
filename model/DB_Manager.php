<?php

class DB_Manager {
    private $mysqli;
    
    public function __construct() {
    $this->mysqli = new mysqli("localhost", "cs", "cs123", "comment_system") or die("Unable to connect");
    $this->mysqli->query("SET NAMES 'utf8'");
  }
  
  public function getComments($startFrom)
  {
      $limit = intval  ($startFrom);
      $result = $this->mysqli->query("SELECT * FROM `comments` ORDER BY `id` DESC LIMIT {$limit}, 5");
      return $result;
  }
  
  public function addNewUser($login, $password)
  {
      $newUserResult = $this->mysqli->query("INSERT INTO users (login, password) VALUES ('$login', '$password')");
      return $newUserResult;
  }
  
  public function searchLogin ($login)
  {
      $this->mysqli->query("SELECT `login` FROM `users` WHERE `login`='$login' ");
  }
  
  public function checkLogin ($login)
  {
      $login_result = $this->mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' ");
      return $login_result;
  }
  
  public function addNewComment($author, $new_comment)
  {
      $this->mysqli->query("INSERT INTO comments (author, comment) VALUES ('$author', '$new_comment')");
  }
  
  public function delComment($del_comment)
  {
      $this->mysqli->query("DELETE FROM comments WHERE id = $del_comment");
  }
  
  public function replaceComment($replace_id, $replace_comment)
  {
      $this->mysqli->query("UPDATE comments SET comment = '$replace_comment' WHERE id = '$replace_id' ");
  }

  public function __destruct() {
      if ($this->mysqli) {
            $this->mysqli->close();
        }
    }
}
