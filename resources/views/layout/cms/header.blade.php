<head>
    <title>Propertio Community - Managemen CMS</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <![endif]-->
    <!-- Meta -->
    {{-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> --}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- META UNTUK GOOGLE MAX:100-140 -->
    <meta name="description"
        content="Propertio Community - Consultant. Solusi bagi pencari dan konsultasi terkait properti terbaik di Indonesia" />
    <meta name="keywords"
        content="Rumah , Apartemen , Tanah , Villa , Bangun Rumah , Konsultasi , Immersive , Training Artikel , Ide Kreatif">
    <meta name="author" content="Cinurawa Tech Developer Team">

    <!-- META UNTUK FACEBOOK -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!-- META UNTUK TWITTER -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/public/images/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="http://propertio-consultant.apps.test/assets/cms/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/icon/feather/css/feather.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="http://propertio-consultant.apps.test/assets/cms/assets/css/linearicons.css">

    {{-- Custom CSS --}}
    @yield('custom-css')
    {{-- END Custom CSS --}}

</head>
