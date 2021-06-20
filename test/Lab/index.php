<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
    <?php
    if($_COOKIE['user'] == ''):

    ?>

  <div class="row">
      <div class="col">
          <h1>Форма регистрации</h1>
          <form action="lab.php" method="post">
              <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
              <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
              <button class="btn btn-success" type="submit">Зарегать</button>
          </form>
      </div>

      <div class="col">
          <h1>Форма авторизации</h1>
          <form action="auth.php" method="post">
              <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
              <button class="btn btn-success" type="submit">Войти</button>
          </form>
      </div>

      <?php else: ?>
      <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">сюда</a>.</p>
      <?php endif;?>
  </div>

</div>
</body>
</html>