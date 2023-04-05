<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <head>
             
            <style>
                
                <?php include '../css/style.css'; ?>
               
            </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="product.php">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="product.php">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Helmets</a></li>
                      <li><a href="#">Jackets</a></li>
                      <li><a href="#">Gears</a></li>
                    </ul>
                  </li>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">All Order </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
          
      
        
      <section class="bg-light my-5">
        <div class="container cartTotalDetails">
          <div class="row">
            <!-- cart -->
            <div class="col-lg-9 cartDetails">
              <div class="card border shadow-0">
                <div class="m-4">
                  <h4 class="card-title mb-4">Your shopping cart</h4>
                  <div class="row gy-3 mb-4">
                    <div class="col-lg-5">
                      <div class="me-lg-5">
                        <div class="d-flex">
                          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                          <div class="">
                            <a href="#" class="nav-link">Winter jacket for men and lady</a>
                            <p class="text-muted">Yellow, Jeans</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                      <div class="">
                        <select style="width: 100px;" class="form-select me-4">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="">
                        <text class="h6">$1156.00</text> <br />
                        <small class="text-muted text-nowrap"> $460.00 / per item </small>
                      </div>
                    </div>
                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                      <div class="float-md-end">
                        <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                        <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="row gy-3 mb-4">
                    <div class="col-lg-5">
                      <div class="me-lg-5">
                        <div class="d-flex">
                          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                          <div class="">
                            <a href="#" class="nav-link">Mens T-shirt Cotton Base</a>
                            <p class="text-muted">Blue, Medium</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                      <div class="">
                        <select style="width: 100px;" class="form-select me-4">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="">
                        <text class="h6">$44.80</text> <br />
                        <small class="text-muted text-nowrap"> $12.20 / per item </small>
                      </div>
                    </div>
                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                      <div class="float-md-end">
                        <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                        <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="row gy-3">
                    <div class="col-lg-5">
                      <div class="me-lg-5">
                        <div class="d-flex">
                          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/13.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                          <div class="">
                            <a href="#" class="nav-link">Blazer Suit Dress Jacket for Men</a>
                            <p class="text-muted">XL size, Jeans, Blue</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                      <div class="">
                        <select style="width: 100px;" class="form-select me-4">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="">
                        <text class="h6">$1156.00</text> <br />
                        <small class="text-muted text-nowrap"> $460.00 / per item </small>
                      </div>
                    </div>
                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                      <div class="float-md-end">
                        <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                        <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="border-top pt-4 mx-4 mb-4">
                  <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                  </p>
                </div>
              </div>
            </div>
            <!-- cart -->
            <!-- summary -->
            <div class="col-lg-3">
              <div class="card mb-3 border shadow-0">
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label class="form-label">Have coupon?</label>
                      <div class="input-group">
                        <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                        <button class="btn btn-light border">Apply</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card shadow-0 border">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <p class="mb-2">Total price:</p>
                    <p class="mb-2">$329.00</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="mb-2">Discount:</p>
                    <p class="mb-2 text-success">-$60.00</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="mb-2">TAX:</p>
                    <p class="mb-2">$14.00</p>
                  </div>
                  <hr />
                  <div class="d-flex justify-content-between">
                    <p class="mb-2">Total price:</p>
                    <p class="mb-2 fw-bold">$283.00</p>
                  </div>
      
                  <div class="mt-3">
                    <a href="checkout.php" class="btn cart"> Make Purchase </a>
                    <a href="product.php" class="btn cart"> Back to shop </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- summary -->
          </div>
        </div>
      </section>
      
      
       
      <div class="footer">
        <p>Footer</p>
      </div>
      
    </body>
</html>

































