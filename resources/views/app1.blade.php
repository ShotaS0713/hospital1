<body class="bbody">
      @include('header')
          <div class="app-info">
            <h2 class="appname">freemarket64d</h2>
            <p class="app-date">March 2020</p>
            <p class="project-desc">
                ・ 私自身初のアジャイル開発で、フリマアプリを４人で２ヶ月（全員働きながら）で実装しました。<br>
                ・ アカウントを作り、商品を出品・購入できるものとなっています。<br>
                ・ 売りは、他の同期のチームに比べて一番必須項目＋αを実装したところです。<br>
                ・ Javascriptで細かい部分にこだわりました。<br>
                （トップページのカテゴリ、出品時の利益率計算、あいまい検索etc.）
            </p>
            <ul class="berbs">
              <li class="berb">HAML/SCSS Coding</li>
              <li class="berb">Javascript/Ruby/Rails</li>	
            </ul>
            <div class="link-button">
                  <p>
                    <a class="button" href="http://52.193.48.41/">Launch Website</a>
                  </p>
            </div>
            <div class="project-screen">
              <img src="/storage/fm64d.jpg" alt="themify1" width="1680" height="1000" class="mepic" sizes="(max-width: 1680px) 100vw, 1680px">
            </div>
          </div>
          @include('footer')