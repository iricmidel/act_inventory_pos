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
          <li><a href="create_new_product_2.php">Measurement and Pricing</a></li>
          <li class="is-active"><a href="create_new_product_3.php">Ingredients</a></li>
          <li><a href="create_new_product_4.php">Variations</a></li>
        </ul>
      </div>

      <center>
      <span class="tag is-info">List items that are used in creating the base product without modifications</span>
      </center>
      </br>

      <div class="columns">
        <div class="column">
        </div>
        <div class="column">
          <table class="table">
            <thead>
              <tr>
                <th> Item </th>
                <th> Quantity </th>
                <th> StandardUnit </th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <th>
                  <div class="select">
                    <select>
                      <option>Coffee Bean 1</option>
                      <option>Milk</option>
                    </select>
                  </div>
                </th>
                <td>
                  <div class="field">
                    <div class="control">
                      <input class="input" type="text" value="10">
                    </div>
                  </div>
                </td>
                <td> g </td>
                <td>
                  <a class="button is-danger is-rounded">Remove</a>
                </td>
              </tr>
              <tr>
                <th>
                  <div class="select">
                    <select>
                      <option>Select Item</option>
                    </select>
                  </div>
                </th>
                <td>
                  <div class="field">
                    <div class="control">
                      <input class="input" type="text" value="">
                    </div>
                  </div>
                </td>
                <td>  </td>
                <td>
                  <a class="button is-danger is-rounded">Remove</a>
                </td>
              </tr>
              <tr>
                <td><a class="button is-warning is-rounded">Add Ingredient</a></td>
              </tr>
            </tbody>
          </table>
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
