<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <title>Gerenciar Contatos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <?php
        echo link_tag('assets/css/bootstrap-cerulean.css');
        echo link_tag('assets/css/bootstrap-responsive.css');
        echo link_tag('assets/css/charisma-app.css');
        echo link_tag('assets/css/jquery-ui-1.8.21.custom.css');
        echo link_tag('assets/css/fullcalendar.css');
        echo link_tag('assets/css/fullcalendar.print.css');
        echo link_tag('assets/css/chosen.css');
        echo link_tag('assets/css/uniform.default.css');
        echo link_tag('assets/css/colorbox.css');
        echo link_tag('assets/css/jquery.cleditor.css');
        echo link_tag('assets/css/jquery.noty.css');
        echo link_tag('assets/css/noty_theme_default.css');
        echo link_tag('assets/css/elfinder.min.css');
        echo link_tag('assets/css/elfinder.theme.css');
        echo link_tag('assets/css/jquery.iphone.toggle.css');
        echo link_tag('assets/css/opa-icons.css');
        echo link_tag('assets/css/uploadify.css');
        ;
        ?>
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="">

    </head>

    <body>
<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="index.php"> <img alt="Logo" src="" /> <span>Pull-In</span></a>

                        <!-- theme selector starts -->
                        <div class="btn-group pull-right theme-container" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-tint"></i><span class="hidden-phone"> Modificar Tema / Skin</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" id="themes">
                                <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                                <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                                <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                                <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                                <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                                <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                                <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                                <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                                <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                            </ul>
                        </div>
                        <!-- theme selector ends -->

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> Admin</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="login.php">Sair</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <div class="top-nav nav-collapse">
                            <ul class="nav">
                                <li><a href="#">Buscar</a></li>
                                <li>
                                    <form class="navbar-search pull-left">
                                        <input placeholder="Pesquisar" class="search-query span2" name="query" type="text">
                                    </form>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- topbar ends -->
<?php } ?>
        <div class="container-fluid">
            <div class="row-fluid">
<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>

                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet">Opções</li>
                                <li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet">Menu Principal</span></a></li>
                                <li><a class="ajax-link" href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                                <li><a class="ajax-link" href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                                <li><a class="ajax-link" href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                                <li><a class="ajax-link" href="typography.php"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                                <li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                                <li class="nav-header hidden-tablet">Sample Section</li>
                                <li><a class="ajax-link" href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                                <li><a class="ajax-link" href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                                <li><a class="ajax-link" href="grid.php"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                                <li><a class="ajax-link" href="file-manager.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                                <li><a href="tour.php"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
                                <li><a class="ajax-link" href="icon.php"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                                <li><a href="error.php"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
                                <li><a href="login.php"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                            </ul>
                            <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                    </noscript>

                    <div id="content" class="span10">
                        <!-- content starts -->
                    <?php } ?>
