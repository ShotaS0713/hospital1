





<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
      <title>aboutme</title>
    </head>
    <body class="bbody">
      @include('header')
          <div class="header-image">
            <img src="/storage/snowboard.jpg" alt="" class="sbpic">
          </div>
          <div class="home-text">
          「My Style〜自身を知るためのwebsite〜」は細部における空間の作り方やサイズ感、統一感にこだわりシンプルに仕上げました。
          </div>
          <div class="site-content">
            <div class="my-strengths">
              <div class="my-strengths__head">・自己PR、強み</div>
              <div class ="strengh"> 
                <div class = "myst">主体性。。。</div>
                自分から進んで行動する力があります。もくもく会等のイベント交流やテックキャンプで自分から話しかけることを意識してコミュニケーションを取ってきました。
              </div>
              
              <div class ="strengh"> 
                <div class = "myst">適応力。。。</div>
                まだまだ若いこともあり、吸収能力が高いと自負しています。新しいことをどんどん吸収する力があります。
              </div>
              <div class ="strengh"> 
                <div class = "myst">。。。</div>
                自分から進んで行動する力があります。もくもく会等のイベント交流やTECHEXPERTで自分から話しかけることを意識してコミュニケーションを取ってきました。
              </div>
              <div class ="strengh"> 
                <div class = "myst">収集力。。。</div>
                毎日、移動時はkindleで本を読む習慣をつけています。また、インターネットを使って世の中の流れやそれに基づく情報を自分なりに取捨選択し、取り入れています。
              </div>
            </div>
            <div class="howiwanna">
              <div class="my-strengths__head">・どうしてwebエンジニアにになりたいのか</div>
              元々、公務員になり休日を楽しみたいという発想を持っていました。このまま約四十年間、平日の週五日の時間を
              好きじゃないことに費やす人生は嫌だと感じ、方向性を変更したいと決意したのがきっかけです。
            </div>
          </div>
          @include('footer')

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>