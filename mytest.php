<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Corrected Bootstrap Icons link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="mystyle.css">
	<title>Mytest</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
	<div class="container">
    	<div class="row">
      		<div class="col-md-6">
        		<div id="carouselExampleIndicators" class="carousel slide">
          			
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="1.jpg" class="d-block w-100 img-fluid" alt="...">
						</div>
						<div class="carousel-item">
							<img src="2.jpg" class="d-block w-100 img-fluid" alt="...">
						</div>
						<div class="carousel-item">
							<img src="3.jpg" class="d-block w-100 img-fluid" alt="...">
						</div>
					</div>

					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
        		</div>
      		</div>

      	<div class="col-md-2">
			<div class="row mb-2">
				<div class="col-12">
					<img src="1.jpg" class="d-block img-fluid aspect-ratio thumbnail" alt="Thumbnail 1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0">
				</div>
			</div>
			<div class="row mb-2">
				<div class="col-12">
					<img src="2.jpg" class="d-block img-fluid aspect-ratio thumbnail" alt="Thumbnail 2" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
				</div>
			</div>
			<div class="row mb-2">
				<div class="col-12">
					<img src="3.jpg" class="d-block img-fluid aspect-ratio thumbnail" alt="Thumbnail 3" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
				</div>
			</div>
      	</div>

      	<div class="col-md-4">
        	<div class="card">
          		<div class="card-body d-flex justify-content-center align-items-center" id="viewcart">

					<button class="btn btn-success d-flex align-items-center">
						<span class="mx-auto">View Cart</span>
							<i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
						<span class="badge" onclick="updateBadgeValue()"> 0 </span>
					</button>
          		</div>

			<div class="d-flex justify-content-center" id="Instock">
				<i class="fa fa-check" aria-hidden="true"></i> In Stock
			</div>

			<div class="d-flex p-2">
				<h1><b>Check<sub>2</sub>O 4 in 1</b></h1>
			</div>
          
			<span id="reference"><b>Ref: 302.001</b></span>

          	<label class="d-flex p-2 text">50 test strips</label>

			<div class="d-flex justify-content-center poundmargin">
				<h3> <b>&pound;0.00 </b> </h3>
			</div>

			<div class="d-flex justify-content-center">
				<label> <b>Quantity</b> </label>
			</div>

          	<div class="d-flex justify-content-center">
            	<div class="row">
              		<div class="d-flex justify-content-center">
					<button class="btn btn-secondary round-btn" onclick="decreaseValue()">-</button>
						<input type="text" inputmode="numeric" id="numberBox" class="form-control number-box" value="1" min="1" max="9">
					<button class="btn btn-secondary round-btn" onclick="increaseValue()">+</button>
              	</div>
            </div>
        </div>

			<div class="card-body d-flex justify-content-center align-items-center">
				<button class="btn btn-primary" onclick="addToBasket()">Add to Basket</button>
					<div id="notification" class="notification">Product added to basket!</div>
			</div>

        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <!-- Tabs navs -->
          <ul class="nav nav-tabs nav-justified mb-3" role="tablist" style="border: 0px;">
            <li class="nav-item" role="presentation">
              <button type="button" class="btn btn-primary" id="tab-1" data-bs-toggle="tab" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="false">Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="btn btn-primary" id="tab-2" data-bs-toggle="tab" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">Specification</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="btn btn-primary" id="tab-3" data-bs-toggle="tab" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">Delivery</button>
            </li>
          </ul>
          <!-- Tabs navs -->

          <!-- Tabs content -->
          <div class="tab-content">
            <div class="tab-pane fade" id="tabs-1" role="tabpanel" aria-labelledby="tab-1">
              Tab 1 content
            </div>
            <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tab-2">
              Tab 2 content
            </div>
            <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tab-3">
              Tab 3 content
            </div>
          </div>
          <!-- Tabs content -->
        </div>
      </div>
    </div>
  </div>

  <!-- End Example Code -->

<script type="text/javascript" src="myjs.js"></script>

</body>
</html>
