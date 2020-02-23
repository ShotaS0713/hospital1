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
    <body class="bbody cbody">
      @include('header')
      <div class="home-text">
        <div id="style"></div>
        <div class="conrtainer">
            <div class="row">
                <div class="conrtainer left">            
                    <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                        お問い合わせありがとうございます。<br>
                        この内容で送信いたします。<br>
                        <table class="table" style="table-layout:fixed;">
                            <thead><th style="width:200px;"></th><th></th></thead>
                            <tbody>
                                <tr>
                                    <td>[お名前]:</td>
                                    <td>
                                        <?php echo $_POST['name']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[メールアドレス]:</td>
                                    <td>
                                        <?php echo $_POST['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[住所]:</td>
                                    <td>
                                        <?php echo $_POST['address'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[電話番号]:</td>
                                    <td>
                                        <?php echo $_POST['phone'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[件名]:</td>
                                    <td>
                                        <?php 
                                        if (isset($_POST['subject'])){
                                            echo $_POST['subject'];
                                        }
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[お問い合わせ内容]:</td>
                                    <td>
                                        <?php echo nl2br($_POST['main']); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="/mail" method="post">
                        {{ csrf_field() }}
                            <button type="submit" class="btn btn-success btn-lg btn-block">送信</button>
                        </form>
                        <br>
                        <form action="edit.php" method="post">
                        {{ csrf_field() }}
                            <button type="submit" class="btn btn-warning btn-lg btn-block">編集</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    </body>