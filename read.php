<?php
$file = fopen('data/data.csv', 'r');
// var_dump($file);

flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) {
    // $str .= '<p>' . $line . '</p>';
    $str[] = $line;
  }
}
flock($file, LOCK_UN);
fclose($file);
// $output1 = count($str);
$output = array_count_values($str);
// print_r($output1);
// echo $output;
// exit();
// $json = json_encode($output1);
$json = json_encode($output);
// print_r($output1);
// print_r($output);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>read</title>
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

    .container {
      position: relative;
      left: 46px;
    }
  </style>

</head>

<body>
  <h1 style="text-align:center">KinKi Kidsどっち？！</h1>
  <div class="container">
    <canvas id="myChart" style="height:500px"></canvas>
  </div>
  <div style="text-align:center; padding-bottom:50px;"><a href="index.php">アンケートトップへ戻る</a></div>

  <script type="text/javascript">
    let data = <?php echo $json; ?>;
    // console.log(data);

    let tsuyoshi_num = data['堂本剛' + '\n'];
    let koichi_num = data['堂本光一' + '\n'];
  </script>
  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    // Chart.defaults.global.defaultFontFamily = 'Lato';
    // Chart.defaults.global.defaultFontSize = 18;
    // Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data: {
        labels: ['堂本光一', '堂本剛'],
        datasets: [{
          label: 'Popularity',
          data: [

            koichi_num,
            tsuyoshi_num,
            // ここの数字をPHPから持ってくる
            // data['堂本光一']

            // 106519,
            // 105162,
            // 95072

          ],
          //backgroundColor:'green',
          backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            // 'rgba(255, 206, 86, 0.6)',
            // 'rgba(75, 192, 192, 0.6)',
            // 'rgba(153, 102, 255, 0.6)',
            // 'rgba(255, 159, 64, 0.6)',
            // 'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth: 1,
          borderColor: '#777',
          hoverBorderWidth: 2,
          hoverBorderColor: '#000'
        }]
      },
      options: {
        title: {
          display: false,
          text: 'KinKi Kidsどっち？',
          fontSize: 25
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#000'
          }
        },
        layout: {
          padding: {
            left: 100,
            right: 100,
            bottom: 100,
            top: 100
          }
        },
        tooltips: {
          enabled: true
        }
      }
    });
  </script>

</body>

</html>