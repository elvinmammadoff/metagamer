<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title -->
  <title>Documentation - Nays Slider</title>

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/main.css">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Raleway:300i,400,600,700" rel="stylesheet">

  <!-- Place favicon.ico in the root directory -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>

<body>

  <header id="site-header">

    <div class="row">

      <div class="large-10 large-centered columns">

        <div class="name">
          <h3>MetaGamer</h3>
          <p>Premium Bootstrap HTML Template Documentation</p>
        </div>

        <ul class="meta">
          <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
          <li><strong>Live Preview:</strong> <a href="https://metagamer.netlify.app/">View Demo</a></li>
          <li><strong>Support:</strong> <span style="font-weight: 300;">alissioteam@gmail.com</span></li>
        </ul>

        <p>Thank you for purchasing my product. <br> If you have any questions that are beyond the scope of this help
          file, <br> please feel free to email via my user page contact form here.<br> Thanks so much!</p>

      </div>


    </div>

  </header>

  <section id="site-body">

    <div id="container" class="row">

      <div id="sidebar" class="large-3 large-push-9 columns" data-magellan-expedition="fixed">

        <div class="sticky">

          <h3>Table of Contents</h3>
          <ol>
            <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
            <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
            <ul>
              <li data-magellan-arrival="skeleton-details"><a href="#skeleton-details">Skeleton Details</a></li>
            </ul>
            <li data-magellan-arrival="css-files"><a href="#css-files">CSS Files</a></li>
            <li data-magellan-arrival="javascript-files"><a href="#javascript-files">Javascript Files</a></li>
            <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
            <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
            <li data-magellan-arrival="files-resources"><a href="#php-file">PHP Code Explanation</a></li>
            <li data-magellan-arrival="files-resources"><a href="#updates">Regular Updates</a></li>
          </ol>

        </div>

      </div>

      <div id="main-content" class="large-9 large-pull-3 columns">

        <section id="introduction" class="section" data-magellan-destination="introduction">

          <h1>Howdy!</h1>
          <p class="lead">You are a shining owner of a regular license based on MetaGamer - Game & Gaming Html Template.
          </p>
          <p>First of all, Thank you so much for purchasing this product and for being my loyal customer. You are
            entitled to get free updates to this product + exceptional support (as per market policy) from the author
            directly.</p>
          <p>This documentation is to help you understand the product code structure. Please go through the
            documentation carefully to understand how this product is made and how to edit this properly. Basic HTML and
            CSS knowledge is required to customize.</p>

        </section>

        <section id="getting-started" class="section" data-magellan-destination="getting-started">

          <h1>1. Getting Started</h1>

          <br>

          <p>When you are ready to use this product, you must first upload the files to a local or remote server. In
            this regard, unzip the package you have downloaded from themeforest. In extracted folder you can see
            following folders:
          <p>

          <h3>Package contents:</h3>

          <ul>
            <li><strong>index.html</strong> — Main HTML file of the project. You'll upload on your server.</li>

            <li><strong>assets</strong> — Contains all the original product files comprises of CSS, JS etc. This is the
              folder which you'll upload on your server after necessary modifications.</li>

            <li><strong>documentation</strong> — Inside this folder, you will find the same documentation updated with
              the latest changes.</li>

          </ul>

          <p>Details regarding contents and structure of <code>product</code> folder is given below.</p>

        </section>

        <section id="html-structure" class="section" data-magellan-destination="html-structure">

          <h1>2. HTML Structure</h1>

          <br>

          <p>This product is a responsive image slider which built with Bootstrap 5.0.x Framework and you can customize
            it very easily. All of the information within the main
            content area is nested within nav and div with an class of "loading-overlay", "carousel", "section" and
            "scroll-up".
            Here is the
            general
            structure. Note that for brevity, I am not including content that isn’t relevant to the
            technique.</p>

          <pre data-language="HTML Skeleton">
  <code class="language-markup">
  
    <!--========== Loading Overlay ==========-->
    <div class="loading-overlay">...</div>

    <!--========== Hero Layout ==========-->
    <div class="layout">

      <!--========== Carousel ==========-->
      <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">...</div>

      <!--========== Home Section ==========-->
      <div class="layer section" id="home">...</div>
      
      <!--========== New Challenges Section ==========-->
      <div class="section" id="new-ch">...</div>

      <!--========== Update Section ==========-->
      <div class="section cover update" id="update">...</div>
      
      <!--========== Game Section ==========-->
      <div class="section" id="games">...</div>
      
      <!--========== About Section ==========-->
      <div class="section" id="about">...</div>

      <!--========== Contact Section ==========-->
      <div class="section contact" id="contact">...</div>

    <!--========== Scroll Up ==========-->
    <div class="scroll-up">...</div>

    <!--========== Mobile Menu ==========-->
    <nav class="cd-nav-container burger-menu" id="cd-nav">...</nav>
  </div>
  
  </code>
  </pre>


        </section>
        <section id="skeleton-details" class="sub-section section" data-magellan-destination="skeleton-details">

          <h2>2.1. Skeleton Details</h2>

          <br>

          <p><code>div class="loading-overlay"</code> contains the code for page loader details</p>
          <p><code>div class="layout"</code> contains the code for content details</p>
          <p><code>div class="scroll-up"</code> contains the code for back to top details</p>
          <p><code>nav class="cd-nav-container burger-menu" id="cd-nav"</code> contains the code for mobile menu details
          </p>

        </section>
        <section id="css-files" class="section" data-magellan-destination="css-files">

          <h1>3. CSS Files</h1>

          <br>

          <p>We're using four CSS files in this product.

          <ul>
            <li><strong>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css</strong> — Bootstrap
              Framework 5.0.2. This outsourcing CSS design file is an open source toolkit for developing with HTML, CSS,
              and JS. Quickly prototype your ideas or build your entire app with responsive grid system.</li>

            <li><strong>slick.css</strong>, <strong>slick-theme</strong> is a responsive carousel jQuery plugin that
              supports multiple breakpoints, CSS3 transitions, touch events/swiping & much more.</li>

            <li><strong>touch-sideswipe.css</strong> widget-library for mobile navbar (vanilla js and little bit pure
              css)</li>

            <li><strong>style.css</strong> — custom style file.</li>

          </ul>

          <p>The fourth file contains all of the specific stylings for the page. The file is separated into sections
            using:</p>

          <pre data-language="Folder Map" class="css">
