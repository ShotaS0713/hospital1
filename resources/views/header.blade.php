<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
      <link rel="stylesheet" href="{{ asset('css/about.css') }}">
      <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
      <title>aboutme</title>
    </head>  
    <div class="hfeed_hite">
      <div class="site_header">
        <div class="site_top">
          <div class="site_top_table">
            <div class="site_blanding">
              <h1 class="site_title">
                <a href="/" class="sitename">My Style</a>
              </h1>
              <div class="site_description">自身を知るためのwebsite</div>
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
                          <a href="/" class="homebtn">Home </a>
                          
                          <ul class="sub-menu">
                            <li>
                              <a href="">カスタマイズ</a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="/about">My apps</a>
                          <ul class="sub-menu">
                            <li>
                              <a href=""></a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="/contact">Contact</a>
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
                        <input type="search" class="search-field" placeholder="検索..." value name="s" >
                      </label>
                      <button type="submit" class="search-submit" value="検索">
                        <i class="fas fa-search"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </nav>

            <div id="nav-drawer">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input"><span></span></label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
              <div id="nav-content">
                <nav class="site_nav_hamburger">
                  <button class="screenmenu"> 
                    <span class="screen-reader-text">メニュー</span>
                    <span class="drawer-hambugar-icon"></span>
                  </button>
                  <div class="drawer-nav">
                    <div class="drawer-content">
                      <div class="draw-content__inner">
                        <!-- <div class="todaydate">
                          <?php
                            // echo "Today's date is ".date("F d l Y")
                          ?>
                        </div> -->
                        <ul class="menu-items">
                          <li class="menu-item">
                            <a href="/" class="homebtn">Home ></a>
                            
                            <ul class="sub-menu">
                              <li>
                                <a href="">カスタマイズ</a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="/about">My apps</a>
                            <ul class="sub-menu">
                              <li>
                                <a href=""></a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="/contact">Contact</a>
                            <ul class="sub-menu">
                              <li>
                                <a href=""></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>

