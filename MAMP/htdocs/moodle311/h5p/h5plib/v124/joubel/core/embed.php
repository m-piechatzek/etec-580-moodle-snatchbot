<!doctype html>
<html lang="<?php print $lang; ?>" class="h5p-iframe">
<head>
  <meta charset="utf-8">
  <title><?php print $content['title']; ?></title>
  <?php for ($i = 0, $s = count($scripts); $i < $s; $i++): ?>
    <script src="<?php print $scripts[$i]; ?>"></script>
  <?php endfor; ?>
  <?php for ($i = 0, $s = count($styles); $i < $s; $i++): ?>
    <link rel="stylesheet" href="<?php print $styles[$i]; ?>">
  <?php endfor; ?>
  <?php if (!empty($additional_embed_head_tags)): print implode("\n", $additional_embed_head_tags); endif; ?>
</head>
<body>
  <div class="h5p-content" data-content-id="<?php print $content['id']; ?>"></div>
  <script>
    H5PIntegration = <?php print json_encode($integration); ?>;
  </script>
  <?php
  // Turn on output buffering
ob_start();
//  Return the contents of the output buffer
$htmlStr = ob_get_contents();
// Clean (erase) the output buffer and turn off output buffering
ob_end_clean(); 
// Write final string to file
file_put_contents($fileName, $htmlStr);
?>
</body>
</html>
