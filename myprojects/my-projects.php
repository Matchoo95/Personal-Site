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
        <li><a href="university.php" title="University Work">University</a>
<!--
          <ul>
            <li><a href="university/introduction-to-programming.php" title="Programming Work">Introduction to Programming</a></li>
            <li><a href="university/network-fundamentals.php" title="Networking Work">Network Fundamentals</a></li>
            <li><a href="university/database-design.php" title="Database Design Work">Database Design</a></li>
            <li><a href="university/web-foundations.php" title="Web Work">Web Foundations</a></li>
            <li><a href="university/computer-architecture.php" title="Computer Architecture Work">Computer Architecture</a></li>
          </ul>
        -->
        </li>
        <li class="active"><a href="my-projects.php" title="Personal Project Blogs">My Projects</a></li>
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
      <h2>My Projects</h2>

      <hr />

      <section>

        <h2>Most Recent Entries</h2>
        <p>
        This page contains the most recent entries for anything related to any of my personal projects. You can also find all the entries by clicking the archives link below.
        </p>
        <ul>
          <li>
            <a href="archives.php" title="All entries for everything in this site">Archives</a>
          </li>
        </ul>

<!--
  <hr />
        <section id="entry1">
          <header>
            <h2><a href="languagelearning/resources.php" title="Resources for Learning Languages">Language Learning Resources</a></h2>
          </header>
          <footer>
            <abbr title="14th of February 2016">
          2016/08/02
        </abbr>
            <address>
            By <a href="about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
          </address>
          </footer>
          <p>
            <a href="languagelearning/resources.php" title="Click to continue reading">Here is a list of useful resources and websites that I have found to be helpful for learning Japanese. Some are useful for all languages whilst others are limited to Japanese...
        </a></p>

    -->
    </section>
  </article>
    <hr />

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
