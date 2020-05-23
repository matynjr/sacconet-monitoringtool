<?php
include_once('php_modules/includes/session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            include_once('php_modules/includes/title.php');
            ?> </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">



            <!-- sidebar -->
            <?php
            include_once('php_modules/includes/sidebar.php'); ?>
            <!-- sidebar -->



            <!-- top navigation -->
            <?php
            include_once('php_modules/includes/topnavigation.php'); ?>
            <!-- end top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>


                    <div class="row">


                        <div class="col-md-6 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Administrator <small>configure permissions for the Administrator</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>


                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left">


                                        <!-- <div class="form-group row">
                                            <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios

                                            </label>

                                            <div class="col-md-9 col-sm-9 ">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" checked="checked"> Checked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Unchecked
                                                    </label>
                                                </div>

                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Switch</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked /> can add users
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" />can view user
                                                    </label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button type="reset" class="btn btn-primary">Reset</button>
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Normal user <small>configure permissions for the normal user </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>


                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left">


                                        <!-- <div class="form-group row">
                                            <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios

                                            </label>

                                            <div class="col-md-9 col-sm-9 ">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" checked="checked"> Checked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Unchecked
                                                    </label>
                                                </div>

                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Switch</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked /> can add users
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" />can view user
                                                    </label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button type="reset" class="btn btn-primary">Reset</button>
                                                <button type="submit" class="btn btn-success">Save changes</button>
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

            <!-- footer content -->
            <?php
            include_once('php_modules/includes/footer.php'); ?>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>