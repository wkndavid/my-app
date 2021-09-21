<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Usuários</h1>
{{  dd($users) }}
<?php 
   foreach ($users as $user)
   {
      // echo $user;
   }
?>
<br>
</body>
</html>