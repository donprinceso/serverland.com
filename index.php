<!doctype html>
    <html lang="en">
	<head>
            <meta charset="utf-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>

            <meta name="description" content="Serverland the one number website that give you the update information that you need"/>
            <meta name="author" content="ServerLand Tech"/>
            <link rel="icon" href="../../favicon.ico"/>

            <title>Blog Template</title>
            <!-- W3-school core CSS -->
            <link href="W3-school/w3css.css" rel="stylesheet"/>
            <!-- Bootstrap core CSS -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="assets/css/bootstrap.css" rel="stylesheet"/>

            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"/>

            <!-- Custom styles for this template -->
            <link href="syteme/blog.css" rel="stylesheet"/>
            <link href="syteme/post-main.css" rel="stylesheet"/>
        </head>
	<body>

            <div class="blog-masthead navbar-fixed-top top-nav">
                        <div class="container">
                          <nav class="blog-nav">
                            <a class="blog-nav-item active" href="#">Home</a>
                            <a class="blog-nav-item" href="#">Letest</a>
                            <a class="blog-nav-item" href="#">Sport</a>
                            <a class="blog-nav-item" href="#">Gist</a>
                            <a class="blog-nav-item" href="#">Education</a>
                            <a class="blog-nav-item" href="#">News</a>
                            <a class="blog-nav-item" href="#">About</a>
                          </nav>
                        </div>
            </div>

            <div class="container warpper">

                    <div class="blog-header">
                      <h1 class="blog-title">Server Land News</h1>
                      <p class="lead blog-description">The Number one information site.</p>
                    </div>

                <div class="blog-masthead">
                      <div class="container">
                        <nav class="blog-nav">
                         <a class="blog-nav-item active" href="#">Home</a>
                          <a class="blog-nav-item" href="#">Letest</a>
                          <a class="blog-nav-item" href="#">Sport</a>
                          <a class="blog-nav-item" href="#">Gist</a>
                          <a class="blog-nav-item" href="#">Education</a>
                          <a class="blog-nav-item" href="#">News</a>
                          <a class="blog-nav-item" href="#">About</a>
                        </nav>
                      </div>
                  </div>
        <br/>

        <div class="blog-post">
            <?php
            include 'inculdes/include.php';

        $blogPosts = GetBlogPost();
            foreach ($blogPosts as $post): ?>

                        <div class="auto-style3 w3-card-2 w3-margin-bottom w3-white">
                        <div class="auto-style6 w3-btn w3-block w3-light-gray">
                        <h3> <?php echo $post->title ?></h3>
                        </div>
                        <div class="auto-style1">
                        <img src="img/img_fjords.jpg" style=" width: 100%" class="w3-hover-opacity"/>
                        </div>
                        <div class="auto-style2">
                        <span class="w3-block blog-tag">
                            Posted By: <?php echo $post->author; ?>
                            Posted On: <?php echo $post->datePosted ?>
                            Tags: <?php echo $post->tags ?>
                        </span>
                        <br/>
                        <br/>
                        <p style="width: 350px;"><?php echo $post->post ?></h1>
                        </div>
                        <div class="auto-style5">
                                <a class="btn btn-block btn-primary">READ MORE</a>
                        </div>
                        </div>

                    <?php endforeach; ?>
        </div>

     <div class="blog-sidebar">
         <div class="w3-card-2 w3-container w3-margin-bottom w3-padding-small">
             <input type="text" placeholder="Search" class="w3-input"/>
             <button class="w3-btn w3-light-gray w3-round">Search</button>
         </div>

         <div class="w3-card-4 w3-container w3-margin-bottom">
             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FServerLandnews%2F&tabs&width=280&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
         </div>

         <div class="w3-container w3-card-4 w3-margin-bottom">
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openTab(event, 'Popular');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Popular</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Trending');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Trending</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Comments');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Comments</div>
    </a>
  </div>

  <div id="Popular" class="w3-container tab active" style="display:block">
      <br/>
    <h4>Popular</h4>

    <div class="row">
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>
    <div class="row">
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>
    <div class="row">
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>

  </div>

  <div id="Trending" class="w3-container tab" style="display:none">
      <br/>
    <h4>Trending</h4>
     <div>
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>
          <div>
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>
          <div>
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>
          <div>
              <a href="read-news.php"><img src="res/imgs/1.jpg" class="img-responsive img-thumbnail" width="100px" height="100px">
                  <h5>Abia Poly Entrance Exam and cut off marks</h5></a>
          </div>

  </div>

  <div id="Comments" class="w3-container tab" style="display:none">
      <br/>
    <h4>Comments</h4>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>

<script>
function openTab(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>

<div class="w3-card-4 w3-container w3-margin-bottom">

</div>
<div class="w3-card-4 w3-container w3-margin-bottom">

</div>
<div class="w3-card-4 w3-container w3-margin-bottom">

</div>
     </div>
        <br/>
        <nav class="bar">
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

    <footer class="blog-footer">
      <p>Design By <a href="#">ServerLand Tech</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
