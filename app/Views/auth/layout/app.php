<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
  <title><?= $this->renderSection('title') ?></title>
</head>
<body>
    <div id="root">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>