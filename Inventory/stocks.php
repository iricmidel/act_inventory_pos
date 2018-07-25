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
                  <a href="stockroom.php">
                    Items
                  </a>
                </li>
                <li class="is-active">
                  <a href="stocks.php">
                    Stock List
                  </a>
                </li>
                <li>
                  <a href="#" id="showModal">
                    Create New Stockage
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
      <h4 class="title"> Stock History </h4>
        <div class="columns">
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Stock ID">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Name">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Category">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="Tag">
            </div>
          </div>
          <div class="column">
            <div class="control">
              <button class="button is-warning is-fullwidth">Filter</button>
            </div>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>
                <abbr title="Stock ID"> ID </abbr>
              </th>
              <th> Date </th>
              <th> Receipt </th>
              <th> Item Name </th>
              <th> Quantity </th>
              <th> Distributor </th>
              <th> Expiration Date </th>
              <th> Notes </th>
              <th> On Stock Change </th>
              <th> Stocked by </th>
              <th> Cost </ht>

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
              <th> 900001 </th>
              <td> 01/01/01 </td>

              <td><a>123456</a></td>
              <td><a>Torani Apple Syrup - 500ml</a></td>
              <td> 25 bot </td>

              <td>PJDoms Cafe Supply</td>
              <td> 02/02/02 </td>
              <td> Extra Bottles for the month </td>
              <td> 0 -> 25 </td>
              <td> Admin Doc </td>
              <td> P2500 </a>
              </td>
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

    <div class="modal">
      <div class="modal-background"></div>
      <div class="modal-card animated fadeInDown">
        <header class="modal-card-head">
          <p class="modal-card-title level-item has-text-centered">Create New Stockage  </p>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">ITEM NAME</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label"> QUANTIY ($PurUnit)</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">RECEIPT NUMBER</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">EXPIRATION DATE</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label class="label">DATETIME (EDITABLE?)</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">DISTRIBUTOR</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">COST</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">NOTES</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="modal-card-foot">
            <button class="button is-warning">Save changes</button>
            <button class="button is-danger">Cancel</button>
        </footer>
      </div>
    </div>

    <script src="../library/js/sidenav.js"></script>
    <script src="../library/js/stockroom.js"></script>

  </body>

</html>
