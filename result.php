<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php
      $name = $_POST["username"];
      echo "<h2>Welcome, " . htmlspecialchars($name) . "! 👋</h2>";
      echo "<p class='success-message'>Your form was sent successfully!</p>";
    ?>

    <div class="result-actions">
      <a href="form.php" class="back-link">← Go Back to Form</a>
    </div>
  </div>

  <style>
    .success-message {
      color: #28a745;
      font-size: 1.1rem;
      margin: 20px 0;
      font-weight: 500;
    }

    .result-actions {
      margin-top: 30px;
      text-align: center;
    }

    .back-link {
      display: inline-block;
      padding: 12px 24px;
      background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
    }

    .back-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
      background: linear-gradient(135deg, #5a6268 0%, #343a40 100%);
    }

    .back-link:active {
      transform: translateY(0);
      box-shadow: 0 2px 10px rgba(108, 117, 125, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
      .back-link {
        padding: 10px 20px;
        font-size: 14px;
      }
    }
  </style>
</body>
</html>