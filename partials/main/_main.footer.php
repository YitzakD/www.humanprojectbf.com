<div class="hp-footer-div">

    <div class="hp-block no-margin">

        <div class="hp-footer-menu-div">

            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['about'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['pres'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['showroom'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['service'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['stats'][$_SESSION['locale']]; ?></a></li>
                </ul>
            </div>
            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['features'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['categ'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['joboffer'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['resumes'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['userspace'][$_SESSION['locale']]; ?></a></li>
                </ul>
            </div>
            <div class="hp-footer-menu-block">
                <div class="hp-footer-menu-title text-uppercase margin-bottoms-zx">
                    <?= $title = $menu['contact'][$_SESSION['locale']]; ?>
                </div>
                <ul class="hp-footer-ul">
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['contactus'][$_SESSION['locale']]; ?></a></li>
                    <li class="margin-bottoms-zx"><a href="#"><?= $title = $menu['career'][$_SESSION['locale']]; ?></a></li>
                    <li>
                      <form method="post" action="#" class="form-group">
                          <table class="hp-footer-table">
                              <tr>
                                  <td width="90%">
                                      <input type="email" name="newsletter_value"
                                             class="daf-form-ctrl" style="width: 94%!important; padding: 5px 10px!important"
                                             placeholder="Inscrivez-vous à la newsletter" value="<?= get_input('newsletter_value'); ?>"
                                             required="required" />
                                  </td>
                                  <td width="10%" valign="top">
                                      <button class="btn btn-succes dev-padding" style="border-radius: 0!important">
                                          <i class="fa fa-paper-plane fa-fw"></i>
                                      </button>
                                  </td>
                              </tr>
                          </table>
                      </form>
                  </li>
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
