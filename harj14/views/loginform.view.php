<!DOCTYPE html>
<html lang="fi">
<head>
  <title>Kirjaudu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Kirjaudu</h2>
  <form method ="post">
    <div class="form-group">
      <label for="nickname">Käyttäjätunnus</label>
      <input type="text" class="form-control" id="nickname" name="nickname">
    </div>
    <div class="form-group">
      <label for="password">Salasana</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Kirjaudu</button>
  </form>
</div>

</body>
</html>
