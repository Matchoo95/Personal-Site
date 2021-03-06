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
      <h1><br />Matthew Hawkins<br />Personal Website and Portfolio</h1>
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

    <h2>Sustainable Computing - A Literature Review</h2>


        <p>
          With any sector of business in the world, environmental sustainability is an important issue to address. With the massive increase in technological demands (MacAuley, Palmer, & Cline, 2001, p. 6), the production of electronics has increased greatly and is causing many issues to sustainability, the environment and health and safety.
</p>
        <p>
          Although it isn’t sustainable, Bossuet makes the point that a family car driven for 100 km is more of an environmental impact than a mobile device from its design to recycling (Bossuet, 2014, p. 2). Despite this, the current electronics industry is not sustainable, this is exceptionally clear when looking at the massive amount of waste generated each year. A recent report estimates that the total WEEE (Waste Electrical and Electronic Equipment) production for 2014 was 41.8 million metric tonnes, (Baldé, Wang, Kuehr, & Huisman, 2015, pp. 12-13). This large amount of excess waste comes from different areas of a products lifespan with varying degrees of waste per area but the most concerning thing is that the amount of secondary materials used in the manufacturing stage, is much greater than that of the end product itself. For example, a 32MB, chip which would weigh around 10g or less, uses up secondary fossil fuels from anywhere between 1200g to 2300g (Pérez-Belis, Bovea, & Ibáñez-Forés, 2015, p. 6). There is also the fact that certain materials used in the production of electronic products are gradually becoming more and more rare, for example Indium (which is used to create indium tin oxide for LCD screens and solar panels) will be “severely depleted by the early 2020s” (Izatt, Izatt, Bruening, Izatt, & Moyer, 2014, p. 8)
</p>
        <p>
          While a lot of countries and regions have a variety of different policies in place to control WEEE, it is clear that on a global scale it is still a big issue. It is clear that improving already existing recycling systems, can be a good strategy to the WEEE issue and to the sustainability of electronic manufacturing. As (Li, Zeng, Chen, Ogunseitan, & Stevels, 2015, pp. 1-2) points out it can “close the loop” of depletion of important materials such as Indium and other rare materials needed in the manufacturing of computing electronics. There is also the issue of gaps in in the control and implementation of regulations in certain regions of the world which pose other issues as well as sustainability, such as health hazards and environmental impact, among others. A paper on the overview of E-waste in China points out that the mean concentration of lead in the blood of children living in Guiyu, China, have 5.3 micrograms per deciliter higher than what is considered blood poisoning, 10 micrograms per deciliter, (Lu et al., 2015, p. 2). Guiyu is known to be a “notorious destination for improper waste electronic and electric equipment recycling” (Lu et al., 2015, p. 2). There are many countries and regions around the world with similar issues.
</p>
        <p>
          It is clear to some extent that regulations need to be improved for recycling, not just to help with sustainability. Indeed according to (Laseter, Ovchinnikov, & Raz, 2010, p. 2) only 15% of electronic waste was recycled in past decade. We somehow need to turn this around to prevent the running out of scarce materials such as Indium as discussed before. The same paper (Laseter et al., 2010, p. 3) also suggests that examining the effects across the entire product lifecycle as well as noting economic incentives for businesses in the industry  as a means of reducing the amount of waste produced and overall increasing the amount of recycling of the waste that is produced. (Li et al., 2015, p. 2) also suggested that incentives for manufacturers, retailers and consumers be implemented as a way to combat this issue. This should be a rather effective way to reduce the negative impacts. If people from various aspects of a products life cycle, whether they be businesses or the consumer, are given incentives during the making, selling, using and disposing of electronic devices then the percentage of WEEE that is disposed of in an environmentally friendly and sustainable manner will surely increase each year.
