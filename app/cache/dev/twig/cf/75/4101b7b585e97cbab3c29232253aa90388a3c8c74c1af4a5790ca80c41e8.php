<?php

/* /backoffice/index.html.twig */
class __TwigTemplate_cf754101b7b585e97cbab3c29232253aa90388a3c8c74c1af4a5790ca80c41e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'maincontent' => array($this, 'block_maincontent'),
            'header_title' => array($this, 'block_header_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <link href=\"/back-office/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/back-office/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\">
    <link href=\"/back-office/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"/back-office/css/style.css\" rel=\"stylesheet\">
    <link href=\"/back-office/css/pages/dashboard.css\" rel=\"stylesheet\">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                </a>
                <a class=\"brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("platform_admin_home");
        echo "\">Trip Handlers </a>
                <div class=\"nav-collapse\">
                    <ul class=\"nav pull-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-cog\"></i> Account <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:;\">Settings</a></li>
                                <li><a href=\"javascript:;\">Help</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-user\"></i> EGrappler.com <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:;\">Profile</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("platform_admin_logout");
        echo "\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class=\"subnavbar\">
        <div class=\"subnavbar-inner\">
            <div class=\"container\">
                <ul class=\"mainnav\">
                    <li class=\"\">
                        <a href=\"index.html\"><i class=\"icon-dashboard\"></i><span>Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=\"user-list\"><i class=\"icon-user\"></i><span>User Management</span> </a>
                    </li>
                    <li>
                        <a href=\"guidely.html\"><i class=\"icon-facetime-video\"></i><span>App Tour</span> </a>
                    </li>
                    <li>
                        <a href=\"charts.html\"><i class=\"icon-bar-chart\"></i><span>Charts</span> </a>
                    </li>
                    <li>
                        <a href=\"shortcodes.html\"><i class=\"icon-code\"></i><span>Shortcodes</span> </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-long-arrow-down\"></i><span>Drops</span> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"icons.html\">Icons</a></li>
                            <li><a href=\"faq.html\">FAQ</a></li>
                            <li><a href=\"pricing.html\">Pricing Plans</a></li>
                            <li><a href=\"login.html\">Login</a></li>
                            <li><a href=\"signup.html\">Signup</a></li>
                            <li><a href=\"error.html\">404</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>
    <!-- /subnavbar -->
    <div class=\"main\">
        <div class=\"main-inner\">
            <div class=\"container\">
                ";
        // line 96
        $this->displayBlock('maincontent', $context, $blocks);
        // line 201
        echo "                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->
    <div class=\"footer\">
        <div class=\"footer-inner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"pull-right\"> &copy; 2016 <a href=\"http://www.egrappler.com/\">Trip Handlers</a>. </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>
    <!-- /footer -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"/back-office/js/jquery-1.7.2.min.js\"></script>
    <script src=\"/back-office/js/excanvas.min.js\"></script>
    <script src=\"/back-office/js/chart.min.js\" type=\"text/javascript\"></script>
    <script src=\"/back-office/js/bootstrap.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"/back-office/js/full-calendar/fullcalendar.min.js\"></script>

    <script src=\"/back-office/js/base.js\"></script>

    <!-- /Calendar -->
    <script type=\"application/javascript\" language=\"javascript\">
        \$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {

            var \$target = \$( event.currentTarget );

            \$target.closest( '.btn-group' )
                    .find( '[data-bind=\"label\"]' ).text( \$target.text() )
                    .end()
                    .children( '.dropdown-toggle' ).dropdown( 'toggle' );

            return false;

        });
    </script>
</body>
</html>
";
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo "Trip Handler - Management";
    }

    // line 96
    public function block_maincontent($context, array $blocks = array())
    {
        // line 97
        echo "                <div class=\"row\">
                    <div class=\"span2\">
                        <a href=\"javascript:;\" class=\"main-left\">Apps</a>
                        <a href=\"javascript:;\" class=\"main-left\">Bookmarks</a>
                        <a href=\"javascript:;\" class=\"main-left\">Reports</a>
                        <a href=\"javascript:;\" class=\"main-left\">Comments</a>
                        <a href=\"javascript:;\" class=\"main-left\">Users</a>
                    </div>
                    <!-- /span2 -->
                    <div class=\"span10\">
                        <div class=\"widget widget-table action-table\">
                            <div class=\"widget-header\"> <i class=\"icon-th-list\"></i>
                                <h3> ";
        // line 109
        $this->displayBlock('header_title', $context, $blocks);
        echo "</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class=\"widget-content\">
                                <table class=\"table table-striped table-bordered\">
                                    <thead>
                                        <tr>
                                          <th> Free Resource </th>
                                          <th> Download</th>
                                          <th class=\"td-actions\"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Fresh Web Development Resources </td>
                                            <td> http://www.egrappler.com/ </td>
                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                                <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                        </tr>
                                        <tr>
                                            <td> Fresh Web Development Resources </td>
                                            <td> http://www.egrappler.com/ </td>
                                            <td class=\"td-actions\">
                                                <a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                                <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Fresh Web Development Resources </td>
                                            <td> http://www.egrappler.com/ </td>
                                            <td class=\"td-actions\">
                                                <a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                                <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Fresh Web Development Resources </td>
                                            <td> http://www.egrappler.com/ </td>
                                            <td class=\"td-actions\">
                                                <a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                                <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Fresh Web Development Resources </td>
                                            <td> http://www.egrappler.com/ </td>
                                            <td class=\"td-actions\">
                                                <a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                                <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->

                        <div class=\"widget widget-nopad\">
                            <div class=\"widget-header\">
                                <i class=\"icon-list-alt\"></i>
                                <h3> Recent News</h3>
                            </div>
                            <div class=\"widget-content\">
                                <ul class=\"news-items\">
                                    <li>
                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">29</span> <span class=\"news-item-month\">Aug</span> </div>
                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/thursday-roundup-40/\" class=\"news-item-title\" target=\"_blank\">Thursday Roundup # 40</a>
                                          <p class=\"news-item-preview\"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">15</span> <span class=\"news-item-month\">Jun</span> </div>
                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/\" class=\"news-item-title\" target=\"_blank\">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                                          <p class=\"news-item-preview\"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">29</span> <span class=\"news-item-month\">Oct</span> </div>
                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/\" class=\"news-item-title\" target=\"_blank\">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                                          <p class=\"news-item-preview\"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- /widget -->
                    </div>
                    <!-- /span9 -->
                </div>
                ";
    }

    public function block_header_title($context, array $blocks = array())
    {
        echo " A Table Example ";
    }

    public function getTemplateName()
    {
        return "/backoffice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 109,  192 => 97,  189 => 96,  183 => 5,  130 => 201,  128 => 96,  73 => 44,  52 => 26,  28 => 5,  22 => 1,);
    }
}