@charset "UTF-8";

/*
  Theme Name: MetaGamer
  Theme URI: themeforest.net/user/alissio
  Author: Alissio
  Author URI: metagamer.netlify.app
  Description: Alissio – Game & Gaming HTML Template
  License: GNU General Public License v2 or later
  License URI: www.gnu.org/licenses/gpl-2.0.html
  Tags: one-column, two-columns, three-columns, custom-colors, custom-header, custom-menu, custom-logo, featured-images, post-formats, sticky-post, theme-options, threaded-comments, translation-ready
  Text Domain: metagamer
  Version: 1.0.0
*/


/* ========================

[Index]
1. Global
1.1 Icomoon Custom Icon Font
1.2 General
1.3 Scrollbar
1.4 Scroll Up
1.5 Loading Overlay
2. Carousel
3. Header
3.1 Header General
3.2 Navbar
3.3 Mobile Right Menu
4. Custom Slick Slider
5. Card
    5.1 Card General
    5.2 Challenge
    5.3 Games
    5.4 Update
    5.5 Features
    5.6 About
        5.6.1 About General
        5.6.2 Follow Social
        5.6.3 Subscribe
        5.6.4 Contact
    5.7 Reviews
6. Footer
7. Responsive


======================== */


/*======
*
* 1. Global
*
======*/
/*====== 1.1 Icomoon Custom Icon Font ======*/

