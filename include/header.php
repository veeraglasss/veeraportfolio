<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 
 'active'; ?> icon-box">
            <i class="fa fa-home"></i>
            <a href="index.php">
                <h2>Home</h2>
            </a>
        </li>
      
        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 
 'active'; ?> icon-box">
            <i class="fa fa-user"></i>
            <a href="about.php">
                <h2>About</h2>
            </a>
        </li>
        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo 
 'active'; ?> icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.php">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 
 'active'; ?> icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="contact.php">
                <h2>Contact</h2>
            </a>
        </li>
        
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
            <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 
 'active'; ?> icon-box"><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 
 'active'; ?> icon-box"><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo 
 'active'; ?> icon-box"><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
               <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 
 'active'; ?> icon-box"><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>