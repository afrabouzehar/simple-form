<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Enter Your Name</h2>

    <form action="result.php" method="POST">
      <div class="input-group">
        <input type="text" name="username" placeholder="Type your name..." required>
      </div>
      <button type="submit">Send</button>
    </form>
  </div>
</body>
</html>