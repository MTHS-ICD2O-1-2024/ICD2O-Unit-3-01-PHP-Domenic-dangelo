<!DOCTYPE html>
<!-- ICS2O-Unit3-01-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of a trapezoid, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of a trapezoid, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a trapezoid, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid.svg" alt="area of trapezoid" />
      </div>
      <div class="page-content-php">Enter the base, height and length in cm.
        <form action="answer.php" method="GET">
          <span>A base:</span>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="a-base" name="ba-base">
            <label class="mdl-textfield__label" for="a-base"></label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <span>mm</span>
          <br />
          <span>B base:</span>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="b-base" name="b-base">
            <label class="mdl-textfield__label" for="b-base"></label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <span>mm</span>
          <br />
          <span>Height:</span>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="height" name="height">
            <label class="mdl-textfield__label" for="height"></label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <span>mm</span>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>