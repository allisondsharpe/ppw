<!DOCTYPE html>
<html>
<head>
  <title> Add a New Entry </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/main.js"> </script>
</head>
<body>

  <header>
    <img src="assets/images/logo.png" alt="AA logo" id="logo"/>
    <a href="settings.php"><button id="settings" class="header-btn" type="button">Settings</button></a>
    <a href="logout.php"><button id="logout" class="header-btn" type="button">Log out</button></a>
  </header>

  <nav>
    <ul>
      <li class="border-right"><a href="home.php">Home</a></li>

      <div class="dropdown">
        <li class="border-right" id="active-item"><a href="about.php">About Us</a>
        <div class="dropdown-content">
          <a href="testimonials.php">Testimonials</a>
        </li></div></div>

      <div class="dropdown">
        <li class="border-right"><a href="entries.php">My Entries</a>
        <div class="dropdown-content">
          <a href="add_entry.php">Add New Entry</a>
      </li></div></div>

      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <div id="content">
    <h1> Add a New Entry </h2>

      <form id="entry_form" action="insert_entry.php" method="POST">
        <div id="form_heading1">
          Title <input type="text" name="title" class="form_input" />
        </div>

        <div id="form_heading2">
          Date <input type="text" name="entry_date" id="datepicker" />
        </div>

        <img src="assets/icons/calendar_icon.png"/>

        <textarea id="entry_textarea" name="content" /></textarea>
        <input type="submit" class="main-btn" name="submit" value="Submit"/>
      </form>
  </div>

<footer>
  <section class="border-right">
    <h4>Stay Tuned</h4>
    <p>Connect with us on Twitter to see the latest news and updates.</p>
    <a href="https://twitter.com/AnonAspirer?lang=en"><img src="assets/icons/twitter_icon.png" /></a>
  </section>

  <section class="border-right">
    <h4>Email Updates</h4>
    <p>Enter in your email to receive our offers and announcements.</p>
    <input type="text" />
    <img src="assets/icons/email_icon.png">
  </section>

  <section>
    <h4>Contact Us</h4>
    <p>Have any questions? Send us an email and we'll get back to you as soon as possible. </p>
    <a href="mailto:myblog@anonaspirer.com"><button id="footer-btn" type="button">Email Us</button></a>
  </section>

  <p id="copyright"> Copyright &copy; The Anonymous Aspirer, 2015. </p>
</footer>

</body>
</html>
