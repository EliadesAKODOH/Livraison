<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> 
    <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-truck" style="font-size: 35px"></i>
            <h1 class="tm-site-name">Livraison Sharp</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-shopping-basket" ></i>
                  <span>Produits</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>A propos</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Offres spéciales</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">Produits Alimentaires</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Produits Laitiers</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Produits Surgelés</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              
              <div class="tm-list">
                @forelse($alimentaires as $alimentaire)
                <div class="tm-list-item">
                <img class="tm-list-item-img" src="{{ asset('storage/'.$alimentaire->image) }}" alt="{{ $alimentaire->nom }}">
                <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$alimentaire->nom}}<span class="tm-list-item-price">{{$alimentaire->prix}} Fcfa</span></h3>
                     <p class="tm-list-item-description">{{$alimentaire->description}}</p>
                    <div class="container mt-5 d-flex justify-content-center">
                     <a href="" class="btn btn-warning">Ajouter au panier</a>
                    </div>
                  </div>
                </div>
                @empty
                <h1 style="color: aqua;">Aucun produit n'est actuellement disponible dans cette catégorie.</h1>
                @endforelse
              </div>
              
            </div>
<!-- Produit laitier -->
            <div id="hot" class="tm-tab-content">
              
            <div class="tm-list">
                @forelse($laitiers as $laitier)
                <div class="tm-list-item">
                <img class="tm-list-item-img" src="{{ asset('storage/'.$laitier->image) }}" alt="{{ $laitier->nom }}">
                <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$laitier->nom}}<span class="tm-list-item-price">{{$laitier->prix}} Fcfa</span></h3>
                     <p class="tm-list-item-description">{{$laitier->description}}</p>
                    <div class="container mt-5 d-flex justify-content-center">
                     <a href="" class="btn btn-warning">Ajouter au panier</a>
                    </div>
                  </div>
                </div>
                @empty
                <h1 style="color: aqua;">Aucun produit n'est actuellement disponible dans cette catégorie.</h1>
                @endforelse
              </div>
            </div>
     <!-- produit surgelés -->
            <div id="juice" class="tm-tab-content">
              
            <div class="tm-list">
                @forelse($surgeles as $surgele)
                <div class="tm-list-item">
                <img class="tm-list-item-img" src="{{ asset('storage/'.$surgele->image) }}" alt="{{ $surgele->nom }}">
                <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$surgele->nom}}<span class="tm-list-item-price">{{$surgele->prix}} Fcfa</span></h3>
                     <p class="tm-list-item-description">{{$surgele->description}}</p>
                    <div class="container mt-5 d-flex justify-content-center">
                     <a href="" class="btn btn-warning">Ajouter au panier</a>
                    </div>
                  </div>
                </div>
                @empty
                <h1 style="color: aqua;">Aucun produit n'est actuellement disponible dans cette catégorie.</h1>
                @endforelse
              </div>
            </div>
            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box-1">
              <h2 class="tm-text-primary tm-about-header">A propos de LS</h2>
              <div class="tm-list-item tm-list-item-2">
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p>Livraison Sharp est une application qui vous permet de faire vos achats dans un supermarché et de vous faire livrer très rapidement.</p>
                  <p>Vous avez la possibilité de choisir le supermarché dans lequel vous voulez faire vos achats.</p>
                </div>
              </div>
            </div>
            
          </div>
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special One</h2>
                  <p class="tm-special-item-text"></p>
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                  <p class="tm-special-item-text"></p>
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                  <p class="tm-special-item-text"></p>
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                  <p class="tm-special-item-text"></p>
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                  <p class="tm-special-item-text">.</p>
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                  <p class="tm-special-item-text"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Contactez <i>Livraison Sharp</i></h2>
              <p>Pour toute vos suggestions </p>
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>
    </div>
    <footer class="tm-site-footer">
      <p class="tm-black-bg tm-footer-text">Copyright 2024 Livraison Sharp

      | Design: <a href="https://www.tooplate.com" class="tm-footer-link" rel="sponsored" target="_parent">Tooplate</a></p>
    </footer>
  </div>

  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`));
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {

        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });


      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault();
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });

  </script>
</body>
</html>
