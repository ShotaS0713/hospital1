<div class="hfeed_hite">
        <div class="site_header">
          <div class="site_top">
            <div class="site_top_table">
              <div class="site_blanding">
                <h1 class="site_title">
                  <a href="/" class="sitename">My Style</a>
                </h1>
                <div class="site_description">自分自身を知る</div>
              </div>
            
              <nav class="site_nav">
                <button class="screenmenu"> 
                  <span class="screen-reader-text">メニュー</span>
                  <span class="drawer-hambugar-icon"></span>
                </button>
                <div class="drawer-nav">
                  <div class="drawer-content">
                    <div class="draw-content__inner">
                      <ul class="menu-items">
                        <li class="menu-item">
                          <a href="" class="homebtn">ホーム <i class="fas fa-chevron-down"></i></a>
                         
                          <ul class="sub-menu">
                            <li>
                              <a href="">カスタマイズ</a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="">ページ <i class="fas fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                            <li>
                              <a href=""></a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="/contact">お問い合わせ</a>
                          <ul class="sub-menu">
                            <li>
                              <a href=""></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="todaydate">
                    <?php
                        echo "Today's date is ".date("F d l Y")
                      ?>
                    </div>
                    <form action="" id="sss" method="post">
                      <label for="">
                        <span></span>
                        <input type="search" class="search-field" placeholder="検索..."　value name="s" >
                      </label>
                      <button type="submit" class="search-submit" value="検索">
                      <i class="fas fa-search"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>