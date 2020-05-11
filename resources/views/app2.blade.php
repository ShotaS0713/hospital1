<body class="bbody">
      @include('header')
          <div class="app-info">
            <h2 class="appname">Sapphire</h2>
            <p class="app-date">May 2020</p>
            <ul class="project-desc">
              <li class="details">・ 私自身二つ目のチーム開発で、アプリを２人で５月から実装中です。<br></li>
              <li class="details">・ 今トレンドで、お洒落でおすすめのプレゼントを検索から表示閲覧できるサイトです。<br></li>
              <li class="details">・ 少しでも渡す相手にセンスがいいと思って頂きたい。ネットでおすすめでヒットするものよりも、よりリアルタイムで相手に寄り添ったものを提供したい、そういった思いから開発に至りました。<br></li>
              <li class="details">・ ゆくゆくは最新のおすすめの商品を多くの人に紹介してもらい、多世代の人々で創り上げるアプリケーションになればと思っています。<br></li>
            </ul>
            <ul class="berbs">
              <li class="berb">HAML/SCSS Coding</li>
              <li class="berb">Javascript/Ruby/Rails</li>	
            </ul>
            <div class="link-button">
              <p>
                <a class="button" href="#">Launch Website</a>
              </p>
            </div>
            <div class="project-screen">
              <img src="{{ $sapphire }}" alt="" class="mepic" sizes="(max-width: 1680px) 100vw, 1680px"> 
            </div>
          </div>
          @include('footer')
