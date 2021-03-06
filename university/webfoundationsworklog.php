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
  <link rel="stylesheet" href="../css/stickfigure.css">


</head>


<!-- note that the ids are used for navigation, e.g. to jump to certain parts of the page -->

<body id="body">
  <!-- allows screen readers to skip the nav bar -->
  <a href="#maincontents" title="Skip the navbar and go to the main part of the page">Skip to main Content</a>


  <header id="bodyheader">
    <nav id="navbar">
      <ul>
        <li><a href="../index.php" title="Return to the Home Page">Home</a></li>
        <li class="active"><a href="../university.php" title="University Work">University</a>
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
        <li><a href="../my-projects.php" title="Personal Project Blogs">My Projects</a></li>
        <li><a href="../japanese.php" title="Japanese Language Learning">Japanese</a></li>
        <li><a href="../archives.php" title="Previous site entries organised by date">Archives</a></li>
        <li><a href="../about.php" title="About Matthew Hawkins">About</a></li>
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
      <h2>Contents</h2>

      <section>

        <p>Click a week to jump to its' entry.</p>
        <ul>
          <li>
            <a href="#wk01" title="Web Foundations Worklog Week 1">Week 1</a>
          </li>
          <li>
            <a href="#wk02" title="Web Foundations Worklog Week 2">Week 2</a>

          </li>
          <li>
            <a href="#wk03" title="Web Foundations Worklog Week 3">Week 3</a>

          </li>
          <li>
            <a href="#wk04" title="Web Foundations Worklog Week 4">Week 4</a>

          </li>
          <li>
            <a href="#wk05" title="Web Foundations Worklog Week 5">Week 5</a>

          </li>
          <li>
            <a href="#wk06" title="Web Foundations Worklog Week 6">Week 6</a>

          </li>
          <li>
            <a href="#wk07" title="Web Foundations Worklog Week 7">Week 7</a>

          </li>
          <li>
            <a href="#wk08" title="Web Foundations Worklog Week 8">Week 8</a>

          </li>
          <li>
            <a href="#wk09" title="Web Foundations Worklog Week 9">Week 9</a>

          </li>
          <li>
            <a href="#wk10" title="Web Foundations Worklog Week 10">Week 10</a>

          </li>
          <li>
            <a href="#wk11" title="Web Foundations Worklog Week 11">Week 11</a>

          </li>
          <li>
            <a href="#wk12" title="Web Foundations Worklog Week 12">Week 12</a>

          </li>
          <li>
            <a href="#wk13" title="Web Foundations Worklog Week 13">Week 13</a>

          </li>
          <li>
            <a href="#wk14" title="Web Foundations Worklog Week 14">Week 14</a>

          </li>
          <li>
            <a href="#wk15" title="Web Foundations Worklog Week 15">Week 15</a>

          </li>
          <li>
            <a href="#wk16" title="Web Foundations Worklog Week 16">Week 16</a>
          </li>
          <li>
            <a href="#wk17" title="Web Foundations Worklog Week 17">Week 17</a>
          </li>
        </ul>
        <hr />
        <h2>Most Recent Entries</h2>
      </section>

      <section id="wk17">
        <header>
          <h2>Web Foundations Worklog Week #17</h2>
        </header>
        <p>
          This week we discussed the overall marking guide of our website and what should be included, how it should be programmed etc. In the lessons we got our sites checked with the teachers to check for any issues and generally finished the coursework off.
        </p>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk16">
        <header>
          <h2>Web Foundations Worklog Week #16</h2>
        </header>
        <p>
          This week we discussed accessibility. This is very similar to usability except that it focuses more on making a website more accessible for a wider audience including those who may be impaired. Accessibility is about making a website suitable for everyone
          who uses it, in this case we are focusing on end users that have impairments that make it harder for them to use a computer and a website. Considering illnesses such as colour blindness, using only colour to convey certain information can be quite
          bad as someone with colour blindness may not understand what the error means. To cope with this include some text as a warning as well, or some other way of conveying information. It isn’t just important to think about because it is the right
          thing to do, it is actually a part of the law and if websites don’t meet the regulations then the makers of the site can be sued and will have to face the consequences. The standards of web content accessibility are based around four principles which were;
        </p>

        <h3> Perceivable</h3>
        <ul>
          <li>
            Information and user interface components must be presentable to users in ways they can perceive.
          </li>
          <li>
            This means that users must be able to perceive the information being presented (it can't be invisible to all of their senses)
          </li>
        </ul>

        <h3>  Operable</h3>
        <ul>
          <li>
            User interface components and navigation must be operable.
          </li>
          <li>
            - This means that users must be able to operate the interface (the interface cannot require interaction that a user cannot perform)
          </li>
        </ul>


        <h3>  Understandable</h3>
        <ul>
          <li>
            Information and the operation of user interface must be understandable.
          </li>
          <li>
            - This means that users must be able to understand the information as well as the operation of the user interface (the content or operation cannot be beyond their understanding)
          </li>
        </ul>


        <h3>  Robust</h3>
        <ul>
          <li>
            Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.
          </li>
          <li>
            - This means that users must be able to access the content as technologies advance (as technologies and user agents evolve, the content should remain accessible)
          </li>
        </ul>


        <p>
          From here WCAG2 created a set of 12 guidelines that can be used as success criteria to test websites to see if they meet accessibility standards. Readability in content is also incredibly important, using proper grammar and simple English to get the message
          across not only makes the website easier to understand but increases the chance of a wider audience reaching your site. Some useful tools we were told about in this lecture to test our sites are;
        </p>
        <ul>
          <li><a href="http://webaim.org/resources/designers/" title="WebAim - web accessibility in mind">WebAIM</a></li>
          <li><a href="http://www.color-blindness.com/coblis-color-blindness-simulator/" title="Color blindness - Colour Blind Simulator">Colour Blindness Simulator 1</a></li>
          <li><a href="https://www.w3.org/WAI/ER/tools/index.php" title="WAI's list of useful accessibility tools">WAI's Tools List</a></li>
          <li><a href="http://webaim.org/resources/contrastchecker/" title="WebAim - Contrast Checker">Contrast Checker</a></li>
          <li><a href="https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en" title="Chrome extension for detecting accessibility issues within google chrome">Google Accessibility Developer Tools</a></li>
          <li><a href="http://wave.webaim.org/" title="WebAim - Web Accessibility evaluation tool">Webaim’s Wave</a></li>
          <li><a href="http://achecker.ca/checker/index.php" title="AChecker - Checks accessibility issues based on WCAG 2.0 guidelines">AChecker</a></li>
          <li><a href="http://read-able.com/" title="Read able - Readability Checker">Readability Checker</a></li>
        </ul>

        <footer>


          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk15">
        <header>
          <h2>Web Foundations Worklog Week #15</h2>
        </header>
        <p>
          This week we continued the discussion of usability from last week but focused on navigation and orientation, web page designs, mobile design and how to incorporate usability into our sites. Site architecture is incredibly important as it can cause loss
          of users if not set out correctly. If navigation is complex in a site and the user cannot figure out where to go to find something then they may give up and go to another site. Thinking about where the user wants to go and where they start from
          to get there as well as the steps in between can allow us to figure out how to make the process simpler and easy for the user. There are many types of navigation choices that we can go with and all are pretty reliable. We also discussed design
          types such as wireframes and just sketching pages. This gives you a basic understanding of what you think each page should do and where items should be placed, this reduces time during the development process and also gets you thinking about
          usability early on. Mobile usability is also a large issue, as most of the traffic on the internet these days is from mobile devices. Our sites need to therefore be mobile friendly and there are a variety of ways to do this. This is now a must
          have part of a website due to the popularity of mobile devices and the site needs to cater for different screen sizes. Media queries in <abbr title="Cascading Style Sheets">CSS</abbr> are probably the easiest way to get around this
          as they allow adjustments depending on the screen size of the device. We should also consider the internet speeds of our users as this can have an effect on their experience. Keeping our site light weight even for users with lower speeds is
          great as it means we can reach a wider audience. Usability also has more topics but there are too many too write about here. In essence, lack of usability will cause lack of income to a company as less users can use their site.
        </p>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk14">
        <header>
          <h2>Web Foundations Worklog Week #14</h2>
        </header>
        <p>
          This week was our first lecture on usability. We focused on what made a website a good website and more specifically what makes it “usable”. By usability we mean how easy it is to use something. A website should be simple and easy to use for the end user.
          A user should be able to come to a website with a clear goal in mind and easily achieve that goal. If they want to find a piece of information then it should be clear as to where they need to go to get the information. Good usability includes
          clear navigation, an easy to learn interface, error prevention and an organized layout. When building a site we need to consider both the websites goals and the end users goals as these can be quite different. The end user should have more of
          an impact as to how your site is presented, however, as the end user is the main audience who will be using the site. Organizing information correctly is important so that the end user can get to what they need quickly and easily without confusion.
          Labeling information is also as important and should be simple and easy to understand. In the lab we discussed this in more depth by thinking about organising information and how a user would get to where they need to be. We were given a set
          of cards and were told to organise them into categories depending on what we thought was best. These cards containted a variety of things that can be founded at a standard resort park. We decided on 4 main categories places, entertainment, services
          and physical activities, however the last one could be split down as it is quite large and contains a lot of water sports, however, the user would know to go to this category if they want to know about an outdoor activities that exist so it
          would work fine.
        </p>




        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk13">
        <header>
          <h2>Web Foundations Worklog Week #13</h2>
        </header>
        <p>
          This week we learnt the basics of php scripting using our virtual machines. We created a series of basic programs such as echo “hello world” with variables, concatenation, basic arithmetic such as adding and subtracting numbers with parameters and variables,
          using loops to generate a message with conditions and then we looked at some special variables for php as well as how to access forms and files with php.
        </p>

        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk12">
        <header>
          <h2>Web Foundations Worklog Week #12</h2>
        </header>
        <p>
          This week we took a look at some basic scripting with an example of a stick figure game. We set this game up on a basic webpage on our servers and then proceeded to try and change the code in our browsers to cheat the game and get the highest score out
          of the group. This was rather interesting and you can find an example of the code we examined running below:
        </p>
        <h3>Stick figures on Canvas - Walking</h3>



        <canvas id="canvas" width="800" height="400"></canvas>
        <button id="startstop" aria-label="Stop and Start Walking" onclick="startStopWalking()">Start/Stop</button>
        <div class="parameter">Speed:
          <input type="range" id="slider" oninput="setSpeed(this.value);">
        </div>



        <p>
          <a href="https://github.com/portsoc/Web-Canvas-Stick-Figures/tree/master/static" title="Takes you to the github page for the code used in the above animation">Source</a>
        </p>
        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk11">
        <header>
          <h2>Web Foundations Worklog Week #11</h2>
        </header>
        <p>
          This week we discussed plans for our website coursework submission and also took a look at an example website that our teachers had created. From here we discussed varies ideas that we could use, layout methods, media, etc. I began work on my website
          this week and made quite a bit of progress. I started out planning what pages I needed and played around with a theme until I found one I liked.
        </p>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk10">
        <header>
          <h2>Web Foundations Worklog Week #10</h2>
        </header>
        <p>
          This week we discussed the efficiency and productivity in web programming, primarily focusing on useful editors for programming with. We were introduced to atom, a relatively new editor that has a large community and is able to take community add-ons,
          making it very flexible. It has a wide range of features that allows it to be very efficient when programming a website, such as snippets which allow you to auto generate skeleton code when typing a certain piece of text, e.g. auto generate
          a basic <abbr title="Hypertext Markup Language">HTML</abbr> page.
        </p>
        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk09">
        <header>
          <h2>Web Foundations Worklog Week #09</h2>
        </header>
        <p>
          This week we discussed the issue of standardization across multiple platforms as well as its importance in web design. One good example in the lecture was the idea of two different types of railway services being built at the same time at two opposite
          ends of a country. What would happen when they meet each other? Obviously because they don’t have a standard for the service yet they will end up being different sizes. This obviously causes a lot of different issues for the system as a whole
          which makes it more costly. Namely having to develop more than one type of product. This transfers across to web design as well. Web standards try to make everyone creating webpages on the web stick to a general format by trying to make code
          as understandable and as readable as possible. <abbr title="Hypertext Markup Language">HTML</abbr> is a strange language in the respect that you can make any type of tag you want and most browsers will still render it, after all a
          tag is just a space with a name. So the standards have tried to make a certain set of tags the “proper” tags to use and this should be used by everyone to make their code more valid. To check if your code is valid you can use W3’s validators
          which will check <abbr title="Hypertext Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr>.
        </p>
        <ul>
          <li><a href="https://validator.w3.org/" title="W3C HTML Validation Service" rel="external">W3C <abbr title="Hypertext Markup Language">HTML</abbr> Validator</a></li>
          <li><a href="http://jigsaw.w3.org/css-validator/#validate_by_input" title="W3C CSS Validation Service" rel="external">W3C <abbr title="Cascading Style Sheets">CSS</abbr> Validator</a></li>
        </ul>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk08">
        <header>
          <h2>Web Foundations Worklog Week #08</h2>
        </header>
        <p>
          This week we discussed design and how it is a very important part of the web development process. We discussed three types of design:
        </p>

        <ul>
          <li>1. Information Design</li>
          <li>2. Interaction Design</li>
          <li>3. Technical and Architectural Design</li>
        </ul>

        <p>
          Information design is the design of the content of the site, i.e. what will be within the site.
        </p>
        <p>
          Interaction design takes into consideration the visual presentation and the navigational flow of the website.
        </p>
        <p>
          Technical and architectural design is a bit larger and contains, but is not limited to, the following;
        </p>

        <ul>
          <li> - Filesystem design </li>
          <li> - Access control </li>
          <li> - Hierarchic content </li>
          <li> - Common media </li>
          <li> - Web standards </li>
          <li> - Client hardware / environment </li>
          <li> - Expected load </li>
          <li> - Size </li>
        </ul>

        <p>
          In the lessons we took a look at a variety of websites and tried to guess their design principles based on what the sites where like e.g. who do you think their target audience is? What is its purpose? Etc.
        </p>
        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk07">
        <header>
          <h2>Web Foundations Worklog Week #07</h2>
        </header>
        <p>
          This week we learnt about the <abbr title="Scalable Vector Graphics">SVG</abbr> file format for images and how it is really useful. <abbr title="Scalable Vector Graphics">SVG</abbr> is a text based image file type which can be edited directly.
          You generate image files by directly programming or use a piece of software to draw and then allow the code to be generated for you. Either way you can still edit the code as you like which is incredibly useful.
        </p>
        <p>
          Due to it being made of text you get a higher chance of a higher ranking in search engines as they search for words not images. So using <abbr title="Scalable Vector Graphics">SVG</abbr> over another file type can benefit this.
        </p>
        <p>
          It is also a vector file type allowing it to be scalable. This means that because it is based of code and numbers if you increase or decrease the size of the image then all that happens is the numbers change, the quality does not.
        </p>
        <p>
          If you do this with a raster file type image then you will lose quality, especially if you zoom in.
        </p>
        <p>
          It can also be used in other language formats which is great as it means it can be polished off with <abbr title="Cascading Style Sheets">CSS</abbr> and put straight into <abbr title="Hypertext Markup Language">HTML</abbr>. Below is an example
          of a <abbr title="Scalable Vector Graphics">SVG</abbr> image being used in this site. The code for which is the following:
        </p>
        <p>&lt;svg id="circle" height="200"&gt;</p>
        <p>&lt;circle id="bluecircle" cx="45" cy="45" r="45" fill="blue"/&gt;</p>
        <p>&lt;/svg&gt;</p>


        <svg id="circle" height="200">
          <circle id="bluecircle" cx="45" cy="45" r="45" fill="blue" />
        </svg>



        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />


      <section id="wk06">
        <header>
          <h2>Web Foundations Worklog Week #06</h2>
        </header>
        <p>
          This week we discussed different types of media used on the web. In the lecture we discussed the variety of image formats that are currently in-use and with them their advantages and disadvantages. We also learnt about different ways of manipulating these
          images from within html and how images interact with other elements in html. We also learnt how to use the new <abbr title="Hypertext Markup Language">HTML</abbr>5 video tag. On this site's home page I have used this new tag to insert
          a basic introductory video (this has been removed since the original making of this site). To do this I used the following code, with varying different filetypes/codecs for different browser support. One can go even further and included versions
          specificlly for mobile devices, e.g. smaller file sizes etc.
        </p>
        <p>&lt;video controls preload&gt;</p>
        <p>&lt;source src="video/introlow.mp4" type="video/mp4"/&gt;</p>
        <p>&lt;source src="video/introhigh.mp4" type="video/mp4"/&gt;</p>
        <p>&lt;source src="video/intro.ogg" type="video/ogg"/&gt;</p>
        <p>&lt;source src="video/intro.webm" type="video/webm"/&gt;</p>
        <p>This browser does not support HTML 5 video.</p>
        <p>&lt;/video&gt;</p>
        <p>
          The above code generates a <abbr title="Hypertext Markup Language">HTML</abbr>5 video player which preloads on the site (meaning the browser is told to load this as a high priority than other items), as well as including controls for the player.
          Then after the opening tag there are four source tags which include a high and low quality mp4, ogg and webm formats to support most common browsers. After these there is a single line of text which is only displayed if the browser cannot open
          any of the source files.
        </p>

        <footer>

          <address>
By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
</address>
        </footer>
      </section>



      <hr />

      <section id="wk05">
        <header>
          <h2>Web Foundations Worklog Week #05</h2>
        </header>
        <p>
          This week we continued from last week by looking at what exactly a literature review is, what its purpose is, how it’s written etc. This was very useful as I had never written one before and was unsure as to how to go about the process. We also continued
          reading and finding sources to use while in the labs.
        </p>
        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk04">
        <header>
          <h2>Web Foundations Worklog Week #04</h2>
        </header>
        <p>
          We began work on our coursework this week and started researching for our literature review. In the lecture we were given advice on how to best write academically as well as how to research and reference. We began our reading in the labs and continued
          this outside the class to get a good picture of the subject that we chose to write our literature review on.
        </p>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk03">
        <header>
          <h2>Web Foundations Worklog Week #03</h2>
        </header>
        <p>
          We were introduced to the idea of separating form and content and how it is important when designing and implementing websites. We learnt that descriptive markup is preferable over procedural markup as it is easier to maintain, generally has smaller file
          sizes, and has increased semantic coding which means that more content can be processed by the machine itself. We also learnt some basic <abbr title="Cascading Style Sheets">CSS</abbr> and began adding <abbr title="Cascading Style Sheets">CSS</abbr>          to our webpages that we made the week before, as well as updating some of the <abbr title="Hypertext Markup Language">HTML</abbr> with new tags. The general outline for <abbr title="Cascading Style Sheets">CSS</abbr> syntax is as follows;
        </p>


        <p>selector {</p>
        <p>&nbsp;&nbsp;property: value;</p>
        <p>&nbsp;&nbsp;property: value;</p>
        <p>&nbsp;&nbsp;property: value;</p>
        <p>}</p>


        <p>
          We also learnt the different ways of implementing <abbr title="Cascading Style Sheets">CSS</abbr> into a webpage as well as useful <abbr title="Hypertext Markup Language">HTML</abbr> elements and <abbr title="Cascading Style Sheets">CSS</abbr>          properties as well as Class and ID selectors.
        </p>
        <footer>

          <address>
    By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
  </address>
        </footer>
      </section>

      <hr />

      <section id="wk02">
        <header>
          <h2>Web Foundations Worklog Week #02</h2>
        </header>
        <p>
          We created a basic <abbr title="Hypertext Markup Language">HTML</abbr> file with a &lt;!doctype <abbr title="Hypertext Markup Language">HTML</abbr>&gt; tag, a &lt;title&gt; tag, a &lt;h1&gt; tag and a &lt;p&gt; tag. We then uploaded this to
          our virtual machines and displayed it on our web server using secure shell. We had to use the following commands to access the file and run the server.
        </p>
        <ul>
          <li>
            1. cd me
            <em>(to access the folder where the web page is saved, in this case “me”)</em>
          </li>
          <li>
            2. http-server
            <em>(to run the web server)</em>
          </li>
        </ul>

        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />

      <section id="wk01">
        <header>
          <h2>Web Foundations Worklog Week #01</h2>
        </header>
        <p>
          We were introduced to the course and showed how to access the coursework as well as being shown an outline of the coursework. We also set up our virtual machines for use throughout the rest of the year.
        </p>
        <footer>

          <address>
          By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
        </address>
        </footer>
      </section>

      <hr />


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
    <img id="logo" src="../images/Matts-Logo.jpg" alt="Matchoo - Logo">
    <p>Copyright 2015-2016 <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>.</p>
  </footer>

<script src="js/script.js"></script>
</body>

</html>
