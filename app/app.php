<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Count.php";

    $app = new Silex\Application();

    $app->get("/new_count", function() {
      return "
      <!DOCTYPE html>
      <html>
        <head>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          <title>Enter Phrase</title>
        </head>
        <body>
          <div class='container'>
            <h1>Repeating Word Counter</h1>
            <p>Enter a Phrase and a Search Word:</p>
            <form action='/count_repeat'>
              <div class='form-group'>
                <label for='phrase'>Enter a Phrase</label>
                <input id='phrase' name='phrase' class='form-control' type='text'>
                <br>
                <label id='search'>Enter a Word to Search For</label>
                <input id='search' name='search' class='form-control' type='text'>
              </div>
              <button type='submit' class='btn-success'>Submit</button>
            </form>
          </div>
        </body>
      </html>
      ";
    });

    $app->get("/create_count", function() use($app) {
      $myCount = new Count;
      $count_result
    })

    return $app;
?>
