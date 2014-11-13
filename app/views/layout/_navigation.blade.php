<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    CodeStyx
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="main-nav">
                <ul class="nav navbar-nav text-center">
                    <?php $active = 'class="active"'; ?>
                    <li {{ Request::is('about') ? $active : '' }}>{{ link_to('/about', 'About') }}</li>
                    <li {{ Request::is('products') ? $active : '' }}>{{ link_to('/products', 'Products') }}</li>
                    <li {{ Request::is('calendar') ? $active : '' }}>{{ link_to('/calendar', 'Calendar') }}</li>
                    <li {{ Request::is('articles') ? $active : '' }}>{{ link_to('/articles', 'Articles') }}</li>
                    <li {{ Request::is('blog') ? $active : '' }}>{{ link_to('/blogs', 'Blog') }}</li>
                    <li {{ Request::is('contact') ? $active : '' }}>{{ link_to('/contact', 'Contact') }}</li>
                    <li {{ Request::is('preferences') ? $active : '' }}>{{ link_to('/preferences', 'Preferences') }}</li>
                    <li {{ Request::is('login') ? $active : '' }}>{{ link_to('/login', 'Login') }}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>