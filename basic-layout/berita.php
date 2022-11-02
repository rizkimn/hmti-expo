<?php

function pgzfox($route,$obj){
  include_once('./progrez-fox/progrez-fox.php');
  $formlogin = [
    'type'    => 'userkey',
    'userkey' => 'T06GM0ZUNXLHKV42VM64O7L7EUSP6L2PBXUMNI6Z4G6E0Z6KB1EOXOK082E3C5HC'
  ];
  $pgzfox = new progrezfox;
  $pgzfox->foxauth_file = 'pgzfox-credentials';
  $pgzfox->formlogin = $formlogin;

  switch($route){
    case 'project':
      $res = $pgzfox->project($obj);
    break;
    case 'task':
      $res = $pgzfox->task($obj);
    break;
  }
  return $res;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./asset/favicon.ico" type="image/x-icon">

  <link rel=preconnect href=https://fonts.googleapis.com>
  <link rel=preconnect href=https://fonts.gstatic.com crossorigin>
  <link href=https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap rel=stylesheet>
  
  <link rel=stylesheet href=./fonts/hmti-fonticons.css>
  <link rel="stylesheet" href=./berita.css>

  <title>Berita</title>
</head>
<body>
  <header>
    <span class=logo>
      <img src=./asset/hmti_logo.png alt=hmti_logo>
    </span>
    <nav class=menu>
      <ul class=menu-items>
        <li class=menu-item>
          <a href=./home.html class=home-menu>Home</a>
        </li>
        <li class=menu-item>
          <a href=./home.html#profil class=profil-menu>Profil</a>
        </li>
        <li class=menu-item>
          <a href=# class="berita-menu active">Berita</a>
        </li>
        <li class="menu-item dropdown">
          <span class="kegiatan-menu dropdown-trigger"> Kegiatan <i class="hf caret-down"></i> </span>
          <ul class="dropdown-menu kegiatan-menu">
            <li class="dropdown-item skill-class">
              <a href=./kegiatan.html#skill-class>HMTI Skill Class</a>
            </li>
            <li class="dropdown-item hmti-fun">
              <a href=./kegiatan.html#hmti-fun>HMTI Fun</a>
            </li>
            <li class="dropdown-item march-event">
              <a href=./kegiatan.html#march-event>March Event</a>
            </li>
            <li class="dropdown-item it-expo">
              <a href=./kegiatan.html#it-expo>IT Expo</a>
            </li>
          </ul>
        </li>
        <li class="menu-item dropdown">
          <span class="projects-menu dropdown-trigger"> Projects <i class="hf caret-down"></i> </span>
          <ul class="dropdown-menu projects-menu">
            <li class="dropdown-item ai-project">
              <a href=./home.html#keterampilan>Artificial Intelligence</a>
            </li>
            <li class="dropdown-item iot-project">
              <a href=./home.html#keterampilan>Internet of Things</a>
            </li>
            <li class="dropdown-item gis-project">
              <a href=./home.html#keterampilan>Geographic Information System</a>
            </li>
            <li class="dropdown-item troubleshooting-project">
              <a href=./home.html#keterampilan>Troubleshooting</a>
            </li>
            <li class="dropdown-item mobile-dev-project">
              <a href=./home.html#keterampilan>Mobile App Development</a>
            </li>
            <li class="dropdown-item networking-project">
              <a href=./home.html#keterampilan>Network Engineering</a>
            </li>
            <li class="dropdown-item web-dev-project">
              <a href=./home.html#keterampilan>Web Development</a>
            </li>
          </ul>
        </li>
        <li class=menu-item>
          <a href=arsip.html class=arsip-menu>Arsip</a>
        </li>
      </ul>
    </nav>
  </header>
  <section class=top-news>
    <div class=hero>
      <div class=hero-background>
        <img src=./asset/berita-hero.jpg alt=hero-berita loading=lazy>
      </div>
      <div class=hero-overlay>
        <h1 class="headline">Berita Terbaru</h1>
        <div class=news-container>
          <div class="newest">
            <div class="img-thumbnail">
              <img src=./asset/newest-thumbnail.jpg alt=newest-thumbnail>
            </div>
            <div class="news-content">
              <p class="date"><i class="hf time-icon"></i> 2022-07-04</p>
              <h4 class="news-headline">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
              <p class="news-paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium neque in itaque natus quidem laudantium quas. Possimus, incidunt ducimus, accusantium et molestiae magnam reiciendis deleniti at non veniam libero nihil minus voluptate officia, vel magni debitis deserunt modi enim quia veritatis numquam odit doloribus. Perspiciatis, eius illo! Culpa, cum earum...</p>
              <div class="news-cta">
                <a href=# ><button class="read-more cta-btn">Lanjut Baca</button></a> 
              </div>
            </div>
          </div>
          <div class="populars">
            <div class="popular-title">
              <h3>Berita Populer</h3>
            </div>
            <div class="popular-news-list cards">
              <div class="popular-news-item card">
                <div class="card-img">
                  <img src=./asset/popular-thumbnail.jpg alt=popular-thumbnail>
                </div>
                <div class="card-body">
                  <div class="card-body-title">
                    <a href=#><h5>Lorem ipsum dolor sit amet ut...</h5></a>
                  </div>
                  <div class="card-body-paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non recus...</p>
                  </div>
                </div>
              </div>
              <div class="popular-news-item card">
                <div class="card-img">
                  <img src=./asset/popular-thumbnail.jpg alt=popular-thumbnail>
                </div>
                <div class="card-body">
                  <div class="card-body-title">
                    <a href=#><h5>Lorem ipsum dolor sit amet ut...</h5></a>
                  </div>
                  <div class="card-body-paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non recus...</p>
                  </div>
                </div>
              </div>
              <div class="popular-news-item card">
                <div class="card-img">
                  <img src=./asset/popular-thumbnail.jpg alt=popular-thumbnail>
                </div>
                <div class="card-body">
                  <div class="card-body-title">
                    <a href=#><h5>Lorem ipsum dolor sit amet ut...</h5></a>
                  </div>
                  <div class="card-body-paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non recus...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="popular-cta">
              <a href=#news><button class=cta-btn>Lebih Banyak</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="news container" id="news">
    <h2 class="title">News</h2>
    <div class="cards news-list">

      <?php
        $obj_task = [
            'token'     => '8rkeg3pjppkg5qqqefef5o7nd3ph7jg4',
            'flying_id' => '72657a70726f67-2120-5ea64eac4cac1ccce6f64e0e',
            'fields'    => 'task_name',
            'subtask'   => [
              'fields' => 'task_name,description,datetime_done,files',
              'where' => [
                'status_done' => 1  
              ]
            ]
          ];

          $data = pgzfox('task',$obj_task);
          $subtask = $data['subtask'];
          for($i=0;$i<count($subtask);$i++){
            $title    = $subtask[$i]['task_name'];
            $img = $subtask[$i]['files'][0]['link'];
            $content  = substr(strip_tags($subtask[$i]['description']),0,200).'...';
            $datetime = $subtask[$i]['datetime_done'];

            echo `<div class="card news-item">
                    <div class="card-thumbnail">
                      <img src="`. $img .`" alt="thumbnail">
                    </div>
                    <div class="card-content">
                      <h3 class="card-title news-headline"><a href="#">`. $title .`</a></h3> 
                      <p class="news-date"><i class="hf time-icon"></i> `. $datetime .`</p>
                      <p class="news-paragraph">
                        `. $content .`
                      </p>
                    </div>
                  </div>`;
                
          }

      ?>

      <div class="card news-item">
        <div class="card-thumbnail">
          <img src=./asset/popular-thumbnail.jpg alt="thumbnail">
        </div>
        <div class="card-content">
          <h3 class="card-title news-headline"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisi...</a></h3> 
          <p class="news-date"><i class="hf time-icon"></i> 2004-06-16</p>
          <p class="news-paragraph">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Odio Lorem ipsum dolor sit amet. recusandae ab qui placeat 
            minus perferendis, quae tem...
          </p>
        </div>
      </div>

    </div>
    <nav class="pagination">
      <ul>
        <li class="arrow">
          <a href=#>&lt;</a>
        </li>
        <li class="active">
          <a href=#>1</a>
        </li>
        <li>
          <a href=#>2</a>
        </li>
        <li class="arrow">
          <a href=#>&gt;</a>
        </li>
      </ul>
    </nav>
  </section>
  <footer>
    <section class="about cards">
      <div class="profil card">
        <div class="logo">
          <img height=120 src=./asset/hmti_logo.png alt=hmti_logo>
        </div>
        <div class="information">
          <div class="sekretariat">
            <h4 class="title">Sekretariat:</h4>
            <p class="text">Jl. Jati Metro, Kampus 3 Unkhair, Kelurahan Jati, Ternate Selatan, Kota Ternate</p>
          </div>
          <div class="email">
            <h4 class="title">Email:</h4>
            <p class="text">hmtiunkhair@gmail.com</p>
          </div>
          <div class="website">
            <h4 class="title">Website:</h4>
            <a href=# class="text">www.hmtiunkhair.org</a>
          </div>
        </div>
      </div>
      <div class="terkait card">
        <h3 class=card-title>Terkait</h3>
        <div class="card-body">
          <p>Terkait Kami:</p>
          <div class="items">
            <div class="item">
              <strong>Universitas Khairun</strong>
              <a href=https://unkhair.ac.id/ target=_blank>www.unkhair.ac.id</a>
            </div>
            <div class="item">
              <strong>Fakultas Teknik Universitas Khairun</strong>
              <a href=https://ft.unkhair.ac.id/ target=_blank>www.ft.unkhair.ac.id</a>
            </div>
            <div class="item">
              <strong>Prodi Informatika Universitas Khairun</strong>
              <a href=https://if.unkhair.ac.id/ target=_blank>www.if.unkhair.ac.id</a>
            </div>
          </div>
        </div>
      </div>
      <div class="medsos card">
        <h3 class="card-title">Media Sosial</h3>
        <div class="card-body">
          <p>Ikuti media sosial kami untuk informasi 
            terbaru seputar kegiatan kami.</p>
          
          <div class="items">
            <div class="item">
              <a href=https://instagram.com/hmti_unkhair/ target=_blank >
                <i class="hf instagram-icon"></i>
              </a>
            </div>
            <div class="item">
              <a href=https://facebook.com/hmtiunkhair/ target=_blank >
                <i class="hf facebook-icon"></i>
              </a>
            </div>
            <div class="item">
              <a href=https://instagram.com/hmti_unkhair/ target=_blank >
                <i class="hf twitter-icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <span class=copyright>
      <span class=copy-icon>&copy;</span><span class=copy-text>2022 Himpunan Mahasiswa Teknik Informatika Universitas Khairun. All Right Reserved. Hak Cipta HMTI Unkhair.</span>
    </span>
  </footer>
</body>
</html>