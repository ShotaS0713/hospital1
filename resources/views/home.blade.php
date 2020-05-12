    <body class="bbody">
      @include('header')
          <div class="header-image">
            <img src="{{ $path }}" alt="" class="sbpic">
          </div>
          <div class="home-text">
          「My Style〜自身を知るためのwebsite〜」は細部における空間の作り方やサイズ感、統一感にこだわりシンプルに仕上げました。
           
          </div>
          <div class="site-content">
            <div class="my-strengths">
              <div class="my-strengths__head">#自己PR・強み ５選</div>
              <div class ="strengh"> 
                <div class = "myst">１ 主体性。。。</div>
                自分から進んで行動する力があります。もくもく会等のイベント交流やテックキャンプで自分から話しかけることを意識してコミュニケーションを取ってきました。
              </div>
              <div class ="strengh"> 
                <div class = "myst">２ 適応力。。。</div>
                まだまだ若いこともあり、吸収能力が高いと自負しています。新しいことをどんどん吸収する力があります。また、役所時代に年配の方々から学んだ経験を生かしていきたいと考えています。
              </div>
              <div class ="strengh"> 
                <div class = "myst">３ 逆算力。。。</div>
                私が、物事を進めていく上で一番大事にしていることです。毎日やることリストと時間単位のスケジュールを前日の夜に書き、ゴールから逆算する習慣があります。
              </div>
              <div class ="strengh"> 
                <div class = "myst">４ 収集力。。。</div>
                毎日、移動時はkindleで本を読む習慣をつけています。また、インターネットを使って世の中の流れやそれに基づく情報を自分なりに取捨選択し、取り入れています。
              </div>
              <div class ="strengh"> 
                <div class = "myst">５ 体力。。。</div>
                小学生から大学生時代に部活をしていたので、時間を守る、夜更かししない、朝しっかり起きる、が習慣化されており、日中の体力には自信があります。
              </div>
            </div>
            <div class="howiwanna">
              <div class="my-strengths__head">#何故webエンジニアになりたいのか</div>
              <div class="howiwanna-sentence">
                前職での経験を契機に、IT技術により人や社会の役に立ちたいと考えたからです。<br>
              </div>
              <div class="howiwanna-sentence">
                前職では５年、１０年と保存期間が定められている文書の多くが倉庫に紙で眠っていました。正直、探し出すのにも時間がかかり、効率が悪いと感じました。
              </div>   
              <div class="howiwanna-sentence">
                また、世の中がインターネットやIT技術などによって目まぐるしい成長を遂げている中、ギャップを感じ、自分自身社会の成長速度に合わせて知識を身につけつつ、世の中に貢献したいと思いました。
              </div>  
              <div class="howiwanna-sentence">
                そのような環境に身を置きたく、未経験からでもエンジニアを目指すことができるテックキャンプに入校しました。学習の過程で、多くのエラーを解決しながら、思いを形に近づけていく過程に楽しさとやりがいを感じました。<br>
              </div>  
              <div class="howiwanna-sentence">
                また、プログラミングに触れることで世の中の見え方が変わり、もっとIT業界を知りたい、より多くの方と共通の目標を目指したい、と心から思いそこで決意を固めました。
              </div>  
            </div>
          </div>
          <div class="myappsinfo">※尚、個人で実装したことはmyappsページにございます。</div>
          @include('footer')

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>