<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>"><img src="img/logo_dbvp.png" alt="logo" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url('home') ?>">Home</a></li> 
						<li><a href="<?= base_url('about') ?>">About Us</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        <li><a href="<?= base_url('bca') ?>">Kurs Lain</a></li>
                        <?php if(logged_in()) : ?>
                            <li><a class="nav-item nav-link" href="<?= base_url('/logout') ?>">Logout</a></li>
                        <?php else : ?>
                        <li><a href="<?= base_url('/login') ?>">Login</a></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </div>
</header>