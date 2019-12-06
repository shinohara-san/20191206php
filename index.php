<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <style>
    body {
      background-image: url(img/kinki.jpg);
      padding: 0;
      margin: 0;
      background-size: cover;
      background-position: center;
    }

    body {
      animation: fadeIn 1s ease 0s 1 normal;
      -webkit-animation: fadeIn 1s ease 0s 1 normal;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @-webkit-keyframes fadeIn {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    header {
      background: goldenrod;
    }

    h1 {
      color: white;
      width: 60%;
      margin: 0 auto;
      padding: 10px 0;
      text-align: center;
    }

    .flex {
      display: flex;
      padding: 20px 0;
    }

    form {
      width: 60%;
      margin: 0 auto;
    }

    .kinki_pic img {
      width: 300px;
      height: 300px;

    }

    input {
      font-size: 20px;
      padding: 5px;

      border: none;
      /* width:100%; */
    }

    textarea {
      width: 100%;
      font-size: 20px;
      padding: 5px;
      border: none;
    }

    .personal_info {
      width: 65%;
      margin: 0 auto;
    }

    .input_part {
      margin: 30px 0;
    }

    button {
      font-size: 20px;
      padding: 5px 20px;
      border-radius: 5px;
      color: white;
      background: goldenrod;
      border: none;
    }

    .title {
      color: white;
      text-decoration: none;
    }

    /* .fadein{
      visibility: hidden;
    } */
  </style>
  <title>index</title>
</head>

<body>
  <header>
    <h1><a href="read.php" class="title">KinKi Kidsどっち派？！アンケート</a></h1>
  </header>
  <!-- <div class="bg"></div> -->

  <form id="fadein" class="fadein" action="write.php" method="post">
    <!-- <div>お問い合わせ</div> -->
    <!-- <div><a href="read.php">一覧</a></div> -->
    <div class="personal_info">
      <div class="input_part">
        <div style="text-align:center;">お名前</div>
        <input type="text" name="name" style="width:100%;" placeholder="name">
      </div>
      <div class="input_part">
        <div style="text-align:center;">Eメールアドレス</div>
        <input type="email" name="email" style="width:100%;" placeholder="kinkikids@example.com">
      </div>
      <div style="text-align:center;">どっち</div>
      <div class="flex" style="justify-content: space-evenly;">
        <div>
          <div class="kinki_pic" style="padding-right: 30px;"><img id="tsuyo" src="img/tsuyoshi.jpg" alt=""></div>
          <label style="position: relative;
    left: 100px;"><input type="radio" name="kinki" value="堂本剛" id="tsuyo_btn">堂本 剛</label>
        </div>
        <div>
          <div class="kinki_pic"><img id="koi" src='img/koichi.jpg' alt=""></div>
          <label style="position: relative;
    left: 100px;"><input type="radio" name="kinki" value="堂本光一" id="koi_btn">堂本 光一</label>
        </div>
      </div>

      <div class="input_part">
        <div style="text-align:center;">理由</div>
        <div>
          <label><input type="checkbox" name="理由[]" value="外見">外見</label>
          <label><input type="checkbox" name="理由[]" value="性格">性格</label>
          <label><input type="checkbox" name="理由[]" value="生き方">生き方</label>
          <label><input type="checkbox" name="理由[]" value="才能">才能</label>
          <label><input type="checkbox" name="理由[]" value="ファッション">ファッション</label>
          <label><input type="checkbox" name="理由[]" value="ダンス">ダンス</label>
          <label><input type="checkbox" name="理由[]" value="その他">その他</label>
        </div>
      </div>

      <div class="input_part">
        <div style="text-align:center;">一番好きな曲</div>
        <select name="favorite_song" style="width:100%; font-size:20px;">
          <option value=null>-選択してください-</option>
          <option value="愛のかたまり">愛のかたまり</option>
          <option value="Anniversary">Anniversary</option>
          <option value="ガラスの少年">ガラスの少年</option>
          <option value="フラワー">フラワー</option>
          <option value="青の時代">青の時代</option>
          <option value="もう君以外愛せない">もう君以外愛せない</option>
          <option value="ボクの背中には羽根がある">ボクの背中には羽根がある</option>
          <option value="カナシミブルー">カナシミブルー</option>
          <option value="愛されるより愛したい">愛されるより愛したい</option>
          <option value="ジェットコースターロマンス">ジェットコースターロマンス</option>
          <option value="その他">その他</option>
        </select>
      </div>

      <div class="input_part">
        <div style="text-align:center;">コメント</div>
        <textarea type="text" cols="30" rows="10" name="comment" placeholder="Comment here"></textarea>
      </div>
      <!-- <textarea cols="30" rows="10" name="comment"></textarea> -->
      <div class="flex" style="text-align: center; justify-content: space-evenly;">
        <!-- <div class="btn" type="submit">送信</div>
        <div class="reset_btn" id="reset">Reset</div> -->
        <button type="submit" name="button">送信</button>
      </div>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    // 剛
    const images1 = [
      'img/tsuyoshi.jpg',
      // 'https://geitopi.com/wp-content/uploads/2019101408.jpg',
      'https://stat.ameba.jp/user_images/20141022/22/nana-0120-51-244/5d/0c/j/o0240032013106270500.jpg?caw=800',
      'https://d2l930y2yx77uc.cloudfront.net/production/uploads/images/4850368/picture_pc_f44565a8d7215f8ccc32a1e4a175b546.jpg',
      // 'http://static.pinky-media.jp/matome/file/parts/I0002982/042bc42d69115246eb25606f6fefca98.jpg',
      'img/sokkuri.png',
      // 'https://pbs.twimg.com/media/DfWvPMbU8AEDe3_.jpg',

    ];
    // 光一
    const images2 = [
      'img/koichi.jpg',
      // 'https://pbs.twimg.com/media/DSZFRe_VoAAC1HS.jpg',
      'https://i0.wp.com/no-title-journal-next.com/wp-content/uploads/2018/08/doumoto.jpg?resize=437%2C584&ssl=1',
      'https://芸能人の実家住所まとめ.com/wp-content/uploads/2018/12/SnapCrab_NoName_2018-12-10_6-54-28_No-00-300x256.png',
      // 'https://i.pinimg.com/originals/89/44/b5/8944b5d2f3110ae1333143dd4beeadd2.jpg',
      'https://news.mynavi.jp/article/20190207-768323/images/001.jpg',
      // 'https://www.sponichi.co.jp/entertainment/news/2019/11/20/jpeg/20191120s00041000220000p_view.jpg',

    ];

    let timer1;
    let timer2;
    let num = 0;
    let num1 = 0;
    // let num = Math.floor(Math.random() * images1.length);
    const tsuyo = document.getElementById('tsuyo');
    const koi = document.getElementById('koi');

    function slideshow_timer1() {
      if (num === images1.length - 1) {
        num = 0;
      } else {
        num++;
      }
      tsuyo.src = images1[num];
      // koi.src = images2[num1];
    }

    function slideshow_timer2() {
      if (num1 === images2.length - 1) {
        num1 = 0;
      } else {
        num1++;
      }
      koi.src = images2[num1];
    }

    timer1 = setInterval(slideshow_timer1, 100);
    timer2 = setInterval(slideshow_timer2, 100);

    $('#tsuyo_btn').on('click', function() {
      clearInterval(timer1);
    });

    $('#koi_btn').on('click', function() {
      clearInterval(timer2);
    });

    // $('window').on('click', function(){
    //   $('#fadein').removeClass('#fadein');
    // });
  </script>
</body>

</html>