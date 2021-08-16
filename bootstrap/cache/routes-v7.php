<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KOEFMS2MUt4OTmwt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.edit-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.update-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listCart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.list-cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reloadCartItemInBadge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.reloadCartItemInBadge',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/deleteCart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DhWpj77d3kEBfo16',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.reload-products-in-cardpage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/update-quantity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.updateCartQuantity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/enter-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.enter-address',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.update-shipping-address',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.confirm-order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhDZ5htTlMlscNAR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.authenticate.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.showRegisterForm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZLY8S3PINfWfTMyk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ISKTKHMual4bfEpi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/continue-shopping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.continue-shopping',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n1UUjcXphwciOGGq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6N43MA9LEObuiwAv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zOlGwX8xTi3yv7zW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4C71UKYZ8KFgX4iq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/admin_management' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CM30R4avu2I76gqR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XmTEUEmH1INwbFA0',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/client_management' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rYJDaUIxkhK6RKe5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/create_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZwiQJTUgfOCBc4IQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DnBFPJwRIToNIHUN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7xTz2FOYCnmY0F3S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y2LIHyEbM3cQC5j4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/search/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QgZ1Ih91LGfGmG2l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/search/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lDE2Aw3xlnvxAWTv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zmINR7X4m9XyxTDm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Gl6YSIeQdsrhWbS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HgvwYhJJKAK4jvJl',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/man' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v12Yu63qXLURKPjv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/woman' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1rHCfV5o550rvhwY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/kid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SEO6GNEZLkkqS8LE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wwIug6L9sAXjex62',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h0lOVgWS2bsoEsYk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/order-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v1VA7m4Q4Qy1hl2u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1RwgOaWN967uHzJd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tS9jbfkPcMeOdULo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/order-item/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DqxvsUksydsnfAJc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/shipping/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9RECsvvWjmD4ANcX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statistical' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9yr0BvX8aHi7Jk9K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CFblHgHcSn9QNDwv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcribe/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bwCKkyLNI7GucHHu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/(?|c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|telescope/([^/]++)(*:102))|/addCart/([^/]++)(*:128)|/deleteItemCart/([^/]++)(*:160)|/categories/([^/]++)/products(*:197)|/products/([^/]++)(*:223)|/([^/]++)(*:240)|/send\\-subcribe\\-email(*:270)|/admin/(?|a(?|uth/reset\\-password/([^/]++)(*:320)|ccount/(?|edit/([^/]++)(*:351)|delete/([^/]++)(*:374)|change\\-password/([^/]++)(*:407)))|product/(?|([^/]++)(?|/edit(*:444)|(*:452))|delete/([^/]++)(*:476))|([^/]++)(*:493)))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.telescope',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.add-cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cart.delete-item',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.category-product.index',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-language',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ITPCNcSH50ZVMrAL',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.password.resetPasswordForm',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zRXrcUDYu7HZplxy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FSHQayanDi2ZK86K',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ODyAuEoBtHoSy1si',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Doi6sXxGB5faicBI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmNbdxdvLLwr4qOE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-language-admin',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/telescope/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'as' => 'debugbar.telescope',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KOEFMS2MUt4OTmwt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@zU2xoTYR1+N1cnUwjiockYoj8eLGn7ASUZkps87dp3Y=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004d282ca9000000000d3cc2e6";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KOEFMS2MUt4OTmwt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\IndexController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.user.edit-profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\UserController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Web\\UserController@editProfile',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.edit-profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.user.update-profile' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Web\\UserController@updateProfile',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.update-profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.add-cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'addCart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@addCart',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@addCart',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.add-cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.delete-item' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'deleteItemCart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@deleteItemCart',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@deleteItemCart',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.delete-item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.list-cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listCart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@showListCart',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@showListCart',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.list-cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.reloadCartItemInBadge' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reloadCartItemInBadge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@reloadCartItemInBadge',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@reloadCartItemInBadge',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.reloadCartItemInBadge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DhWpj77d3kEBfo16' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'deleteCart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@deleteListCart',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@deleteListCart',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::DhWpj77d3kEBfo16',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.reload-products-in-cardpage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@reloadProductsInCardPage',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@reloadProductsInCardPage',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.reload-products-in-cardpage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.updateCartQuantity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/update-quantity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@updateCartQuantity',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@updateCartQuantity',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.updateCartQuantity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.enter-address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/enter-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@enterShippingAddress',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@enterShippingAddress',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.enter-address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.update-shipping-address' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cart/enter-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@updateShippingAddress',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@updateShippingAddress',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.update-shipping-address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.confirm-order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@confirmOrder',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@confirmOrder',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.confirm-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.category-product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category}/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CategoryProductController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\CategoryProductController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.category-product.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.product.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Web\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UhDZ5htTlMlscNAR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\AuthenticateController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Web\\AuthenticateController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::UhDZ5htTlMlscNAR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.authenticate.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\AuthenticateController@login',
        'controller' => 'App\\Http\\Controllers\\Web\\AuthenticateController@login',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.authenticate.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.showRegisterForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\AuthenticateController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Web\\AuthenticateController@showRegisterForm',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.showRegisterForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\AuthenticateController@register',
        'controller' => 'App\\Http\\Controllers\\Web\\AuthenticateController@register',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZLY8S3PINfWfTMyk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\SocialController@facebookRedirect',
        'controller' => 'App\\Http\\Controllers\\Web\\SocialController@facebookRedirect',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::ZLY8S3PINfWfTMyk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ISKTKHMual4bfEpi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\SocialController@loginWithFacebook',
        'controller' => 'App\\Http\\Controllers\\Web\\SocialController@loginWithFacebook',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::ISKTKHMual4bfEpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\AuthenticateController@logout',
        'controller' => 'App\\Http\\Controllers\\Web\\AuthenticateController@logout',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.cart.continue-shopping' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'continue-shopping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\CartController@continueShopping',
        'controller' => 'App\\Http\\Controllers\\Web\\CartController@continueShopping',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'frontend.cart.continue-shopping',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'change-language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'must-be-user',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Language\\LocalizationController@changeLanguage',
        'controller' => 'App\\Http\\Controllers\\Language\\LocalizationController@changeLanguage',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'change-language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ITPCNcSH50ZVMrAL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-subcribe-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\SubcribeEmailController@sendMail',
        'controller' => 'App\\Http\\Controllers\\Web\\SubcribeEmailController@sendMail',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ITPCNcSH50ZVMrAL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'logged-out',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n1UUjcXphwciOGGq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'logged-out',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n1UUjcXphwciOGGq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6N43MA9LEObuiwAv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@forgotPasswordForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@forgotPasswordForm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6N43MA9LEObuiwAv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zOlGwX8xTi3yv7zW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@forgotPassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zOlGwX8xTi3yv7zW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.password.resetPasswordForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@resetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@resetPasswordForm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'backend.password.resetPasswordForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/auth/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthenticateController@resetPassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'backend.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4C71UKYZ8KFgX4iq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":345:{@92jCmbnhc7qWiDR+pgzVW6Jq0NxTBrTtt2mq7+3mRqg=.a:5:{s:3:"use";a:0:{}s:8:"function";s:132:"function () {
            \\Illuminate\\Support\\Facades\\Auth::logout();
            return \\redirect(\\route(\'admin.login\'));
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004d282cca000000000d3cc2e6";}}',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4C71UKYZ8KFgX4iq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CM30R4avu2I76gqR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/admin_management',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
          3 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@adminIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@adminIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CM30R4avu2I76gqR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rYJDaUIxkhK6RKe5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/client_management',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@clientIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@clientIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rYJDaUIxkhK6RKe5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZwiQJTUgfOCBc4IQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/create_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
          3 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@showCreateAccountForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@showCreateAccountForm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZwiQJTUgfOCBc4IQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DnBFPJwRIToNIHUN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/create_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@createAccountAdmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@createAccountAdmin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DnBFPJwRIToNIHUN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XmTEUEmH1INwbFA0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account/admin_management',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XmTEUEmH1INwbFA0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7xTz2FOYCnmY0F3S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7xTz2FOYCnmY0F3S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zRXrcUDYu7HZplxy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zRXrcUDYu7HZplxy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FSHQayanDi2ZK86K' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/account/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FSHQayanDi2ZK86K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y2LIHyEbM3cQC5j4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@showChangePasswordForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@showChangePasswordForm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Y2LIHyEbM3cQC5j4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ODyAuEoBtHoSy1si' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account/change-password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@changePassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ODyAuEoBtHoSy1si',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QgZ1Ih91LGfGmG2l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/search/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@searchAdmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@searchAdmin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QgZ1Ih91LGfGmG2l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lDE2Aw3xlnvxAWTv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/search/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountController@searchClient',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountController@searchClient',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lDE2Aw3xlnvxAWTv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zmINR7X4m9XyxTDm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zmINR7X4m9XyxTDm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@allIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@allIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'product.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v12Yu63qXLURKPjv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/man',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@manIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@manIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v12Yu63qXLURKPjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1rHCfV5o550rvhwY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/woman',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@womanIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@womanIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1rHCfV5o550rvhwY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SEO6GNEZLkkqS8LE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/kid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@kidIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@kidIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SEO6GNEZLkkqS8LE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wwIug6L9sAXjex62' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wwIug6L9sAXjex62',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Gl6YSIeQdsrhWbS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3Gl6YSIeQdsrhWbS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HgvwYhJJKAK4jvJl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HgvwYhJJKAK4jvJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Doi6sXxGB5faicBI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Doi6sXxGB5faicBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HmNbdxdvLLwr4qOE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HmNbdxdvLLwr4qOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/product/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'product.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h0lOVgWS2bsoEsYk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@showOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@showOrder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::h0lOVgWS2bsoEsYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v1VA7m4Q4Qy1hl2u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/order-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@showOrderItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@showOrderItem',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v1VA7m4Q4Qy1hl2u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1RwgOaWN967uHzJd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@showShipping',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@showShipping',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1RwgOaWN967uHzJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tS9jbfkPcMeOdULo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@searchOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@searchOrder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tS9jbfkPcMeOdULo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DqxvsUksydsnfAJc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/order-item/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@searchOrderItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@searchOrderItem',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DqxvsUksydsnfAJc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9RECsvvWjmD4ANcX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/shipping/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@searchShipping',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@searchShipping',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9RECsvvWjmD4ANcX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9yr0BvX8aHi7Jk9K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statistical',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StatisticalController@showStatistical',
        'controller' => 'App\\Http\\Controllers\\Admin\\StatisticalController@showStatistical',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9yr0BvX8aHi7Jk9K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CFblHgHcSn9QNDwv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubcribeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubcribeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CFblHgHcSn9QNDwv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bwCKkyLNI7GucHHu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcribe/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubcribeController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubcribeController@search',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bwCKkyLNI7GucHHu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'change-language-admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authenticated-as-admin',
          2 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Language\\LocalizationController@changeLanguage',
        'controller' => 'App\\Http\\Controllers\\Language\\LocalizationController@changeLanguage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'change-language-admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
