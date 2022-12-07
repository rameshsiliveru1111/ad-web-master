<section class="shoppingCart second-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-9 col-lg-7">
            <div class="header-section heading">
              <!-- <h1 class="small-title">Lorem Ipsum</h1> -->
              <h1>
                AD - STORE
              </h1>
             
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-lg-4 col-xl-4">
            <div class="card imageFit">
              <img class="imgBig" src="storage/images/product1.jpg" alt=""/>            
              <div class="person-info">
                <h3 class="full-name">initial consultation and evaluation</h3>
                <span class="speciality">CHF 30.00</span>
                <p>initial consultation and evaluation for businesses of all kinds. the initial consultation is 1h and the 30.- are going to be rewarded to your entire consulting cost in case you decide to hire us for a consulting job.</p>
                <hr/>
            <div class="row mt-3">
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                    <button class="btn btn-outline-primary">
                Add To Cart 
                
              </button>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                    <button type="button" class="btn btn-outline-success" (onclick)="openModel()" data-toggle="modal" data-target="#cartModal">
    View Cart
  </button>  
 <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img src="storage/images/product1.jpg" class="img-fluid img-thumbnail" alt="Sheep"/>
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
</div>
                  </div>
                </div>

              </div>
            </div>
          </div>
         
          <div class="col-sm-4 col-lg-4 col-xl-4">
            <div class="card imageFit">
              <img class="imgBig" src="storage/images/product2.jpg" alt=""/>            
              <div class="person-info">
                <h3 class="full-name">2D ART<br/> COMISSION</h3>
                <span class="speciality">CHF 10.00</span>
                <p>You get your desired picture in made from our artists. the 10.- are again security fee for us but the total price of a 2s art piece can be as low as 10 .- be sure to include scope and details of the commission.</p>
                <hr / style="color:#fff;">
                <div class="row mt-3">
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                    <button class="btn btn-outline-primary">
                Add To Cart 
                <!-- <i class="fa fa-shopping-basket" aria-hidden="true"></i> -->
              </button>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                     <button type="button" class="btn btn-outline-success" (onclick)="openModel()" data-toggle="modal" data-target="#cartModal">
    View Cart
  </button>  
                  </div>
                </div>
                  
              </div>
              
            </div>
          </div>

          <div class="col-sm-4 col-lg-4 col-xl-4">
            <div class="card imageFit">
              <img class="imgBig" src="storage/images/product3.jpg" alt=""/>            
              <div class="person-info">
                <h3 class="full-name">3D ART<br/> COMISSION</h3>
                <span class="speciality">CHF 30.00</span>
                <p>You comission us with a 3d art piece, tell us scope and details of the sculpt ( best what it will be for as well) and with the 30.- security fee the design piece's total price can be as <br/>low as 60.</p> 
                <hr / style="color:#fff;"> 
            <div class="row mt-3">
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                    <button class="btn btn-outline-primary">
                Add To Cart 
                <!-- <i class="fa fa-shopping-basket" aria-hidden="true"></i> -->
              </button>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xl-6 col-6">
                     <button type="button" class="btn btn-outline-success" (onclick)="openModel()" data-toggle="modal" data-target="#cartModal">
    View Cart
  </button>  
                  </div>
                </div>         
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
     


   
      <script>
        function openModel(){
             $(document).ready(function() {  
  $('#cartModal').modal('show');
});
        }
           
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- ṃodel js add -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- model js add -->   

  
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
      $('.responsive').slick({
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
      
    </script>
 