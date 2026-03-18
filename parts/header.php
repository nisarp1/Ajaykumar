<!-- start header -->
<header>
    <!-- Tricolor Top Line -->
    <div class="w-100 h-5px bg-tricolor-gradient position-absolute top-0 start-0 z-index-999"></div>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg bg-white box-shadow-medium border-bottom-tricolor sticky-header header-appear-down-scroll" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="index.php">
                    <span class="fs-24 fw-700 text-dark-gray text-nowrap alt-font">Ajaykumar Sarnaik <img
                            src="images/new/hand.png" alt="" class="ms-2 position-relative"
                            style="height: 60px; max-height: 60px !important; top: -5px;"></span>
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

                        <!-- Home -->
                        <li class="nav-item">
                            <a href="index.php"
                                class="nav-link text-royal-blue <?php echo ($current_page == 'index.php') ? 'fw-700' : ''; ?>">Home</a>
                        </li>

                        <!-- About Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="about-us.php"
                                class="nav-link text-royal-blue dropdown-toggle <?php echo ($current_page == 'about-us.php') ? 'fw-700' : ''; ?>"
                                id="navbarAbout" role="button" aria-expanded="false">About</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarAbout">
                                <li><a class="dropdown-item" href="about-us.php">About the Leader</a></li>
                                <li><a class="dropdown-item" href="about-us.php#biography">Biography</a></li>
                                <li><a class="dropdown-item" href="about-us.php#about-philosophy">Values &
                                        Philosophy</a></li>
                            </ul>
                        </li>

                        <!-- Journey Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="political-journey.php"
                                class="nav-link text-royal-blue dropdown-toggle <?php echo in_array($current_page, ['political-journey.php', 'campaigns.php', 'associations.php', 'bagalkot.php']) ? 'fw-700' : ''; ?>"
                                id="navbarJourney" role="button"
                                aria-expanded="false">Journey</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarJourney">
                                <li><a class="dropdown-item" href="political-journey.php">Political Journey</a></li>
                                <li><a class="dropdown-item" href="campaigns.php">Campaigns & Events</a></li>
                                <li><a class="dropdown-item" href="associations.php">Notable Associations</a></li>
                                <li><a class="dropdown-item" href="bagalkot.php">Bagalkot Legacy</a></li>
                            </ul>
                        </li>

                        <!-- Focus Areas -->
                        <li class="nav-item">
                            <a href="associations.php" class="nav-link text-royal-blue <?php echo ($current_page == 'associations.php') ? 'fw-700' : ''; ?>">Focus Areas</a>
                        </li>

                        <!-- Legislative -->
                        <li class="nav-item">
                            <a href="bagalkot.php" class="nav-link text-royal-blue <?php echo ($current_page == 'bagalkot.php') ? 'fw-700' : ''; ?>">Legislative</a>
                        </li>


                        <!-- Contact Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="contact.php"
                                class="nav-link text-royal-blue dropdown-toggle <?php echo in_array($current_page, ['contact.php', 'join-movement.php', 'volunteer.php', 'voice-of-people.php']) ? 'fw-700' : ''; ?>"
                                id="navbarContact" role="button"
                                aria-expanded="false">Contact</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarContact">
                                <li><a class="dropdown-item" href="contact.php">Get in Touch</a></li>
                                <li><a class="dropdown-item" href="join-movement.php">Join the Movement</a></li>
                                <li><a class="dropdown-item" href="volunteer.php">Volunteer</a></li>
                                <li><a class="dropdown-item" href="voice-of-people.php">Voice of the People</a></li>
                            </ul>
                        </li>

                        <!-- Mobile Language Switcher (Visible only on mobile/tablet) -->
                        <li class="nav-item d-lg-none mt-3 border-top pt-3">
                            <div class="px-3">
                                <a href="javascript:void(0);"
                                    class="widget-text text-royal-blue fs-17 me-3 fw-600">English</a>
                                <span class="text-royal-blue opacity-5">|</span>
                                <a href="javascript:void(0);" class="widget-text text-royal-blue fs-17 ms-3">Kannada</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-lg-flex">
                <div class="header-icon">
                    <div class="d-inline-block me-85px lg-me-0">
                        <a href="javascript:void(0);" class="widget-text text-royal-blue fs-17 me-3 fw-600">English</a>
                        <span class="text-royal-blue opacity-5">|</span>
                        <a href="javascript:void(0);" class="widget-text text-royal-blue fs-17 ms-3">Kannada</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->