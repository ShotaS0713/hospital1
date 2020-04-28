<body class="bbody">
      @include('header')
          <div class="header-image">
            <img src="/storage/08.jpg" alt="" class="mepic">
          </div>
          <div class="home-text">
          「My Style〜自身を知るためのwebsite〜」は細部における空間の作り方やサイズ感、統一感にこだわりシンプルに仕上げました。
          </div>
          <div class="about-site-content">
            <div class="my-apps">
              <div class="my-apps-head">#半年で実装したこと</div>
              <div class="implemented-apps">
                <a href="/app1" class="myapp">
                  <img src="/storage/fm64d.jpg" alt="" class="apppic">
                  <h2 class="">Furima app</h2>
                </a>
                <a href="/app2" class="myapp">
                  <h2 class="">Sapphire</h2>
                </a>
                <a href="/app3" class="myapp">
                  <img src="/storage/myhomepage1.jpg" alt="" class="apppic">  
                  <h2 class="">Homepage</h2>
                </a>
                <a href="/app4" class="myapp">
                  <img src="/storage/calendartodo.png" alt="" class="apppic">
                  <h2 class="">Calendar</h2>
                </a>
              </div>
            </div>
          </div>
          @include('footer')