@font-face {
  font-family: 'metaicon';
  src: url('../fonts/iconfont/metaicon.eot?bjwbjx');
  src: url('../fonts/iconfont/metaicon.eot?bjwbjx#iefix') format('embedded-opentype'),
      url('../fonts/iconfont/metaicon.ttf?bjwbjx') format('truetype'),
      url('../fonts/iconfont/metaicon.woff?bjwbjx') format('woff'),
      url('../fonts/iconfont/metaicon.svg?bjwbjx#metaicon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

i {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'metaicon' !important;
  speak: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-xbox:before {
  content: "\e900";
}

...
...
...

/*======
*
* 7. Responsive
*
======*/
@media (max-width: 425px) {
    .update-stats {
        justify-content: center;
    }

    .fcopy-nav {
        flex-direction: column;
    }

    .subs-area {
        border: none;
        padding: 0;
    }

    .subs-form {
        padding: 2rem 1rem;
    }
}
</pre><br>

          <p>All styling related files of this product can be found in this folder path <code>assets/css</code></p>

          <pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |__
      |-- style.css
      |__ plugins/
        | 
        |-- slick.css
        |-- slick-theme.css
        |-- touch-sideswipe.css
  </code>
</pre>

          <br>
          <p>
            As it can be seen, the folder contains one main <code>css</code> file and one <code>folder</code> which
            contains plugins style file.<br>
          </p>
        </section>

        <section id="javascript-files" class="section" data-magellan-destination="javascript-files">

          <h1>4. Javascript Files</h1>

          <br>

          <p>This product imports six Javascript file.</p>

          <ul>
            <li><strong>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js</strong> —
              Bootstrap Framework 5.0.2. This outsourcing file is an open source toolkit for developing with HTML, CSS,
              and JS. Quickly prototype your ideas or build your entire app with responsive grid system.</li>

            <li><strong>jquery-2.1.1.min.js</strong> — jquery is a package that makes things like HTML document
              traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that
              works across a multitude of browsers.</li>

            <li><strong>jquery.mousewheel.min.js</strong> — A jQuery plugin that adds cross-browser mouse wheel support
              with delta normalization.<br>
              In order to use the plugin, simply bind the mousewheel event to an element.<br>
              It also provides two helper methods called mousewheel and unmousewheel that act just like other event
              helper methods in jQuery.</li>

            <li><strong>jquery.easing.min.js</strong> a jQuery plugin from GSGD to give advanced easing options.</li>

            <li><strong>slick.min.js</strong> is a responsive carousel jQuery plugin that supports multiple breakpoints,
              CSS3 transitions, touch events/swiping & much more.</li>

            <li><strong>main.js</strong> contains all the custom programmed javascript coded specifically for this
              template.
            </li>

          </ul>

          <p>This files contains all of the specific action effects for the page. The file is separated into sections
            using:</p>

          <pre data-language="Folder Map" class="js">

/*********************************************************************************

    Version: 1.0

    Note: This is main js. All custom scripts here.

**********************************************************************************/


/*======
*
* MetaGamer Scripts
*
======*/


/*===============================================================================

    [ INDEX ]
    |
    |___ Mobile Menu
    |___ Affix Navbar
    |___ Loading Overlay
    |___ Page Scrolling
    |___ Custom Slick
    |___ Scroll Up
    |

================================================================================*/

(function ($) {
    'use strict';


    /*======
    *
    * Mobile Menu
    *
    ======*/
    //open left menu clicking the left menu icon
    $('.left_menu_icon').on('click', function (event) {
        event.preventDefault();
        toggleLeftNav(true);
        $("body").css({ 'overflow': 'hidden' });
    });

...
...
...

/*======
*
* Scroll Up
*
======*/
var bodyH = document.body.offsetHeight;
var winH = window.innerHeight;
$(document).on('scroll', function () {
    var scrollH = window.scrollY;
    var scrollCalc = Math.max(((scrollH + winH) * 100) / bodyH);
    var scrollPercent = Math.trunc(scrollCalc) + "px";
    document.getElementById("scrollH").style.height = scrollPercent;
    if (Math.trunc(scrollCalc) > 20) {
        document.getElementById("scrollH").style.visibility = 'visible';
    } else {
        document.getElementById("scrollH").style.visibility = 'hidden';
    }
    if ($(window).scrollTop() > 100) {
        $('.scroll-up').addClass('show');
    } else {
        $('.scroll-up').removeClass('show');
    }
});

$('.scroll-up').on('click', scrollToTop);

function scrollToTop() {
    var verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0,
        element = $('body'),
        offset = element.offset(),
        offsetTop = offset.top;
    $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
}


})(jQuery);
</pre><br>

          <p>All client-side related javascript files can be found in this folder path
            <code>assets/js</code>
          </p>

          <pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |__    
      |-- main.js
      |__ /plugins
        |
        |-- jquery-2.1.1.min.js  
        |-- jquery.mousewheel.min.js
        |-- jquery.easing.min.js      
        |-- slick.min.js
  </code>
</pre>

          <br>
          <p>
            As it can be seen, the folder contains one main <code>css</code> file and one <code>folder</code> which
            contains plugins js file.<br>
          </p>
        </section>

        <section id="support-desk" class="section" data-magellan-destination="support-desk">

          <h1>5. Support Desk</h1>

          <br>

          <p>Please be reminded that you have purchased a very affordable product and you have not paid for a full-time
            web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower
            priority due to their nature.</p>


          <section class="sub-section">

            <h2>Support for my items includes:</h2>

            <br>

            <ul>
              <li>Responding to questions or problems regarding the item and its features</li>
              <li>Fixing bugs and reported issues</li>
              <li>Providing updates to ensure compatibility with new software versions</li>
            </ul>

          </section>

          <section class="sub-section">

            <h2>Item support does not include:</h2>

            <br>

            <ul>
              <li>Customization and installation services</li>
              <li>Support for third party software and plug-ins</li>
            </ul>

          </section>

          <section class="sub-section">

            <h2>Before seeking support, please...</h2>

            <br>

            <ul>
              <li>Make sure your question is a valid item issue and not a customization request.</li>
              <li>Make sure you have read through the documentation or any related video guides before asking support on
                how to accomplish a task.</li>
              <li>Make sure to double check the item FAQs.</li>
              <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a
                mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
              <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple
                "Google Search". You might want to try that before seeking support. You might be able to fix the issue
                yourself much quicker than we can respond to your request.</li>
              <li>Make sure to state the name of the item you are having issues with when requesting support via
                ThemeForest.</li>
            </ul>

          </section>

          <p><a href="https://hasthemes.com/contact-us/" rel="nofollow"><strong>Create A Ticket here if you need any
                support for the item purchased.</strong></a></p>
          <p><a href="https://hasthemes.com/contact-us/" rel="nofollow"><strong>Have a question? Need clarification?
                Feel free to Contact Us if you have a pre-sale question</strong></a></p>
          <p><a href="https://hasthemes.com/contact-us/" rel="nofollow"><strong>Send a custom job proposal</strong></a>
          </p>


        </section>

        <section id="files-resources" class="section" data-magellan-destination="files-resources">

          <h1>6. Files &amp; Resources</h1>

          <br>

          <p>The product uses following resources by third parties.
          <p>


          <ul>
            <li><a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">Bootstrap
                5.0.2</a></li>
            <li> <strong>Font used</strong>
              <ul>
                <li><a href="https://fonts.google.com/specimen/Nunito+Sans" target="_blank">Nunito Sans</a></li>
              </ul>
            </li>
          </ul>

        </section>

        <section id="php-file" class="section" data-magellan-destination="php-file">

          <h1>7. PHP Code Explanation</h1>

          <br>

          <p><code>index.php</code> file for deploy and init on docker container, netlify or heroku
          <p>

        </section>

        <section id="updates" class="section" data-magellan-destination="updates">

          <h1>9. Regular Updates</h1>

          <br>

          <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new
            awesome features, updates generally come at least twice a month.
          <p>

          <pre class="css">

  V. 1.0.0 – 4.11.2023
  - Initial release
</pre>
        </section>

        <footer>
          <p>© Documentation - MetaGamer</p>
        </footer>

      </div>

    </div>

  </section>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/prism.js"></script>
  <script src="js/main.js"></script>
</body>

</html>