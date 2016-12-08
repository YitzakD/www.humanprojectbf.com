<div class="hp-footer-div">

    <div class="hp-block no-margin">

        <div class="hp-footer-menu-div">

            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['about'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['home'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['pres'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['service'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['activity'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['userspace'][$_SESSION['locale']]; ?></a></li>
                </ul>
            </div>
            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['features'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['categ'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['joboffer'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['stats'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['testimonials'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['booklet'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['newsp'][$_SESSION['locale']]; ?></a></li>
                </ul>
            </div>
            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['contact'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['contactus'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['career'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['faq'][$_SESSION['locale']]; ?></a></li>
                </ul>
            </div>

        </div>

        <div class="clearer-right"></div>

    </div>

    <div class="in-footer">

        <div class="divider-grey margin-bottoms-zx"></div>

        <div class="hp-copy-right">

            <div class="inlined float-left">
                <img class="img-zx" src="assets/media/uses/icon.png" />
            </div>

            <div class="inlined float-right text-size-zx">
                <?= WEBSITE_COPYRIGHT; ?>
                &nbsp;|&nbsp;
                <a class="btn-link-footer" href="#"><?= $title = $menu['mentioned'][$_SESSION['locale']]; ?></a>
            </div>

        </div>

        <div class="clearer-right"></div>


    </div>


</div>