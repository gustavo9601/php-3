<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Curso PHP Intermedio</title>
    <link href=
    "http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" rel=
    "stylesheet">
    <link href=
    'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="row">
        <div class="medium-5 large-3 columns"></div>
    </div>
    <div class="row column">
        <p class="lead">Ejecución de código</p>
    </div>

    <div class="callout primary">
      <h5>Eval</h5>
      <pre><?php echo eval('var_dump($_SERVER);'); ?></pre>
    </div>

    <div class="callout warning">
      <h5>Exec</h5>
      <pre><?php echo exec('ls -alh'); ?></pre>
    </div>

    <div class="callout success">
      <h5>Operador de ejecución</h5>
      <pre><?php echo `touch test.php`; ?></pre>
    </div>

    <div class="row small-up-1 medium-up-2 large-up-3">
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js">
    </script> 
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js">
    </script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="https://intercom.zurb.com/scripts/zcom.js" type=
    "text/javascript">
    </script>
</body>
</html>