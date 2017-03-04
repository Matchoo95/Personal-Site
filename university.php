<!DOCTYPE html>
<html lang="en">




<head>

  <title>Matthew Hawkins - Personal Website</title>
<link rel="icon" href="images/Matts-Logo.jpg">
  <meta name="description">
  <meta name="author" content="MatthewHawkins">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">


</head>



<body id="body">
  <!-- allows screen readers to skip the nav bar -->
  <a href="#maincontents" title="Skip the navbar and go to the main part of the page">Skip to main Content</a>


  <header id="bodyheader">
    <nav id="navbar">
      <ul>
        <li><a href="index.php" title="Return to the Home Page">Home</a></li>
        <li class="active"><a href="university.php" title="University Work">University</a>
    <!--  <ul>
            <li><a href="university/introduction-to-programming.php" title="Programming Work">Introduction to Programming</a></li>
            <li><a href="university/network-fundamentals.php" title="Networking Work">Network Fundamentals</a></li>
            <li><a href="university/database-design.php" title="Database Design Work">Database Design</a></li>
            <li><a href="university/web-foundations.php" title="Web Work">Web Foundations</a></li>
            <li><a href="university/computer-architecture.php" title="Computer Architecture Work">Computer Architecture</a></li>
          </ul> -->
        </li>
        <li><a href="my-projects.php" title="Personal Project Blogs">My Projects</a></li>
        <li><a href="japanese.php" title="Japanese Language Learning">Japanese</a></li>
        <li><a href="archives.php" title="Previous site entries organised by date">Archives</a></li>
        <li><a href="about.php" title="About Matthew Hawkins">About</a></li>
      </ul>
    </nav>
  </header>


  <main id="main">


    <header id="maincontentsheader">
      <h1>Matthew Hawkins</h1>
        <h1>Personal Website and Worklog</h1>
    </header>




    <!-- side contents bar-->
    <!-- html for this is in the javascript file, this allows updating of the side bar across the entire site -->
    <aside id="sidecontents">
      <?php
        include 'sidebar.php';
       ?>
    </aside>


    <!-- most recent entries from the whole site -->
    <article id="maincontents">

      <h2>University</h2>
  <section>
      <p>
  This page contains major projects that I have completed at University. As well as any other work that is related to my course.
</p>
<!--
<hr />
<h2>Subjects</h2>
<ul>
  <li><a href="university/introduction-to-programming.php" title="Programming Work">Introduction to Programming</a></li>
  <li><a href="university/network-fundamentals.php" title="Networking Work">Network Fundamentals</a></li>
  <li><a href="university/database-design.php" title="Database Design Work">Database Design</a></li>
  <li><a href="university/web-foundations.php" title="Web Work">Web Foundations</a></li>
  <li><a href="university/computer-architecture.php" title="Computer Architecture Work">Computer Architecture</a></li>
</ul>

-->
</section>
      <hr />


      <section>
        <h2>Most Recent Entries</h2>
      </section>

      <section id="entry2">
        <header>
          <h2><a href="university/webfoundationsworklog.php" title="A log of each weeks work">Web Foundations Worklog</a></h2>
        </header>
        <footer>
          <abbr title="26th of March 2016">
        2016/26/03
      </abbr>
          <address>
          By <a href="about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
        <p>
          <a href="university/webfoundationsworklog.php" title="Click to continue reading">This week we discussed the overall marking guide of our website and what should be included, how it should be programmed etc. In the lessons we got our sites checked with the teachers to check for any issues...
        </a></p>
      </section>

      <section id="entry1">
        <header>
          <h2><a href="university/sustainable-computing-literature-review.php" title="A Literature Review on Sustainable Computing">Sustainable Computing - A Literature Review</a></h2>
        </header>
        <footer>
          <abbr title="7th of February 2016">
        2016/07/02
      </abbr>
          <address>
          By <a href="about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
        <p>
          <a href="university/sustainable-computing-literature-review.php" title="Click to continue reading">With any sector of business in the world, environmental sustainability is an important issue to address. With the massive increase in technological demands...
        </a></p>
      </section>

    </article>


    <!-- copy of the sidebar, used for mobile responsiveness -->
    <!-- html for this is in the javascript file, this allows updating of the side bar across the entire site -->
    <aside id="extracontents">
      <?php
        include 'sidebar.php';
      ?>
    </aside>


  </main>




  <!-- extra info -->
  <footer id="bodyfooter">
    <img id="logo" src="images/Matts-Logo.jpg" alt="Matchoo - Logo">
    <p>Copyright 2015-2016 <a href="about.php" title="About Matthew Hawkins">Matthew Hawkins</a>.</p>
  </footer>

<!--  <script src="js/script.js"></script> -->
</body>

</html>
