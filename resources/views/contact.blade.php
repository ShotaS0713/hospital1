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
      <title>myhomepage2</title>
    </head>
    <body class="bbody">
      @include('header')
      <div class="header-image">
        <img src="{{ $books }}" alt="" class="mepic"> 
      </div>
          <div class="home-text">
            <div class='contact'>
              <form action="confirm" method="post" name="Form1">
              {{ csrf_field() }}
                      <div class="form-group">
                          <label>Your Name <span class="label label-danger">*Mandantry</span></label>
                          <input type="text" class="form-control" placeholder="清水 翔太" name="name" required>
                          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <label>E-mail Address <span class="label label-danger">*Mandantry</span></label>
                          <input type="email" class="form-control" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
                          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="○○県△△市□□町xxxx-yy-z" name="address">
                      </div>
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" class="form-control" placeholder="xxx-yyyy-zzzz" name="phone">
                      </div>
                      <label>Subject</label><br>
                      <label class="radio-inline">
                          <input type="radio" name="subjectR" value="checkboxA" onClick="changeDisabled()"> 〇〇のご依頼について
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="subjectR" value="checkboxB" onClick="changeDisabled()"> △△について
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="subjectR" value="others" onClick="changeDisabled()"> その他(下記の件名にご記入ください)
                      </label>
                      <div class="form-group" style="margin-top:10px;">
                          <input type="text" class="form-control" placeholder="〇〇について" name="subject" onClick="changeDisabled()">
                      </div>
                      <div class="form-group">
                          <label>Comment <span class="label label-danger">*Mandantry</span></label>
                          <textarea placeholder="お問い合わせ内容" rows="10" class="form-control" name="main" required></textarea>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                      </div>
                      <button type="submit" class="btn btn-warning btn-lg btn-block">Submit</button>
                  </form>

              <!-- 件名その他を押したときだけテキストボックスをONにする -->
              <script type="text/javascript">
                  function changeDisabled() {
                      if ( document.Form1["subjectR"][2].checked ) {
                          document . Form1["subject"] . disabled = false;
                      } else {
                          document . Form1["subject"] . disabled = true;
                      }
                  }
                  window.onload = changeDisabled;
              </script>
            </div>
          </div>
          @include('footer')
    </body>