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
  <link rel="stylesheet" href="../css/main.css">


</head>



<body id="body">
  <!-- allows screen readers to skip the nav bar -->
  <a href="#maincontents" title="Skip the navbar and go to the main part of the page">Skip to main Content</a>


  <header id="bodyheader">
    <nav id="navbar">
      <ul>
        <li><a href="../index.php" title="Return to the Home Page">Home</a></li>
        <li><a href="../university.php" title="University Work">University</a>
          <!--
          <ul>
            <li><a href="../university/introduction-to-programming.php" title="Programming Work">Introduction to Programming</a></li>
            <li><a href="../university/network-fundamentals.php" title="Networking Work">Network Fundamentals</a></li>
            <li><a href="../university/database-design.php" title="Database Design Work">Database Design</a></li>
            <li><a href="../university/web-foundations.php" title="Web Work">Web Foundations</a></li>
            <li><a href="../university/computer-architecture.php" title="Computer Architecture Work">Computer Architecture</a></li>
          </ul>
        -->
        </li>
        <li><a href="../my-projects.php" title="Personal Project Blogs">My Projects</a></li>
        <li class="active"><a href="../japanese.php" title="Japanese Language Learning">Japanese</a></li>
        <li><a href="../archives.php" title="Previous site entries organised by date">Archives</a></li>
        <li><a href="../about.php" title="About Matthew Hawkins">About</a></li>
      </ul>
    </nav>
  </header>


  <main id="main">


    <!-- side contents bar-->
    <!-- html for this is in the javascript file, this allows updating of the side bar across the entire site -->
    <aside id="sidecontents">
      <?php
        include 'sidebar.php';
       ?>
    </aside>



    <!-- most recent entries from the whole site -->
    <article id="maincontents">

      <header id="maincontentsheader">
        <h1>Matthew Hawkins</h1>
        <h1>Personal Website and Worklog</h1>
      </header>

      <section id="1-year-update">
        <header>
          <h2>Learning Japanese - 1 Year Update</h2>
        </header>

        <a href="languagelearning/1-year-update.php" title="Click to watch the video">
          <iframe width="480" height="320" src="https://www.youtube.com/embed/PsFBbWXBJyc" frameborder="0" allowfullscreen></iframe>
        </a>

        <header>
          <h3>Overview - 概要</h3>
        </header>
        <p>
          After one year of learning Japanese via the AJATT Immersion Method I have made quite a bit of progress. The video above explains most of the progress I've made but to sum it up and I'm at a high level, can read most material (with about 5% unknown words)
          and can understand and enjoy TV, Films, Anime and the News. I am by no means fluent but I and close and feel myself getting closer with each day. Below are my Anki statistics which show my "study" history and where I'm at. I've also included
          the amount of listening hours and how much I am in contact with the language per day to give an idea of how much work I have put into it.
        </p>

        <header>
          <h3>Immersion - 没入</h3>
        </header>
        <p>
          Immersion is a language learning method that involves being around the language as much as possible on a daily basis. The logic of this method is simple and based on how babies learn languages. The idea is that if you are getting language input all the
          time, eventually you will output it. It is a very successful method that all learners that have become fluent in their second language have quite probably used. My "immersion time" per day is about as follows:
        </p>
        <ul>
          <li>
            Listening per day - ~22 hours
          </li>
          <li>
            Reading per day - ~70 pages of an average book
          </li>
        </ul>
        <p>
          The listening hours obviously include sleep hours but wether or not these help is hard to tell. There is no, as far as I'm aware, of any solid scientific data supporting it either way, however, getting listening hours before going to sleep and when waking
          up is a good boost if nothing else.
        </p>
        <p>
          The reading is a little hard to judge so I'm basing this on a slight educated guess. The total sum of 70 pages may not be just from books though, it is a rough estimate based on the number of sentences I see each day in my "immersion environment". Reading
          material includes, manga, books, news, online articles, subtitles and sentence flashcards.
        </p>

        <header>
          <h3>Kanji - 漢字</h3>
        </header>


        <img id="KanjiStatistics" src="../images/kanji.png" alt="Kanji Statistics">

        <p>
          Here are the ratios in English:
        </p>
        <ul>
          <li>
            Mature: 2326
          </li>
          <li>
            Young + Learning: 421
          </li>
          <li>
            Suspended: 263
          </li>
          <li>
            New: 0
          </li>
          <li>
            Total Learnt: 2747
          </li>
        </ul>

        <header>
          <h3>Sentences - 例文</h3>
        </header>


        <img id="SentenceStatistics" src="../images/reibun.png" alt="Sentence Statistics">
        <p>
          Here are the ratios in English:
        </p>

        <ul>
          <li>
            Mature: 5210
          </li>
          <li>
            Young + Learning: 1998
          </li>
          <li>
            Suspended: 0
          </li>
          <li>
            New: 2293
          </li>
          <li>
            Total Learnt: 7208
          </li>
        </ul>



        <footer>
          <abbr title="5th of June 2016">
          2016/06/05
        </abbr>
          <address>
            By <a href="about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
          </address>
        </footer>
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
    <img id="logo" src="../images/Matts-Logo.jpg" alt="Matchoo - Logo">
    <p>Copyright 2015-2016 <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>.</p>
  </footer>

<!--  <script src="js/script.js"></script> -->
</body>

</html>
