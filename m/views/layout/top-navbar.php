<!-- FIXED Top Navbar -->
<div class="top-navbar">
    <div class="top-navbar-left">
        <a href="#" id="menu-left" data-activates="slide-out-left">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="top-navbar-right">
        <a href="http://m.adtoday.co.uk/add/" class="button"><i class="fa fa-plus"></i>
        </a>
        <a href="#" class="dropdown-button" data-activates="dropdown1">
            <i class="fa fa-user-circle-o"></i>
        </a>
        <?php if (UserMobile::isGuest()): ?>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="http://m.adtoday.co.uk/account/panel"><i class="fa fa-server"></i> Panel Account</a></li>
                <li><a href="http://m.adtoday.co.uk/account/user"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="http://m.adtoday.co.uk/account/ads"><i class="fa fa-history"></i> My ads</a></li>
                <li class="divider"></li>
                <li><a href="http://m.adtoday.co.uk/account/logout/"><i class="fa fa-user"></i>Logout</a></li>

            </ul>
        <?php else: ?>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="http://m.adtoday.co.uk/login"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="http://m.adtoday.co.uk/register"><i class="fa fa-user"></i> Register</a></li>
                <li class="divider"></li>
            </ul>
        <?php endif; ?>

        <!--<a href="#" id="menu-right" data-activates="slide-out-right">
            <span class="cart-badge">3</span>
            <i class="fa fa-shopping-basket"></i>
        </a>-->
    </div>
    <div class="site-title">
        <h1>AdToday</h1>
    </div>
</div>
<!-- End FIXED Top Navbar -->