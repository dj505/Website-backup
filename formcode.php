<title>
Sam's Website - Comments
</title>
<form method='post'>
<? include("manage_comments.php"); ?>
<body background="bkg.jpg">
NOTICE: THIS FORM IS NOT YET FULLY FUNCTIONAL. PLEASE DO NOT ATTEMPT TO APPLY A COMMENT THROUGH THIS FORM, INSTEAD, EMAIL 1greenpanda@gmail.com WITH YOUR COMMENT. <br/>
  Name: <input type='text' name='name' id='name' /><br />

  Email: <input type='text' name='email' id='email' /><br />

  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />

  <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

  <input type='submit' value='Submit' />

