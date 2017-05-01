<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/app.css" rel="stylesheet" />
<script src="/js/app.js"></script>
<body>
<div class='navbar navbar-fixed-top'>
    <nav class='navbar-inner header'>
        <div class='container'>
            <div class='brand'>
                Dota2Experts
            </div>
            <ul class="pull-right navbar-ul">
                <li><a href="#">News</a></li>
                <li><a href="#">Guides</a></li>
                <li><a href="#">Videos</a></li>
            </ul>
        </div>
    </nav>
    <br>
</div>
<div class="container-outer">
@yield('content')
<div class="footer center">
    <p>Copyright Dota2Experts. Dota 2 is a registered trademark of Valve Corporation.</p>
</div>
</div>
</body>
</html>