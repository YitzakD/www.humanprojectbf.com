<div class="dev-header bottom-border dev-bgc-grey">

    <div class="in-header">

        <span class="h-logo no-margin">
            <a href="index.php">
                <img class="img-lg" src="assets/media/uses/logo.png">
            </a>
        </span>

        <ul class="menu float-right text-size-zx">

            <li>
                <a href="index.php" <?= $page_actif === 'home' ? 'class="live"' : '' ?>>
                    <?= $menu['home'][$_SESSION['locale']]; ?>
                </a>
            </li>

            <li>
                <a href="aboutus.php" <?= $page_actif === 'pres' ? 'class="live"' : '' ?>>
                    <?= $menu['pres'][$_SESSION['locale']]; ?>
                </a>
            </li>

            <li>
                <a href="#" <?= $page_actif === 'service' ? 'class="live"' : '' ?>>
                    <?= $menu['nav-service'][$_SESSION['locale']]; ?>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;
                </a>
                <ul class="menu-dropDown">
                    <li>
                        <a href="#"><?= $menu['joboffer'][$_SESSION['locale']]; ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $menu['serviceoffer'][$_SESSION['locale']]; ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $menu['resumes'][$_SESSION['locale']]; ?></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" <?= $page_actif === 'galery' ? 'class="live"' : '' ?>>
                    <?= $menu['showroom'][$_SESSION['locale']]; ?>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;
                </a>
                <ul class="menu-dropDown">
                    <li>
                        <a href="#"><?= $menu['picts'][$_SESSION['locale']]; ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $menu['videos'][$_SESSION['locale']]; ?></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" <?= $page_actif === 'imprim' ? 'class="live"' : '' ?>>
                    <?= $menu['imprim'][$_SESSION['locale']]; ?>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>&nbsp;
                </a>
                <ul class="menu-dropDown">
                    <li>
                        <a href="#"><?= $menu['plaquette'][$_SESSION['locale']]; ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $menu['journal'][$_SESSION['locale']]; ?></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" <?= $page_actif === 'contact' ? 'class="live"' : '' ?>>
                    <?= $menu['contact'][$_SESSION['locale']]; ?>
                </a>
            </li>

            <li>
                <span class="vertical-divider"></span>
            </li>

            <li>
                <a href="#" <?= $page_actif === 'user' ? 'class="live"' : '' ?>>
                    <i class="fa fa-user-circle"></i>
                </a>
            </li>

        </ul>

    </div>

</div>
