<body class="bbody">
      @include('header')
          <div class="app-info">
            <h2 class="appname">Calendartodo</h2>
            <p class="app-date">January 2020</p>
            <ul class="project-desc">
              <li class="details">・ ３ヶ月勉強したのち初めて、自由に実装した作品になります。<br></li>
              <li class="details">・ 結果的には知識不足でしたが、毎日、時間単位でスケジュールを計画、調整していることから、もっと自分のするべきこととカレンダーを少ないボタンでできないかと考え他のがきっかけです。</li>
              <li class="details">・ 特徴は初めて新しいgemに触れたこと、GoogleAPIを引っ張ってこれたことです。<br></li>
            </ul>
            <ul class="berbs">
              <li class="berb">HAML/SCSS Coding</li>
              <li class="berb">Javascript/Ruby/Rails</li>	
            </ul>
            <div class="link-button">
              <p>
                <a class="button" href="https://github.com/shimish000/calendartodo">Open GithubOpen Github</a>
              </p>
            </div>
            <div class="project-screen">
              <img src="{{ $calendar }}" alt="" class="mepic" sizes="(max-width: 1680px) 100vw, 1680px"> 
            </div>
          </div>
          @include('footer')