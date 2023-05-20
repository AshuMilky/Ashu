<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="connections.php">
      FIRSTNAME:
      <input type="text" name="firstname">
      <br><br>
      LASTNAME:
      <input type="text" name="lastname">
      <br><br>
      GENDER:
      <input type="radio" name="gender" value="female">FEMALE<br>
      <input type="radio" name="gender" value="male">MALE<br>
      COUNTRYs:
      <select value="country" id="country">
      <option value="India">INDIA</option><br> 
      <option value="America">AMERICA</option><br> 
      <option value="USA"></option>USA<br> 
      <option value="Landon">LANDON</option><br>
</select>
      
      
      DATE:
      <input type="date" name="date">
      <br><br>
      FROM:

      <input type="from" name="from">
      <br>
      TO:
      <input type="to" name="to">
      Submit:
      <input type="submit" name="submit">
</form>



    
</body>
</html>