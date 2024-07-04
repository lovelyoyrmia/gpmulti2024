<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="GP Multi 2024" />
    <meta name="description" content="GP Multi 2024" />
    <title>
        @yield('title', 'INVITATION GP MULTI 2024')
    </title>
    <link rel="stylesheet" href="/assets/css/nicepage.css" media="screen" />
    
    @yield('css')
    
    <link rel="icon" href="/assets/images/logoGP.png">
    
    <script
      class="u-script"
      type="text/javascript"
      src="/assets/js/jquery.js"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="/assets/js/nicepage.js"
      defer=""
    ></script>
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <link
      id="u-page-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Bagel+Fat+One:400|Monofett:400|Bungee+Shade:400"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "GP Multi"
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="GP Multi 2024" />
    <meta property="og:site_name" content="GP Multi 2024">
    <meta property="og:url" content="https://multi.gpbethaniajkt.org/">
    <meta property="og:image" content="{{asset('/assets/images/logoGP.png')}}">
    <meta property="og:type" content="website" />
  </head>
  <body
    data-home-page="Home.html"
    data-home-page-title="Home"
    data-path-to-root="./"
    data-include-products="false"
    class="u-body u-xl-mode"
    data-lang="en"
  >
    @yield('content')
  </body>
</html>
