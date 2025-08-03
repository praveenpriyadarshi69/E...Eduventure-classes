<!-- notes-list.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Download Notes - Eduventure Classes</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    .note { margin: 10px 0; }
  </style>
</head>
<body>
  <h2>📚 Download Notes</h2>
  <?php
    $folder = "notes/";
    $files = scandir($folder);
    $pdfs = array_filter($files, function($file) {
      return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
    });

    if (count($pdfs) > 0) {
      foreach ($pdfs as $pdf) {
        echo "<div class='note'><a href='notes/$pdf' download>$pdf</a></div>";
      }
    } else {
      echo "<p>No notes available yet.</p>";
    }
  ?>
</body>
</html>
