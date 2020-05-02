<body class="bbody">
      @include('header')
          <div class="app-info">
            <h2 class="appname">Website Creation</h2>
            <p class="app-date">February 2020</p>
            <ul class="project-desc">
              <li class="details">・ ZAVASのホームページを見よう見まねで少し形を変えた作品です。<br></li>
              <li class="details">・ htmlとcssの復習と将来的にホームページは最低限作れる人になりたいと思い実装しました。<br></li>
              <li class="details">・ こだわりは、sliderをjsで実装した点と、マウスを乗っけた時にhoverで変化をつけることです。<br></li>
            </ul>
            <ul class="berbs">
              <li class="berb">HAML/SCSS Coding</li>
              <li class="berb">Javascript/Ruby/Rails</li>	
            </ul>
            <div class="link-button">
              <p>
                <a class="button" href="https://myhomepage1.herokuapp.com">Launch Website</a>
              </p>
            </div>
            <div class="project-screen">
              <img src="/storage/myhomepage1.jpg" alt="themify1" width="1680" height="1000" class="mepic" sizes="(max-width: 1680px) 100vw, 1680px">
            </div>
          </div>
          @include('footer')
