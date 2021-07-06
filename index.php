<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shopping</title>
    <link rel="stylesheet" href="style.css" />
    <script src="src/main.js" defer></script>
  </head>
  <body>
    <!-- Logo -->
    <img src="img/logo.png" alt="Logo" class="logo" />
    <br />
    <!-- button -->
    <div class="buttons">
      <button class="btn">
        <img
          src="img/blue_t.png"
          alt="tshirt"
          class="imgBtn"
          data-key="type"
          data-value="tshirt"
        />
      </button>
      <button class="btn">
        <img
          src="img/blue_p.png"
          alt="pants"
          class="imgBtn"
          data-key="type"
          data-value="pants"
        />
      </button>
      <button class="btn">
        <img
          src="img/blue_s.png"
          alt="skirt"
          class="imgBtn"
          data-key="type"
          data-value="skirt"
        />
      </button>
      <button class="btn colorBtn blue" data-key="color"
          data-value="blue">blue</button>
      <button class="btn colorBtn yellow" data-key="color"
          data-value="yellow">Yellow</button>
      <button class="btn colorBtn pink" data-key="color"
          data-value="pink">Pink</button>
    </div>
    <!-- Items -->
    <ul class="items"></ul>
  </body>
</html>
