<?php include "assets/php/functions.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vakantieaanhetwater</title>
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/lightbox.min.css">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <meta name="description" content="Titel">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Titel">
  <meta property="og:url" content="Titel">
  <meta property="og:description" content="Titel">
  <meta property="og:image" content="Titel (full url)">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Titel">
  <meta name="twitter:title" content="Titel">
  <meta name="twitter:description" content="Titel">
  <meta name="twitter:creator" content="@Titel">
  <meta name="twitter:image" content="Titel (full url)">
</head>

<body class="main has-navbar-fixed-top">

  <script>
    document.body.className += " fade-out";
  </script>

  <nav class="navbar is-white is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <div class="navbar-item heavy">
        <a href="index">Nog iets</a>
      </div>
      <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-menu" id="navMenu">
      <div class="navbar-start">
        <!-- NOTHING HERE -->
      </div>
      <div class="navbar-end">
        <a href="index" class="navbar-item">Home</a>
        <a href="one" class="navbar-item">Amelanderkaap</a>
        <a href="two" class="navbar-item">Boomhiemke</a>
        <a href="three" class="navbar-item">Roompot</a>
        <a href="beschikbaarheid" class="navbar-item">Beschikbaarheid</a>
      </div>
    </div>
  </nav>

  <section class="hero feature three-feature is-large fadeIn">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white heavy shadow">Roompot</h1>
      </div>
    </div>
  </section>

  <section class="section is-medium">
    <div class="container">
      <div class="content">
        <h2>Roompot</h2>
        <p>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla, posuere eget elementum vel, egestas non sapien. Lorem
          ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus dignissim molestie. Etiam imperdiet sit amet nibh a dapibus. Morbi sit amet justo ac justo scelerisque fringilla non facilisis nulla. Quisque in dolor ut justo malesuada
          ultricies ut et lorem. Nam interdum interdum tempor. Aenean malesuada ipsum vel elit commodo sagittis. Phasellus gravida, ligula vel tempus mattis, nibh lectus aliquam leo, non mollis sem mauris quis velit.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns is-mobile is-multiline gallery">
        <?php gallery("three"); ?>
      </div>
    </div>
  </section>

  <section class="section is-small">
    <div class="container">
      <div class="columns is-mobile is-multiline has-text-centered">
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Bedden</p>
          <p class="title">4</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Kamers</p>
          <p class="title">6</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Badkamers</p>
          <p class="title">2</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Prijs</p>
          <p class="title">€499</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section is-medium">
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <div class="content">
            <h2>Een Roompot titel</h2>
            <p>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla, posuere eget elementum vel, egestas non sapien.
              Lorem
              ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus dignissim molestie. Etiam imperdiet sit amet nibh a dapibus. Morbi sit amet justo ac justo scelerisque fringilla non facilisis nulla. Quisque in dolor ut justo malesuada
              ultricies ut et lorem. Nam interdum interdum tempor. Aenean malesuada ipsum vel elit commodo sagittis. Phasellus gravida, ligula vel tempus mattis, nibh lectus aliquam leo, non mollis sem mauris quis velit.</p>
          </div>
        </div>
        <div class="column is-half">
          <div class="content">
            <h2>Nog Roompot een titel</h2>
            <p>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla, posuere eget elementum vel, egestas non sapien.
              Lorem
              ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus dignissim molestie. Etiam imperdiet sit amet nibh a dapibus. Morbi sit amet justo ac justo scelerisque fringilla non facilisis nulla. Quisque in dolor ut justo malesuada
              ultricies ut et lorem. Nam interdum interdum tempor. Aenean malesuada ipsum vel elit commodo sagittis. Phasellus gravida, ligula vel tempus mattis, nibh lectus aliquam leo, non mollis sem mauris quis velit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content">
        <h2>Titel</h2>
      </div>
      <div class="columns">
        <div class="column is-half">
          <form id="send">
            <div class="field">
              <div class="control">
                <input id="send_name" class="input" type="text" placeholder="Name" required>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input id="send_email" class="input" type="email" placeholder="Email address" required>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input id="send_phone" class="input" type="tel" placeholder="Phone number" required>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <textarea id="send_message" class="textarea" placeholder="Message" minlength="10" required></textarea>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <button id="submit" class="default button is-fullwidth">Versturen</button>
              </div>
            </div>
          </form>
          <div id="success">
            <div class="content has-text-centered">
              <h3 id="result" class="title"></h3>
            </div>
          </div>
          <div id="failure">
            <div class="content has-text-centered">
              <h3 class="title">Versturen mislukt...</h3>
            </div>
          </div>
        </div>
        <div class="column is-half">
          <div class="map-responsive">
            <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=nl&q=Oosterhiemweg%201%2C%209161%20CZ%20Hollum+(Vakantiewoningaanhetwater)&ie=UTF8&t=h&z=18&iwloc=B&output=embed"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="content has-text-centered soc">
      <a href=""><i class="fab fa-2x fa-facebook fk"></i></a>
      <a href=""><i class="fab fa-2x fa-twitter tr"></i></a>
      <a href=""><i class="fab fa-2x fa-instagram im"></i></a>
    </div>
  </footer>

  <div id="one-cache">hi</div>
  <div id="two-cache"></div>
  <div id="three-cache"></div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/lightbox.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script>
  var lightbox = $('.gallery a').simpleLightbox();
  </script>

</body>

</html>
