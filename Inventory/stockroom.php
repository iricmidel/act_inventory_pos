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

    				<li><a href="#">Dashboard</a><span class="icon"><i class="material-icons">developer_board</i></span></li>

    				<li class ="is-active"><a href="#">Stockroom</a><span class="icon"><i class="material-icons">kitchen</i></span></li>

    				<li><a href="#">Products</a><span class="icon"><i class="material-icons">local_dining</i></span></li>

            <li><a href="#">Sales</a><span class="icon"><i class="material-icons">attach_money</i></span></li>

            <li><a href="#">Reports</a><span class="icon"><i class="material-icons">filter_none</i></span></li>

            <li><a href="#">Settings</a><span class="icon"><i class="material-icons">graphic_eq</i></span></li>

            <li><a href="#">Logout</a><span class="icon"><i class="material-icons">exit_to_app</i></span></li>

    			</ul>

    		</div>

    	</nav>

    </div>

    <div class="new-wrapper">
      <nav class="bd-tabs">
          <div class="tabs navbar-start">
            <ul>

                <li>
                  <a href="#">
                    Stockroom
                  </a>
                </li>

                <li class="is-active">
                  <a href="#">
                    Item List
                  </a>
                </li>

                <li>
                  <a href="#" id="showModal">
                    Add New Item
                  </a>
                </li>

                <li>
                  <a href="#">
                    Printable Report
                  </a>
                </li>

            </ul>
          </div>
      </nav>
    </div>

     <div id="main">

        <h4 class="title"> Item List Summary </h4>
        <div class="columns">
          <div class="column">
            <div class="control">
              <input class="input is-active" type="text" placeholder="ID">
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
              <th> On Stock </th>
              <th> Last Stockage</th>
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
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
              </td>
              <td>
                <a class="button is-warning is-rounded is-small">Edit Details</a>
              </td>
              <td>
                <a class="button is-danger is-rounded is-small">Delete</a>
              </td>
            </tr>
            <tr>
              <th> 100001 </th>
              <td>Torani Apple Syrup - 500ml</td>
              <td>PJDoms Cafe Supply</td>
              <td>Syrup</td>
              <td> <span class="tag is-link">Syrup</span> <span class="tag is-link">Apple</span> <span class="tag is-link">Flavoring</span> </td>
              <td> 121212121 </td>
              <td> bot </td>
              <td> bot </td>
              <td> bot, ml </td>
              <td>
                <a href="#"> 5 bot </a>
              </td>
              <td>
                <a href="#"> Jan, 25, 2018 </a>
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

    <div class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title level-item has-text-centered">Add New Item</p>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
          <label class="label">PRODUCT IMAGE</label>
          <div class="file has-name is-fullwidth">
            <label class="file-label">
              <input class="file-input" type="file" name="resume">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose a file…
                </span>
              </span>
              <span class="file-name">
                Screen Shot 2017-07-29 at 15.54.25.png
              </span>
            </label>
          </div>
          <br>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">ITEM NAME</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">STANDARD UNIT OF MEASURE</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">BARCODE</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label class="label">ITEM ID (Automated)</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">CATEGORY</label>
                <div class="control">
                  <input class="input" type="text">
                </div>
              </div>
              <div class="field">
                <label class="label">TAGS (3 Max, Separated by Comma)</label>
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
