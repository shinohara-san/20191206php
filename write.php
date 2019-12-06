<?php
// ここにphpの処理を記述しよう
// var_dump($_POST);
// // echo count($_POST);
// exit();
$name = $_POST['name'];
$email = $_POST['email'];
$kinki = $_POST['kinki'];
$favorite_song = $_POST['favorite_song'];

// exit();
// echo $name;
// echo $email;
// echo $kinki;
// echo $favorite_song;

if (isset($_POST['理由']) && is_array($_POST['理由'])) {
  $reasons = implode(",", $_POST["理由"]);
}
// echo $reasons;
// $choices1 = $_POST['欲しいもの[1]'];
$comment = $_POST['comment'];
// echo $comment;
// exit();
// $str = $created_at . ',' . $name . ',' . $comment;
$str = $kinki . ',' . $favorite_song . ',' . $reasons;
// echo $str;

// echo count($kinki);
// echo count($favorite_song);
// echo count($reasons);

// exit();


$file = fopen('data/data.csv', 'a');
flock($file, LOCK_EX);
// fwrite($file, $str . "\n"); 
// fwrite($file, $kinki. '/');
// fwrite($file, $favorite_song. '/');
// fwrite($file, $reasons. '/');
fwrite($file, $kinki . "\n");
// fwrite($file, $kinki.  "");
// fwrite($file, $kinki.  "\n");
// fwrite($file, $favorite_song.  "\n");
// fwrite($file, $reasons.  "\n");
flock($file, LOCK_UN);
fclose($file);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>write</title>
  <style>
    body {
      background-image: url(img/kinki.jpg);
      padding: 0;
      margin: 0;
      background-size: cover;
      background-position: center;
      width: 100vw;
      height: 100vh;
    }

    .modalish {
      position:relative;
      top: 50px;
      left: 0;
      right: 0;
      margin: 0 auto;
      text-align:center;
    }

    a{
      cursor:pointer;

    }
  </style>
</head>

<body>
  <div class="modalish">
    <div>ありがとうございました。</div>
    <div><a href="read.php">結果</a></div>
  </div>

</body>

</html>