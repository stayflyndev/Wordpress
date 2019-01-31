<?php /* Template Name: Portfolio  */ ?>

 
<?php get_header();?>
<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo get_template_directory_uri(); ?> /home">I am Tori</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>  /contact">Contact <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-link">
            <?php Echo "<a href=https://github.com/yourtechsis> github </a>"?>         
             </li>
           
        </div>
      </nav>
    </header>

<center> <h1> Examples </h1> </center ><br>
<div class="container marketing">


<div class="card-deck">
  <div class="card">
    <img src="<?php echo get_template_directory_uri() . '/images/met-gala.jpg;' ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Melanaires</h5>
      <p class="card-text">Full stack App using React and Redux.</p>
      <p class="card-text"><small class="text-muted">DEMO</small></p>
      <a class="btn" href="https://blooming-inlet-27420.herokuapp.com/"> See Demo </a>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo get_template_directory_uri() . '/images/ylmu.jpg;' ?>" " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">You Lift Me up</h5>
      <p class="card-text">Motivational App inspired by emotions.</p>
      <a class="btn" href="https://yourtechsis.github.io/ylmu/"> See Demo </a>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo get_template_directory_uri() . '/images/images.jpg;' ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Image Search</h5>
      <p class="card-text">Search for images using an API
      <p class="card-text"><small class="text-muted">See Demo</small></p>
      <a class="btn" href="https://desolate-reef-11227.herokuapp.com/"> See Demo </a>

  


    </div>
  </div>
</div>

<?php get_footer();?>