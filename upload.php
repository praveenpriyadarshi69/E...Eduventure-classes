<!-- upload.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Notes - Eduventure Classes</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    form { max-width: 400px; margin: auto; border: 1px solid #ccc; padding: 20px; }
    input[type="submit"] { margin-top: 10px; }
  </style>
</head>
<body>
  <h2>Upload Notes (PDF Only)</h2>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Choose PDF File:</label><br>
    <input type="file" name="pdf" accept="application/pdf" required><br>
    <input type="submit" name="submit" value="Upload">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $targetDir = "notes/";
    $fileName = basename($_FILES["pdf"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $targetFilePath)) {
      echo "<p>✅ File uploaded successfully: <a href='$targetFilePath'>$fileName</a></p>";
    } else {
      echo "<p>❌ Error uploading file.</p>";
    }
  }
  ?>
</body>
</html>
