<?
if( $_POST )
{
  $con = mysql_connect("localhost","sam","sherri12");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("websitedb", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_comment = $_POST['comment'];

  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_comment = mysql_real_escape_string($users_comment);

  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "
  INSERT INTO `websitedb`.`comments` (`id`, `name`, `email`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>
