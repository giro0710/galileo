<?php
  $newFile = fopen("./hello_there.php", "w");
  $code = "<?php\n// This is a comment\necho 'This is a test page!';\necho 'Exam number two!';\n// This is the end of a comment \n?>";
  fwrite($newFile, $code);
  fclose($newFile);
?>