</p>
        <p>
          In terms of sustainability, consumer participation maybe the greatest factor in keeping the electronics industry sustainable so that we do not run out of the rare materials we currently use in the manufacturing process. Again, this is where incentives for recycling help to get those materials back to the manufacturers. During the 1990’s, in Sweden and Germany, “Extended Producer Responsibility” emerged. It is a policy strategy that “aims at creating incentives for the production of environmentally friendly products, implementing the cost of waste management into product prices and shifting the burden of waste management to firms and consumers” (Lifset, Atasu, & Tojo, 2013, p. 1). Panambunan-Ferse and Breiter suggests that we apply the EPR approach globally to reduce the E-waste issue. They make the point that the amount of E-waste is rapidly growing globally, and it is affecting both developed and less-developed countries. (Panambunan-Ferse & Breiter, 2013, p. 3). I agree with this and think that, if done correctly, could produce a good set of policies that would help sustainability on a global scale. The only issue with EPR is that it is less incentive based which could then reproduce such issues to health and safety as we are currently seeing in Guiyu, China as manufacturers attempt to cut corners or break the policy rules to suit them and increase their profit margin.
</p>
        <p>
          In conclusion, this literature review lightly skims the surface of the issue of E-waste and WEEE upon the sustainability of future computing hardware among other issues that come with E-waste and WEEE as well as raising some thoughts as to how to solve these issues with mainly the increase in recycling and regulations as well as incentives for the different people and organizations that are involved in each of the stages of a devices lifetime, from its design to its end life.
</p>

  <h3>References</h3>

        <ul>
          <li>
            <p>Baldé, C., Wang, F., Kuehr, R., & Huisman, J. (2015). The global E-waste monitor 2014. <em>United Nation University.</em></p>
          </li>
          <li>
            <p>Bossuet, L. (2014). Sustainable electronics: On the trail of reconfigurable computing. <em>Sustainable Computing: Informatics and Systems, 4</em>(3), 196-202. doi: <a href="http://dx.doi.org/10.1016/j.suscom.2014.07.001">http://dx.doi.org/10.1016/j.suscom.2014.07.001</a></p>
          </li>
          <li>
            <p>Izatt, R. M., Izatt, S. R., Bruening, R. L., Izatt, N. E., & Moyer, B. A. (2014). Challenges to achievement of metal sustainability in our high-tech society. <em>Chemical Society Reviews, 43</em>(8), 2451-2475.</p>
          </li>
          <li>
            <p>Laseter, T., Ovchinnikov, A., & Raz, G. (2010). Reduce, Reuse, Recycle... or Rethink. <em>Strategy+ Business, 61.</em></p>
          </li>
          <li>
            <p>Li, J., Zeng, X., Chen, M., Ogunseitan, O. A., & Stevels, A. L. (2015). “Control-Alt-Delete”: Rebooting Solutions for the E-waste Problem. <em>Environmental science & technology.</em></p>
          </li>
          <li>
            <p>Lifset, R., Atasu, A., & Tojo, N. (2013). Extended Producer Responsibility. <em>Journal of Industrial Ecology, 17</em>(2), 162-166.</p>
          </li>
          <li>
            <p>Lu, C., Zhang, L., Zhong, Y., Ren, W., Tobias, M., Mu, Z., . . . Xue, B. (2015). An overview of e-waste management in China. <em>Journal of Material Cycles and Waste Management, 17</em>(1), 1-12.</p>
          </li>
          <li>
            <p>MacAuley, M. K., Palmer, K. L., & Cline, S. A. (2001). <em>Modeling the costs and environmental benefits of disposal options for end-of-life electronic equipment: the case of used computer monitors</em>: Resources for the Future.</p>
          </li>
          <li>
            <p>Panambunan-Ferse, M., & Breiter, A. (2013). Assessing the side-effects of ICT development: E-waste production and management: A case study about cell phone end-of-life in Manado, Indonesia. <em>Technology in Society, 35</em>(3), 223-231. doi:
              <a
                href="http://dx.doi.org/10.1016/j.techsoc.2013.04.002">http://dx.doi.org/10.1016/j.techsoc.2013.04.002</a>
            </p>
          </li>
          <li>
            <p>Pérez-Belis, V., Bovea, M., & Ibáñez-Forés, V. (2015). An in-depth literature review of the waste electrical and electronic equipment context: Trends and evolution. <em>Waste Management & Research, 33</em>(1), 3-29.</p>
          </li>
        </ul>

        <footer>
          <abbr title="17th of November 2015">
              2015/11/17
            </abbr>
          <address>
              By <a href="../about.php" title="About Matthew Hawkins">Matthew Hawkins</a>
            </address>
        </footer>

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

<!--  <script src="js/script.js"></script> -->
</body>

</html>
