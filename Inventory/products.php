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
                <li class="is-active">
                  <a href="products.php">
                    Products
                  </a>
                </li>
                <li>
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
      <h4 class="title"> Product List Summary </h4>
        <div class="columns">
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Product ID">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Product Name">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Product Category">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Cost">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Selling Price">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <button class="button is-warning is-fullwidth">Filter</button>
            </div>
          </div>
        </div>

        <table class="table is-fullwidth">
          <thead>
            <tr>
              <th> Image </th>
              <th> Name </th>
              <th>
                <abbr title="Product ID"> ID </abbr>
              </th>
              <th> Product Category </th>
              <th> <abbr title="Sales Unit of Measure"> SaleUnit </th>
              <th> Cost </th>
              <th> Selling Price </th>
              <th> Markup </th>
              <th> Availability </th>
              <th> Variations </th>
              <th></th>
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
              <th><figure class="image is-64x64">
                <img src="../Assets/images/caramel_coffee.jpeg">
              </figure></th>
              <th> Caramel Coffee 250ml </th>
              <td>200001</td>
              <td>Drinks / Coffee / With Milk</td>
              <td> cup </td>
              <td> P50.00 </td>
              <td> P100.00 </td>
              <td> 100% </td>
              <td> Ingredients Available (20) </td>
              <td> Cold, Hot </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>

            <tr>
              <th><figure class="image is-64x64">
                <img src="../Assets/images/caramel_coffee.jpeg">
              </figure></th>
              <th> Caramel Coffee 500ml </th>
              <td>200002</td>
              <td>Drinks / Coffee / With Milk</td>
              <td> cup </td>
              <td> P100.00 </td>
              <td> P200.00 </td>
              <td> 100% </td>
              <td> Ingredients Available (10) </td>
              <td> Cold, Hot </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>

            <tr>
              <th><figure class="image is-64x64">
                <img src="../Assets/images/torani.jpeg">
              </figure></th>
              <th> Torani Apple 500ml </th>
              <td>200003</td>
              <td>Stockroom Item / Syrup</td>
              <td> bot </td>
              <td> P500.00 </td>
              <td> P1500.00 </td>
              <td> 200% </td>
              <td> Available in Stockroom (20) </td>
              <td>  </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <script src="../library/js/sidenav.js"></script>
    <script src="../library/js/modal.js"></script>

  </body>

</html>
