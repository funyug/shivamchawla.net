<html ng-app="app">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/app.css" rel="stylesheet" />
<script src="/js/app.js"></script>
<title>{{isset($title) ? $title." | ShivamChawla.Net" : "ShivamChawla.Net | Full Stack Developer"}}</title>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=1037738842947914";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="/js/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77447620-1', 'auto');
    ga('send', 'pageview');

</script>
</head>
<body>
<div class='navbar navbar-fixed-top'>
    <nav class='navbar-inner header'>
        <div class='container'>
            <div class='brand'>
               <a href="/">{{ Voyager::setting('site_name') }}</a>
            </div>
            {{ menu('Main Menu','menus.main_menu') }}
        </div>
    </nav>
    <br>
</div>
<div class="container-outer">
@yield('content')
<div class="footer center">
    <p>Copyright Shivam Chawla</p>
</div>
</div>
</body>
</html>