 <!-- BEGIN GLOBAL MANDATORY STYLES -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
 <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
 <!-- END GLOBAL MANDATORY STYLES -->

 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

 <style>

     .sidebar-wrapper {
         -webkit-box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
         -moz-box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
         box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
     }

     /*
         Just for demo purpose ---- Remove it.
     */
     /*<starter kit design>*/

     .widget-one {

     }
     .widget-one h6 {
         font-size: 20px;
         font-weight: 600;
         letter-spacing: 0px;
         margin-bottom: 22px;
     }
     .widget-one p {
         font-size: 15px;
         margin-bottom: 0;
     }

     /*/<starter kit design>*/

 </style>

 <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 @stack('css')
