<body class="bbody">
      @include('header')
          <div class="header-image">
            <img src="{{ $mepic }}" alt="" class="mepic">
          </div>
          <div class="home-text">
          「My Style〜自身を知るためのwebsite〜」は細部における空間の作り方やサイズ感、統一感にこだわりシンプルに仕上げました。
          </div>
          <div class="about-site-content">
            <div class="my-apps">
              <div class="my-apps-head">#半年で実装したこと</div>
              <div class="implemented-apps">
                <a href="/app1" class="myapp">
                  <img src="{{ $frima }}" alt="" class="apppic"> 
                  <h2 class="">Furima app</h2>
                </a>
                <a href="/app2" class="myapp">
                  <img src="{{ $sapphire }}" alt="" class="apppic noimg"> 
                  <h2 class="">Sapphire</h2>
                </a>
                <a href="/app3" class="myapp">
                  <img src="{{ $myhp }}" alt="" class="apppic">  
                  <h2 class="">Homepage</h2>
                </a>
                <a href="/app4" class="myapp">
                  <img src="{{ $calendar }}" alt="" class="apppic"> 
                  <h2 class="">Calendar</h2>
                </a>
              </div>
            </div>
          </div>
          @include('footer')
