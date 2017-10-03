<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>
<div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input knob</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2">
                      <p>Display value</p>
                      <input class="knob" data-width="100" data-height="120" data-min="-100" data-displayPrevious=true data-fgColor="#26B99A" value="44">
                    </div>
                    <div class="col-md-2">
                      <p>&#215; 'cursor' mode</p>
                      <input class="knob" data-width="100" data-height="120" data-cursor=true data-fgColor="#34495E" value="29">
                    </div>
                    <div class="col-md-2">
                      <p>Step 0.1</p>
                      <input class="knob" data-width="100" data-height="120" data-min="-10000" data-displayPrevious=true data-fgColor="#26B99A" data-max="10000" data-step=".1" value="0">
                    </div>
                    <div class="col-md-2">
                      <p>Angle arc</p>
                      <input class="knob" data-width="100" data-height="120" data-angleOffset=-125 data-angleArc=250 data-fgColor="#34495E" data-rotation="anticlockwise" value="35">
                    </div>
                    <div class="col-md-2">
                      <p>Alternate design</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="75">
                    </div>
                    <div class="col-md-2">
                      <p>Angle offset</p>
                      <input class="knob" data-width="100" data-height="120" data-angleOffset=90 data-linecap=round data-fgColor="#26B99A" value="35">
                    </div>
                  </div>
                </div>
              </div>
<?php include "footer.php"; ?>
</body>
</html>