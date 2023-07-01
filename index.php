<?php include_once('header.php'); ?>


<div class="right_col" role="main">

  <!-- top tiles -->
  <div class="row" style="display: inline-block;">
    <div class="tile_count">
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
        <div class="count">2500</div>
        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
        <div class="count">123.50</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
        <div class="count green">2,500</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
        <div class="count">4,567</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <br />
  <!-- /top tiles -->

  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>Network Activities <small>Graph title sub-title</small></h3>
          </div>
          <div class="col-md-6">
            <div id="reportrange" class="pull-right"
              style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-9  bg-light">
          <div id="chart_plot_01" class="demo-placeholder"></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <br />

  <div class="row">
    <div class="col-md-4 col-sm-4 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Recent Activities <small>Sessions</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                  class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>

              </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>

        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">

          <p>text Here</p>
          
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<?php include_once('footer.php');  ?>