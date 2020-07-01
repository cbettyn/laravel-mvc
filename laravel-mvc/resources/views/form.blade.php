<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Sign Up</title>
</head>
<body>
  <h1>Buat Account Baru</h1>
  <h2>Sign Up Form</h2>
  <form action="/welcome" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <p><label for="first_name">First Name:</label></p>
    <input type="text" name="first_name" id="first_name">
    <p><label for="last_name">Last Name:</label></p>
    <input type="text" name="last_name" id="last_name">
    <p><label for="gender">Gender:</label></p>
    <input type="radio" name="gender" id="gender" value="Male">Male <br>
    <input type="radio" name="gender" id="gender" value="Female">Female <br>
    <input type="radio" name="gender" id="gender" value="Other">Other
    <p><label for="nationality">Nationality:</label></p>
    <select name="nationality" id="nationality">
      <option value="Indonesian">Indonesian</option>
      <option value="Japanese">Japanese</option>
      <option value="Chinese">Chinese</option>
      <option value="Italian">Italian</option>
      <option value="American">American</option>
    </select>
    <p><label for="language">Language Spoken:</label></p>
    <input type="checkbox" name="language" id="language" value="Bahasa Indonesia">Bahasa Indonesia <br>
    <input type="checkbox" name="language" id="language" value="English">English <br>
    <input type="checkbox" name="language" id="language" value="Other">Other
    <p><label for="bio">Bio:</label></p>
    <textarea name="bio" id="bio" rows="10" cols="50"></textarea>
    <p><input type="submit" value="Sign Up"></p>
  </form>

</body>
</html>
