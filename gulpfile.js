
var elixir =  require('laravel-elixir');

//
// elixir(function(mix) {
//     mix.styles([
//
//         "style.css",
//         "responsive.css"
//     ], 'public/css/all.css').version("public/css/all.css"),"public/css";
// });

elixir(function(mix) {



    mix.styles([
        "css/owl.css",
        "css/style.css",
        "css/bootstrap.min.css",
        "css/fontawesome.css",
        "css/reset.css",
        "css/nav.css",
        // "css/lightgallery.css",
        "css/header-footer.css",
        "css/font-awesome.css",
        "css/animate.css",
        // "css/slick.css",
        // "css/slick-theme.css",

    ], "public/css/all.css", "public/");


    mix.scripts([
        'js/fontawesomejs.js',
        'js/jquery2.js',
        // "js/bootstrap.min.js",
        'js/jquery-ui.js',
        'js/jquery.smartmenus.js',
        'js/enscroll-0.6.1.min.js',
        'js/wow.js',
        'js/jquery.appear.js',
        'js/default.js',
        'js/picturefill.min.js',
        'js/jquery.mousewheel.min.js',
        // 'js/lightgallery.js',
        'js/modernizr.min.js',
        'js/bootstrapvalidator.min.js',
        'js/static.js',
        'js/owljs.js',
        'js/intlTelInput.min.js'

    ], "public/js/all.js", "public/");

    mix.copy(
        'public/fonts', 'public/fonts'
    );

    mix.copy('public/fonts/vendor/font-awesome/', 'public/build/fonts');




    mix.version(['public/css/all.css','public/js/all.js']);


});