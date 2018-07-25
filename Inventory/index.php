<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Queue Service</title>

      <link rel="stylesheet" type="text/css" href="../library/font-awesome/font/font.css">
      <link rel="stylesheet" type="text/css" href="../library/css/bulma.min.css">
      <link rel="stylesheet" type="text/css" href="../library/css/sidenav.css">
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

    				<li><a href="#">Dashboard</a><span class="icon"><i class="material-icons">developer_board</i></span></li>

    				<li><a href="#">Stockroom</a><span class="icon"><i class="material-icons">kitchen</i></span></li>

    				<li><a href="#">Products</a><span class="icon"><i class="material-icons">local_dining</i></span></li>

            <li><a href="#">Sales</a><span class="icon"><i class="material-icons">attach_money</i></span></li>

            <li><a href="#">Reports</a><span class="icon"><i class="material-icons">filter_none</i></span></li>

            <li><a href="#">Settings</a><span class="icon"><i class="material-icons">graphic_eq</i></span></li>

    			</ul>

    		</div>

    	</nav>

    </div>

    <div class="new-wrapper">

        <nav class="bd-tabs">
            <div class="tabs">
              <ul>

                  <li>
                    <a href="#">
                      Warehouse
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      Item List
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      Generate Printable Report
                    </a>
                  </li>

              </ul>
            </div>
          </nav>

    </div>

	     <div id="main">

        <section class="section" id="table">
          <h1 class="title"> Item List Summary </h1>
          <hr>
          <table class="table">
            <thead>
              <tr>
                <th>
                  <abbr title="Item ID"> ID </abbr>
                </th>
                <th> Name </th>
                <th> Last Distributor </th>
                <th> Category </th>
                <th> Tags </th>
                <th> Barcode </th>
                <th> <abbr title="Standard Unit of Measure"> StUnit </th>
                <th> <abbr title="Purchasing Unit of Measure"> PurUnit </th>
                <th> <abbr title="Sales Unit of Measure"> SaleUnit </th>
                <th> Stock </th>
                <th> Last Stockage</th>


              </tr>
            </thead>
            <tfoot>
              <tr>

              </tr>
            </tfoot>
            <tbody>
              <tr>
                <th> 100001 </th>

                <td>Torani 500ML Apple Syrup </td>
                <td>PJDoms Cafe Supply</td>
                <td>Syrup</td>
                <td> Syrup,Apple,Flavoring,Cold Drinks</td>
                <td> 121212121 </td>
                <td> Bottle </td>
                <td> Bottle </td>
                <td> Bottle, ml </td>
                <td>
                  <a href="#"> 5 Bottles </a>
                </td>
                <td>
                  <a href="#"> Jan, 25, 2018 </a>
                </td>
                <td>
                  <a href="#"> Edit </a>
                </td>
                <td>
                  <a href="#"> Delete </a>
                </td>
              </tr>

            </tbody>
          </table>

        </section>
      </div>
    </div>

    <script src="../library/js/sidenav.js"></script>

  </body>

</html>
