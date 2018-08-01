<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>AC&T Inventory and POS</title>

      <link rel="stylesheet" type="text/css" href="../library/font-awesome/font/font.css">
      <link rel="stylesheet" type="text/css" href="../library/css/bulma.min.css">
      <link rel="stylesheet" type="text/css" href="../library/css/sidenav.css">
      <link rel="stylesheet" type="text/css" href="../library/css/animation.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="../library/js/ajax-3.1.1.js"></script>
    <script src="../library/js/jquery-1.12.4.js"></script>


  </head>

  <body>
    <div class="primary-nav">

    <button href="#" class="hamburger open-panel nav-toggle">
    <span class="screen-reader-text">Menu</span>
    </button>

    	<nav role="navigation" class="menu">

    		<a href="#" class="logotype">AC&T<span> System</span></a>

    		<div class="overflow-container">

    			<ul class="menu-dropdown">

            <li><a>Hi Admin!</a></li>

    				<li><a href="dashboard.php">Dashboard</a><span class="icon"><i class="material-icons">developer_board</i></span></li>

    				<li class ="is-active"><a href="stockroom.php">Stockroom</a><span class="icon"><i class="material-icons">kitchen</i></span></li>

    				<li><a href="products.php">Products</a><span class="icon"><i class="material-icons">local_dining</i></span></li>

            <li><a href="sales.php">Sales</a><span class="icon"><i class="material-icons">attach_money</i></span></li>

            <li><a href="reports.php">Reports</a><span class="icon"><i class="material-icons">filter_none</i></span></li>

            <li><a href="settings.php">Settings</a><span class="icon"><i class="material-icons">graphic_eq</i></span></li>

            <li><a href="logout.php">Logout</a><span class="icon"><i class="material-icons">exit_to_app</i></span></li>

    			</ul>

    		</div>

    	</nav>

    </div>

    <div class="new-wrapper">
      <nav class="bd-tabs">
          <div class="tabs navbar-start">
            <ul>
                <li>
                  <a href="products.php">
                    Products
                  </a>
                </li>
                <li class ="is-active">
                  <a href="create_new_product.php">
                    Create New Product
                  </a>
                </li>
                <li>
                  <a href="product_categories.php">
                    Product Categories
                  </a>
                </li>
                <li>
                  <a href="print.php">
                    Printable Report
                  </a>
                </li>
            </ul>
          </div>
        </nav>

     <div id="main">
      <h4 class="title level">
        Create New Product
        <span>
          <a class="button is-warning">Save Product</a>
          <a class="button is-danger">Discard</a>
        </span>
      </h4>
      <div class="tabs is-centered">
        <ul>
          <li class="is-active"><a href="create_new_product.php">Product Information</a></li>
          <li><a href="create_new_product_2.php">Measurement and Pricing</a></li>
          <li><a href="create_new_product_3.php">Ingredients</a></li>
          <li><a href="create_new_product_4.php">Variations</a></li>
        </ul>

      </div>
      <div >
        <center>
          <div class="label">
            Product Image
          </div>
          <figure class="image is-256x256">
            <img src="../Assets/images/caramel_coffee.jpeg">
          </figure>
        </center>
      </div>
    </br>
      <div class="field">
        <div class="file is-warning has-name is-centered">
          <label class="file-label">
            <input class="file-input" type="file" name="resume">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>
              <span class="file-label">
                Upload Product Image
              </span>
            </span>
            <span class="file-name">
              Screen Shot 2017-07-29 at 15.54.25.png
            </span>
          </label>
        </div>
      </div>
      </br>
      <div class="columns">
        <div class="column">
        </div>
        <div class = "column">
          <div class="field">
            <div class="label">
              Product Name
            </div>
            <div class="control">
              <input class="input is-active" type="text" placeholder="Product Name">
            </div>
          </div>
        </div>
        <div class="column">
        </div>
      </div>

      <div class="columns">
        <div class="column">
        </div>
        <div class = "column">
          <div class="field">
            <div class="label">
              Product Category
            </div>
            <p class="control">
              <span class="select is-fullwidth">
                <select>
                  <option selected>Top Screen</option>
                  <option> > Drinks</option>
                  <option> >> Coffee</option>
                  <option> >>> With Milk</option>
                  <option> + Create a New Category</option>
                </select>
              </span>
              <span class="icon is-small is-left">
                <i class="fas fa-globe"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="column">
        </div>
      </div>





      </div>
    </div>

    <script src="../library/js/sidenav.js"></script>
    <script src="../library/js/modal.js"></script>

  </body>

</html>
