<?php
class DB
{
   public $conn;
   
   function __construct($server, $user_name, $pass, $db)
   {
      $this->conn = mysqli_connect($server, $user_name, $pass, $db);
      if (!$this->conn) {
         die("Connection failed: " . mysqli_connect_error());
      }
      mysqli_set_charset($this->conn, 'utf8');
   }

   function __destruct()
   {
      if ($this->conn) {
         mysqli_close($this->conn);
      }
   }
}
?>