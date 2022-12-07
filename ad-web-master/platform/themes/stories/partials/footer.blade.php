{{-- <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Your Shopping Cart
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">
                <img src="storage/images/product1.jpg" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>please tell us your name, company, where to contact you and what time it is preferred</td>
              <td>CHF30.00 Price</td>
              <td class="qty"><input type="text" class="form-control whiteBack" id="input1" value="2"></td>
              <td>CHF 30.00 Price</td>
              <td>
                <a href="#" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">CHF 30.00</span></h5>
        </div>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success"><a href="cart">View Cart</a></button>
      </div>
    </div>
  </div>
</div> --}}

</main>
<!-- Footer Start-->
<footer class="footer-section">
  <div class="container">
  <div class="footer-cta pt-5 pb-5">
    <div class="heading text-center">
      <h1 class="">
        Get in touch
      </h1>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <i class="fas fa-map-marker-alt"></i>
          <div class="cta-text">
            <h4>Find us</h4>
            <span>Ringstrasse 11                              
              8107 Buchs Zurich Switzerland</span>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <div class="cta-text">
            <h4>Call us</h4>
            <span>Tel: +41 (0)44 844 44 77</span>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <div class="cta-text">
            <h4>Mail us</h4>
            <span> <a href="mailto:contact@amstaddigital.com" style="color: #d2d2d2;">contact@amstaddigital.com</a> </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-content pt-5 pb-5">
    <div class="row">
      <div class="col-xl-3 col-lg-3 mb-50">
        <div class="footer-widget">
          <div class="footer-logo footer-logo-center">
            <a href="home"><img src="storage/images/footer.png" class="img-fluid" alt="logo"></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-30">
        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>Useful Links</h3>
          </div>
          <ul>
            <li class="links"><a href="home">Home</a></li>
            <li class="links"><a href="b2b-consulting">B2B & Consulting</a></li>
            <li class="links"><a href="media">Media</a></li>
             <li class="links"><a href="ad-store">AD Store</a></li>
            <li class="links"><a href="contact">Contact</a></li>
            <li class="links"><a href="blog">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-30">
        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>About</h3>
          </div>
          <p style="color: #d2d2d2;">contact@amstaddigital.com<br/>
            Tel: +41 (0)44 844 44 77<br/>                              
            Ringstrasse 11                              
            8107 Buchs Zurich Switzerland
          </p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-50">
        <div class="footer-widget py-80">
          <div class="footer-widget-heading">
            <h3>Follow us</h3>
          </div>
          <ul class="social-network social-circle">
            <li><a href="http://www.facebook.com/AmstadDigital" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

            <li><a href="https://www.youtube.com/channel/UCdDm1DfvZSE5du9gTZ4OXNQ" target="_blank" class="icoLinkedin" title="youtube"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.twitter.com/AmstadDigital" target="_blank" class="icoLinkedin" title="twitter"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<div class="dark-mark"></div>
{!! Theme::footer() !!}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/packery/2.1.2/packery.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://mreq.github.io/slick-lightbox/dist/slick-lightbox.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> 

{{-- <script>
  // function openModel(){
   $(document).ready(function() { 
   $(document).on('click','.view_cart',function(){
   $('#cartModal').modal('show');
      }) 
   });
  //}
 </script> --}}

<script>
$(document).ready(function() {
$('.arch-slider1').slick({
      slidesToShow:3,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      variableWidth: true,
      prevArrow: '<div class="prev"><svg width="23" height="39" viewBox="0 0 23 39" style="transform: scale(1);"><path id="_250_middle_right_copy_3" data-name="250 middle right  copy 3" class="slideshow-arrow" d="M154.994,259.522L153.477,261l-18.471-18,18.473-18,1.519,1.48L138.044,243Z" transform="translate(-133 -225)"></path></svg></div>',
      nextArrow: '<div class="next"><svg width="23" height="39" viewBox="0 0 23 39" style="transform: scale(1);"><path id="_250_middle_right_copy_2" data-name="250 middle right  copy 2" class="slideshow-arrow" d="M857.005,231.479L858.5,230l18.124,18-18.127,18-1.49-1.48L873.638,248Z" transform="translate(-855 -230)"></path></svg></div>',
      responsive: [{
      breakpoint: 1000,
      settings: {
              slidesToShow: 2,
              slidesToScroll: 1
              }
          },
          {
              breakpoint: 650,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
      ]
  });

  $(window).on('load resize', slederResizer);

  function slederResizer() {
      $('.slick-slide').each(function() {
          var w = 0;
          $(this).find('img').each(function() {
              if ($(this).width() > w) {
                  w = $(this).width();
              }
          });
          $(this).css('width', w);
      });
  }
  slederResizer();

  $('.arch-slider').slickLightbox({
    itemSelector: '.arc-link'

  });
});

// Main content container
var $container = $('.arch-slider-item');
function loadmas(){

$container.packery({
 // selector for entry content
 itemSelector: '.arc-link-wrap',
 percentPosition: true
});

}

// Masonry + ImagesLoaded
$container.imagesLoaded(function(){
 loadmas();
});
$(window).resize(function(){
loadmas();
})
</script>


  <script>
    $(document).ready(function(){
      $(".navbar").removeClass("nav-sticky");
    $(window).scroll(function() {   
    var scroll = $(window).scrollTop();
    //>=, not <=
    if (scroll >= 20 ) {
      //clearHeader, not clearheader - caps H
      $(".navbar").addClass("nav-sticky");
    }
    else{
    $(".navbar").removeClass("nav-sticky");
    }
    }); //missing );
    });
    $('.responsive_home').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 20000,
    infinite: false,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='storage/images/right.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='storage/images/right.png'>",
    
    
    responsive: [
       {
          breakpoint: 1024,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
          }
       },
       {
          breakpoint: 600,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 2
          }
       },
       {
          breakpoint: 480,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1
          }
       }
     
    ]
    });

 $('.responsive').slick({
  dots: false,
  autoplay: true,
  autoplaySpeed: 20000,
  infinite: false,
  speed: 500,
  slidesToShow: 2,
  slidesToScroll: 2,
  arrows: true,
  prevArrow:"<img class='a-left control-c prev slick-prev' src='storage/images/right.png'>",
  nextArrow:"<img class='a-right control-c next slick-next' src='storage/images/right.png'>",
  
  
  responsive: [
     {
        breakpoint: 1024,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
        }
     },
     {
        breakpoint: 600,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1
        }
     },
     {
        breakpoint: 480,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
     }
   
  ]
  });
    
  </script>

</body>
</html>
