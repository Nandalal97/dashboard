<?php include_once('header.php'); ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Update Data</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                    class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Settings</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="" action="" method="post" novalidate>
              <p> * Is required fild </p>
              <span class="section">Update Information</span>
              <!-- name -->
              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"
                    placeholder="ex. John f. Kennedy" required="required" />
                </div>
              </div>
              <!-- email -->
              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">email<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" name="email" class='email' required="required" type="email" />
                </div>
              </div>

              <!-- Confirm Email -->

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Confirm email address<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" type="email" class='email' name="confirm_email"
                    data-validate-linked='email' required='required' />
                </div>
              </div>
              <!-- phone Number -->
              
              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Phone Number<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" type="tel" class='tel' name="phone" required='required' maxlength="10"  data-validate-length-range="8,10" />
                </div>
              </div>

              <!-- date -->

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Date<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" class='date' type="date" name="date" required='required'>
                </div>
              </div>

              <!-- time -->
              <!-- <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Time<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" class='time' type="time" name="time" required='required'>
                </div>
              </div> -->
              <!-- password -->

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" type="password" id="password1" name="password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
                    title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                    required />

                  <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                    <i id="slash" class="fa fa-eye-slash"></i>
                    <i id="eye" class="fa fa-eye"></i>
                  </span>
                </div>
              </div>
              <!-- confirm password -->

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" type="password" name="password2" data-validate-linked='password'
                    required='required' />
                </div>
              </div>
              <!-- message -->

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Message<span
                    class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <textarea required="required" name='message' ></textarea>
                </div>
              </div>
              <div class="ln_solid">
                <div class="form-group">
                  <div class="col-md-6 offset-md-3">
                    <button type='submit' class="btn btn-primary">Submit</button>
                    <button type='reset' class="btn btn-success">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php include_once('footer.php');  ?>