<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */
    'inherit' => null, //default
    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */
    'events' => array(
        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('experiment');
            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{!! $crumb["label"] !!}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{!! $crumb["label"] !!}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },
        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));
            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
//            $theme->asset()->cook('react', function($asset) {
//                $asset->container('footer')->add('react-js', 'react-source/react.js');
//            });
//
//            $theme->asset()->cook('adminlte', function($asset) {
//                $asset->add('header-css', 'css/top.css');
//                $asset->add('header-js', 'js/top.js');
//                $asset->add('css_addons_po', 'css/addons.css');
//                $asset->container('footer')->add('footer-js', 'js/bottom.js');
//            });
//             $theme->asset()->cook('adminlte', function($asset) {
//                 $asset->add('select2.css', "js/plugins/select2/select2.min.css");
//                 $asset->add('Bootstrap 3.3.6', "js/bootstrap/css/bootstrap.min.css");
//                 $asset->add('Font Awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css");
//                 $asset->add('Ionicons', "https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css");
//                 $asset->add('Theme style', "css/adminlte/AdminLTE.min.css");
// //                $asset->add('skins', "css/adminlte//skins/_all-skins.min.css");
// //                $asset->add('iCheck', "js/plugins/iCheck/flat/blue.css");
//                 $asset->add('swall.css', "js/plugins/sweetalert/sweetalert.css");
// //                $asset->add('Morris chart', "js/plugins/morris/morris.css");
// //                $asset->add('jvectormap', "js/plugins/jvectormap/jquery-jvectormap-1.2.2.css");
//                 $asset->add('Date Picker', "js/plugins/datepicker/datepicker3.css");
//                 $asset->add('Daterange picker', "js/plugins/daterangepicker/daterangepicker.css");
//                 $asset->add('wysihtml5', "js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");
//                 $asset->add('bootstrap-select', "css/adminlte/bootstrap-select.css");
//                 $asset->add('iCheck', "js/plugins/iCheck/all.css");
//                 $asset->add('dataTables', "js/plugins/datatables/dataTables.bootstrap.css");
//                 $asset->add('custom-styles', "css/custom/style.css");
//                 $asset->add('jQuery 2.2.3', "js/plugins/jQuery/jquery-2.2.3.min.js");
//                 $asset->add('vue.js', "js/vue.min.js");
//                 $asset->add('helper.common', "themes/default/assets/js/helper/common.js");
//                 $asset->container('footer')->add('jquery-ui', "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js");
//                 $asset->container('footer')->add('bootstrap.min.js', "js/bootstrap/js/bootstrap.min.js");
// //                $asset->container('footer')->add('raphael-min.js', "https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js");
// //                $asset->container('footer')->add('morris.min.js', "js/plugins/morris/morris.min.js");
//                 $asset->container('footer')->add('jquery.sparkline.min.js', "js/plugins/sparkline/jquery.sparkline.min.js");
// //                $asset->container('footer')->add('jquery-jvectormap-1.2.2.min.js', "js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");
// //                $asset->container('footer')->add('jquery-jvectormap-world-mill-en.js', "js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");
//                 $asset->container('footer')->add('jquery.knob.js', "js/plugins/knob/jquery.knob.js");
//                 $asset->container('footer')->add('swal.js', "js/plugins/sweetalert/sweetalert.min.js");
//                 $asset->container('footer')->add('moment.min.js', "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js");
//                 $asset->container('footer')->add('daterangepicker.js', "js/plugins/daterangepicker/daterangepicker.js");
//                 $asset->container('footer')->add('bootstrap-datepicker.js', "js/plugins/datepicker/bootstrap-datepicker.js");
//                 $asset->container('footer')->add('bootstrap3-wysihtml5.all.min.js', "js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");
//                 $asset->container('footer')->add('jquery.slimscroll.min.js', "js/plugins/slimScroll/jquery.slimscroll.min.js");
//                 $asset->container('footer')->add('fastclick.js', "js/plugins/fastclick/fastclick.js");
//                 $asset->container('footer')->add('bootstrap-select.js', "js/adminlte/bootstrap-select.js");
//                 $asset->container('footer')->add('select2.full.min.js', "js/plugins/select2/select2.full.min.js");
//                 $asset->container('footer')->add('app.min.js', "js/adminlte/app.min.js");
// //                $asset->container('footer')->add('dashboard.js', "/js/adminlte/pages/dashboard.js");
// //                $asset->container('footer')->add('inputmask.js', "/js/plugins/input-mask/jquery.inputmask.js");
// //                $asset->container('footer')->add('inputmask.numeric.js', "/js/plugins/input-mask/jquery.inputmask.numeric.extensions.js");
//                 $asset->container('footer')->add('autoNumeric.min.js', "/js/plugins/autoNumeric/autoNumeric.min.js");
// //                $asset->container('footer')->add('demo.js', "js/adminlte/demo.js");
//                 $asset->container('footer')->add('jquery.dataTables.min.js', "js/plugins/datatables/jquery.dataTables.min.js");
//                 $asset->container('footer')->add('dataTables.bootstrap.min.js', "js/plugins/datatables/dataTables.bootstrap.min.js");
//             });
//             // LOAD ASSETS
//             $theme->asset()->serve('adminlte');
        },
        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(
            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        )
    )
);
