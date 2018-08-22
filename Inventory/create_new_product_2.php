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
          <li><a href="create_new_product.php">Product Information</a></li>
          <li class="is-active"><a href="create_new_product_2.php">Measurement and Pricing</a></li>
          <li><a href="create_new_product_3.php">Ingredients</a></li>
          <li><a href="create_new_product_4.php">Variations</a></li>
        </ul>

      </div>
      <div class="columns">
        <div class="column">
        </div>
        <div class = "column">
          <div class="field">
            <div class="label">
              Sales Unit of Measure
            </div>
            <span class="tag is-info">This is used to quantify the product you are selling.</span>
            <div class="control">
              <input class="input is-active" type="text" placeholder="Sales Unit of Measure">
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
              Cost
            </div>
            <span class="tag is-info">Add an estimated single cost to estimate margin.</span>
            <div class="control">
              <input class="input is-active" type="text" placeholder="Cost of the base product">
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
              Sale Price
            </div>
            <span class="tag is-info">How much do you sell this product?</span>
            <div class="control">
              <input class="input is-active" type="text" placeholder="Selling Price of the base product">
            </div>
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
