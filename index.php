<?php
putenv('jwtkey=cOo.6*9D=-eYFR.6B5R2wE79.5$4<P*S');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Radio en linea gratis ">
  <title>Streming - Radios Online</title>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css'> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>
  <link rel='stylesheet' href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/radio.css">
  <link rel="stylesheet" href="../assets/css/music.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7fb33a3f15.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <!-- <script src="../assets/js/index.js"></script> -->
  <script src="../master.js"></script>



  <style>
    figure {
      margin: 0;
    }

    body {
      /* font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; */
      font-family: 'Josefin Sans', sans-serif;
      font-size: 12px;
      line-height: 1.42857143;
      background-color: #182f34;
    }


    input[type=range] {
      display: block;
      width: 70%;
      height: 4.5px;
      color: white;
      font-weight: bold;
      border-radius: 9px;
    }
    .hide {
  display: none;
}

    figcaption.songName {
      visibility: hidden;
      display: none;
    }
  </style>
</head>

<body>

  <div id="borrar">
    <s -="<?php echo getenv('jwtkey'); ?>">
    </s>
  </div>

  
  <div id="loader" class="loader">
    <div class="loading-icon"><i class="fas fa-spinner fa-spin"></i></div>
  <!-- <div class="loading-music-icon"><i class="fas fa-music"></i></div> -->
  <!-- <div class="loading-time-remaining"></div> -->
  </div>

  <main>
    <!-- 
    <div class="container-flex ptb-30 plb-20">
      <div class=" toplist">
        <ul class="list-inline">
          <li><a href="#">in evidenza </a></li>
          <li><a href="#">podcast</a></li>
          <li><a href="#">generi e mood</a></li>
          <li><a href="#">nuove uscite</a></li>
          <li><a href="#">scopri</a></li>
        </ul>
      </div>
    </div> -->



    <!-- INICIO-->

    <div class="container-flex">
      <div class="title plb-20">
        <h1>Emisoras Peru</h1>
      </div>
    </div>
    <div class="Emisoras-flex"></div>
    <!-- zona de lista de regiones -->
    <div class="container-flex">
      <div class="title plb-20">
        <h1>+ Emisoras Peruanas</h1>
      </div>
    </div>
    <div class="playlists">
      <button href="../radio/state/lima" id="ruta-btn" data-location="lima" class="playlist horizontal" title="">Lima</button>
      <button href="../radio/state/barranca" id="ruta-btn" data-location="barranca" class="playlist horizontal" title="">Barranca</button>
      <button href="../radio/state/huaura" id="ruta-btn" data-location="huaura" class="playlist horizontal" title="">Huaura</button>
      <button href="../radio" id="ruta-btn" data-location="all"class="playlist horizontal" title="Radios de Abancay">Todo</button>
      <a href="https://www.fullradios.com/2013/01/emisoras-ancash.html" class="playlist horizontal" title="Radios de Ancash">Ancash</a>
      <a href="https://www.fullradios.com/2018/09/radios-de-anta.html" class="playlist horizontal" title="Radios de Anta">Anta</a>
      <a href="https://www.fullradios.com/2012/11/radios-de-amazonas.html" class="playlist horizontal" title="Radios de Amazonas">Amazonas</a>
      <a href="https://www.fullradios.com/2017/03/radios-de-andahuaylas.html" class="playlist horizontal" title="Radios de Andahuaylas">Andahuaylas</a>
      <a href="https://www.fullradios.com/2012/12/radios-apurimac.html" class="playlist horizontal" title="Radios de Apurimac">Apurimac</a>
      <a href="https://www.fullradios.com/2015/06/Arequipa.html" class="playlist horizontal" title="Radios de Arequipa">Arequipa</a>
      <a href="https://www.fullradios.com/2015/08/radiosaucayacu.html" class="playlist horizontal" title="Radios de Aucayacu">Aucayacu</a>
      <a href="https://www.fullradios.com/2012/12/radios-ayacucho.html" class="playlist horizontal" class="playlist horizontal" title="Radios de Ayacucho">Ayacucho</a>
      <a href="https://www.fullradios.com/2018/07/radios-de-azangaro.html" class="playlist horizontal" title="Radios de Azangaro">Azangaro</a>
      <a href="https://www.fullradios.com/2018/10/radios-de-bambamarca.html" class="playlist horizontal" title="Radios de Bambamarca">Bambamarca</a>
      <a href="https://www.fullradios.com/2018/11/canchis.html" class="playlist horizontal" title="Escuchar radios de Canchis">Canchis</a>
      <a href="https://www.fullradios.com/2018/09/radios-de-cajabamba.html" class="playlist horizontal" title="Escuchar radios de Cajabamba">Cajabamba</a>
      <a href="https://www.fullradios.com/2012/06/radios-de-cajamarca.html" class="playlist horizontal" title="Escuchar radios de Cajamarca">Cajamarca</a>
      <a href="https://www.fullradios.com/2016/03/camana.html" class="playlist horizontal" title="Escuchar radios de Camana">Camaná</a>
      <a href="https://www.fullradios.com/2018/01/canete.html" class="playlist horizontal" title="Escuchar radios de Cañete">Cañete</a>
      <a href="https://www.fullradios.com/2018/01/radios-de-casma.html" class="playlist horizontal" title="Escuchar radios de Casma">Casma</a>
      <a href="https://www.fullradios.com/2018/08/radios-de-caylloma.html" class="playlist horizontal" title="Escuchar radios de Caylloma">Caylloma</a>
      <a href="https://www.fullradios.com/2017/12/cerro-de-pasco.html" class="playlist horizontal" title="Escuchar radios de Cerro de pasco">Cerro de Pasco</a>
      <a href="https://www.fullradios.com/2018/01/radios-de-chachapoyas.html" class="playlist horizontal" title="Escuchar radios de Chachapoyas">Chachapoyas</a>
      <a href="https://www.fullradios.com/2018/06/radios-de-chaclacayo.html" class="playlist horizontal" title="Escuchar radios de Chaclacayo">Chaclacayo</a>
      <a href="https://www.fullradios.com/2014/06/chanchamayo.html" class="playlist horizontal" title="Escuchar radios de Chanchamayo">Chanchamayo</a>
      <a href="https://www.fullradios.com/2013/10/chiclayo.html" class="playlist horizontal" title="Escuchar radios de Chiclayo">Chiclayo</a>
      <a href="https://www.fullradios.com/2015/06/chimbote.html" class="playlist horizontal" title="Escuchar radios de Chimbote">Chimbote</a>
      <a href="https://www.fullradios.com/2018/08/radios-de-chincheros.html" class="playlist horizontal" title="Escuchar radios de Chincheros">Chincheros</a>
      <a href="https://www.fullradios.com/2016/02/chincha.html" class="playlist horizontal" title="Escuchar radios de Chincha">Chincha</a>
      <a href="https://www.fullradios.com/2018/08/radios-de-chulucanas.html" class="playlist horizontal" title="Escuchar radios de Chulucanas">Chulucanas</a>
      <a href="https://www.fullradios.com/2017/07/chumbivilcas.html" class="playlist horizontal" title="Escuchar radios de Chumbivilcas">Chumbivilcas</a>
      <a href="https://www.fullradios.com/2012/12/radios-cusco.html" class="playlist horizontal" title="Escuchar radios de Cusco">Cusco</a>
      <a href="https://www.fullradios.com/2014/05/espinar.html" class="playlist horizontal" title="Escuchar radios de Espinar">Espinar</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-huancavelica.html" class="playlist horizontal" title="Escuchar radios de Huancavelica">Huancavelica</a>
      <a href="https://www.fullradios.com/2018/07/radios-de-jaen.html" class="playlist horizontal" title="Escuchar radios de Jaen">Jaen</a>
      <a href="https://www.fullradios.com/2014/05/juliaca.html" class="playlist horizontal" title="Radios de Juliaca">Juliaca</a>
      <a href="https://www.fullradios.com/2013/01/emisoras-junin.html" class="playlist horizontal" title="Escuchar radios de Junin">Junin</a>
      <a href="https://www.fullradios.com/2018/06/radios-de-huaraz.html" class="playlist horizontal" title="Escuchar radios de Huaraz">Huaraz</a>
      <a href="https://www.fullradios.com/2013/11/huacho.html" class="playlist horizontal" title="Escuchar radios de Huacho">Huacho</a>
      <a href="https://www.fullradios.com/2017/12/radios-huamachuco.html" class="playlist horizontal" title="Escuchar radios de Huamachuco">Huamachuco</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-huanuco.html" class="playlist horizontal" title="Escuchar radios de Huanuco">Huanuco</a>
      <a href="https://www.fullradios.com/2018/03/huancabamba.html" class="playlist horizontal" title="Escuchar radios de Huancabamba">Huancabamba</a>
      <a href="https://www.fullradios.com/2018/02/radios-de-huanta.html" class="playlist horizontal" title="Escuchar radios de Huanta">Huanta</a>
      <a href="https://www.fullradios.com/2015/08/radiosHuarochiri.html" class="playlist horizontal" title="Escuchar radios de Huarochiri">Huarochiri</a>
      <a href="https://www.fullradios.com/2014/04/Huaral.html" class="playlist horizontal" title="Escuchar radios de Huaral">Huaral</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-ica.html" class="playlist horizontal" title="Escuchar radios de ICA">ICA</a>
      <a href="https://www.fullradios.com/2014/04/ILO.html" class="playlist horizontal" title="Escuchar radios de Ilo">Ilo</a>
      <a href="https://www.fullradios.com/2014/04/Iquitos.html" class="playlist horizontal" title="Escuchar radios de Iquitos">Iquitos</a>
      <a href="https://www.fullradios.com/2015/03/radiosislay.html" class="playlist horizontal" title="Escuchar radios de Islay">Islay</a>
      <a href="https://www.fullradios.com/2018/07/radios-de-jaen.html" class="playlist horizontal" title="Escuchar radios de Jaen">Jaen</a>
      <a href="https://www.fullradios.com/p/jauja.html" class="playlist horizontal" title="Escuchar radios de Jauja">Jauja</a>
      <a href="https://www.fullradios.com/2014/05/juliaca.html" class="playlist horizontal" title="Escuchar radios de Juliaca">Juliaca</a>
      <a href="https://www.fullradios.com/2012/06/radios-de-lima.html" class="playlist horizontal" title="Radios de Lima">Lima</a>
      <a href="https://www.fullradios.com/2018/04/radios-de-lima-norte.html" class="playlist horizontal" title="Radios de Lima">Lima Norte</a>
      <a href="https://www.fullradios.com/2013/11/regionlima.html" class="playlist horizontal" title="Radios de Lima">Lima Región</a>
      <a href="https://www.fullradios.com/2012/12/radios-lambayeque.html" class="playlist horizontal" title="Radios Lambayeque">Lambayeque</a>
      <a href="https://www.fullradios.com/2013/01/radios-de-la-liberdad.html" class="playlist horizontal" title="Radios La Libertad">La Libertad</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-loreto.html" class="playlist horizontal" title="Radios Loreto">Loreto</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-madre-de-dios.html" class="playlist horizontal" title="Radios de Madre de Dios">Madre de Dios</a>
      <a href="https://www.fullradios.com/2015/07/Mollendo.html" class="playlist horizontal" title="Radios de Mollendo">Mollendo</a>
      <a href="https://www.fullradios.com/2012/12/radios-de-moquegua.html" class="playlist horizontal" title="Radios de Moquegua">Moquegua</a>
      <a href="https://www.fullradios.com/2018/08/radios-de-morrope.html" class="playlist horizontal" title="Radios de Morrope">Morrope</a>
      <a href="https://www.fullradios.com/2018/05/radios-de-moyobamba.html" class="playlist horizontal" title="Radios de Moyobamba">Moyobamba</a>
      <a href="https://www.fullradios.com/2018/08/radios-de-pacasmayo.html" class="playlist horizontal" title="Radios de Pacasmayo">Pacasmayo</a>
      <a href="https://www.fullradios.com/2018/07/radios-de-paijan.html" class="playlist horizontal" title="Radios de Paijan">Paijan</a>
      <a href="https://www.fullradios.com/2018/02/Paita.html" class="playlist horizontal" title="Radios de Paita">Paita</a>
      <a href="https://www.fullradios.com/2013/02/radios-de-pasco.html" class="playlist horizontal" title="Radios de Pasco">Pasco</a>
      <a href="https://www.fullradios.com/2017/12/pisco.html" class="playlist horizontal" title="Radios de Pisco">Pisco</a>
      <a href="https://www.fullradios.com/2012/11/emisoras-de-piura.html" class="playlist horizontal" title="Radios de Piura">Piura</a>
      <a href="https://www.fullradios.com/2012/12/radios-puno.html" class="playlist horizontal" title="Radios de Puno">Puno</a>
      <a href="https://www.fullradios.com/2014/09/pucallpa.html" class="playlist horizontal" title="Radios de Pucallpa">Pucallpa</a>
      <a href="https://www.fullradios.com/2018/10/radios-de-quillabamba.html" class="playlist horizontal" title="Radios de Quillabamba">Quillabamba</a>
      <a href="https://www.fullradios.com/p/rinconada.html" class="playlist horizontal" title="Radios de La Rinconada">Rinconada</a>
      <a href="https://www.fullradios.com/2012/10/departamento-de-san-martin-radios.html" class="playlist horizontal" title="Radios de San Martin">San Martin</a>
      <a href="https://www.fullradios.com/2018/11/radios-de-satipo.html" class="playlist horizontal" title="Radios de Satipo">Satipo</a>
      <a href="https://www.fullradios.com/2015/06/sullana.html" class="playlist horizontal" title="Radios de Sullana">Sullana</a>
      <a href="https://www.fullradios.com/2013/01/departamento-tacna.html" class="playlist horizontal" title="Radios de Tacna">Tacna</a>
      <a href="https://www.fullradios.com/2017/12/radios-de-talara.html" class="playlist horizontal" title="Radios de Talara">Talara</a>
      <a href="https://www.fullradios.com/2013/01/radios-de-tarapoto.html" class="playlist horizontal" title="Radios de Tarapoto">Tarapoto</a>
      <a href="https://www.fullradios.com/2014/04/Tarma.html" class="playlist horizontal" title="Radios de Tarma">Tarma</a>
      <a href="https://www.fullradios.com/2017/08/tocache.html" class="playlist horizontal" title="Radios de Tocache">Tocache</a>
      <a href="https://www.fullradios.com/2013/02/emisoras-tumbes.html" class="playlist horizontal" title="Radios de Tumbes">Tumbes</a>
      <a href="https://www.fullradios.com/2012/12/radios-ucayali.html" class="playlist horizontal" title="Radios de Ucayali">Ucayali</a>
      <a href="https://www.fullradios.com/2018/01/vraem.html" class="playlist horizontal" title="Radios de Vraem">Vraem</a>
      <a href="https://www.fullradios.com/2018/10/radios-de-yurimaguas.html" class="playlist horizontal" title="Radios de Yurimaguas">Yurimaguas</a>
      <a href="https://www.fullradios.com/2013/08/peruanos-en-el-mundo.html" class="playlist horizontal" title="Emisoras de peruanos en el mundo">Peruanos en el Exterior</a>

    </div>
    <!-- end zona -->



    <!--Otra Lista -->
    <!-- <div class="playlists">
        <a href="https://open.spotify.com/playlist/37i9dQZF1EVJSvZp5AOML2" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lomas</div>
        </a>
        <a href="" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - India</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZEVXbMDoHDwVN2tF" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - Global</div>
        </a>
        <a href="https://open.spotify.com/artist/5C1S9XwxMuuCciutwMhp5t" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">KR$NA &amp; Others</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">K-Pop ON!</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DWWQRwui0ExPn" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lofi Beats</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1EVJSvZp5AOML2" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lomas</div>
        </a>
        <a href="" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - India</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZEVXbMDoHDwVN2tF" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - Global</div>
        </a>
        <a href="https://open.spotify.com/artist/5C1S9XwxMuuCciutwMhp5t" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">KR$NA &amp; Others</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">K-Pop ON!</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DWWQRwui0ExPn" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lofi Beats</div>
        </a>

        <a href="https://open.spotify.com/playlist/37i9dQZF1EVJSvZp5AOML2" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lomas</div>
        </a>
        <a href="" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - India</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZEVXbMDoHDwVN2tF" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - Global</div>
        </a>
        <a href="https://open.spotify.com/artist/5C1S9XwxMuuCciutwMhp5t" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">KR$NA &amp; Others</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">K-Pop ON!</div>
        </a>

        <a href="https://open.spotify.com/playlist/37i9dQZF1EVJSvZp5AOML2" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lomas</div>
        </a>
        <a href="" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - India</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZEVXbMDoHDwVN2tF" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - Global</div>
        </a>
        <a href="https://open.spotify.com/artist/5C1S9XwxMuuCciutwMhp5t" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">KR$NA &amp; Others</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">K-Pop ON!</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1EVJSvZp5AOML2" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Lomas</div>
        </a>
        <a href="" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - India</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZEVXbMDoHDwVN2tF" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">Top 50 - Global</div>
        </a>
        <a href="https://open.spotify.com/artist/5C1S9XwxMuuCciutwMhp5t" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">KR$NA &amp; Others</div>
        </a>
        <a href="https://open.spotify.com/playlist/37i9dQZF1DX9tPFwDMOaN1" class="playlist horizontal">
          <img src="top50.jpg" alt="">
          <div class="bold">K-Pop ON!</div>
        </a>
      </div> -->










    <!-- Lista de Radios Por Zonas -->


    <div class="container-flex">
      <div class="title plb-20">
        <h1><strong>Elige Tu Pais</strong></h1>
      </div>
    </div>
    <div class="container-flex text-center">
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
      <div class="music-card">
        <a href="#"><img src="top50.jpg" alt=""></a>
        <p>Top 50 - Italia</p>
      </div>
    </div>



    <!-- zona reproductor de musica -->
    <div class="container-flex">
      <div id="music-player" class="music music__player animate__slideInDown player">
        <!-- <input type="file" multiple class="music__uploader" name="file-audio" id="file-audio" accept="audio/*" /> -->
        <div class="music__controller">
          <button id="music-backward" title="backward" class="music__btn music__btn--back button--backward">
            <!-- ALT : fa-[step, fast, ]-backward -->
            <!-- <i class="fa fa-fast-backward"></i> -->
            <i class="fa fa-repeat"></i>
          </button>
          <button id="masterPlay" title="Play_Pause" class="music__btn music__btn--play button--action">
            <i class="fa fa-play"></i>
            <div id="loading-icon">
            <i class="fa fa-spinner fa-spin"  ></i>
            </div>

          </button>
          <button id="music-forward" title="Volumen" class="music__btn music__btn--next button--forward">
            <!-- <i class="fa fa-volume-up"></i> -->
            <i class="fa fa-volume-up"></i>
          </button>
        </div>
        <div class="music__main">
          <div id="music-playlist" class="music__playlist">
            <button type="button" id="playlist-close-btn" class="playlist__close_btn">
              <i class="fa fa-times"></i>
            </button>
            <ul class="playlist__track_list" id="playlist-tracks" tabindex="0"></ul>
          </div>
          <div class="music__meta">
            <div class="music__name">
              <marquee behavior="" direction="">
                <p id="music-title" class="music__title"><strong id="titleid" style="font-size: 18px;">Buscando..</strong> </p>
              </marquee>
              <!-- <span id="music-desc" class="music__description">
          <h1>Live.</h1>
        </span> -->
              <!-- <div id="searchDiv">
                <input type="search" class="search" id="searchTxt" aria-label="Search" placeholder="Buscar...">
              </div> -->
            </div>

            <div class="music__mixin">
              <!-- STATE : --[off | on: [once | all]] -->
              <button id="music-repeat" class="button--repeat music__repeat music__repeat--on music__repeat--all button--diactive">
                <!-- ALT : fa-[repeat, sync, sync-alt, retweet, retweet-alt, redo, redo-alt] -->
                <i class="fa fa-repeat"></i>
              </button>
              <!-- STATE : --[off | on] -->
              <button id="music-shuffle" class="music__shuffle button--shuffle button--active">
                <i class="fa fa-random"></i>
              </button>
              <!-- STATE : --[off | on] -->
              <button id="music-playlist-open" class="music__playlist_open">
                <i class="fa fa-list-music"></i>
              </button>
            </div>
            <!-- <div class="music__volume volume" title="50%">
              <button id="music-volume-btn" class="music__volume_btn volume__button button--volume">
                <i class="fa fa-volume"></i>
              </button>

            </div> -->

            <div class="music__times duration">
              <span id="music-current-time" class="music__current_time duration__current">-</span>
              <!-- <input type="range" aria-label="Control de volumen" max="100" min="0" step="10" value="100" class="slider" > -->
              <input type="range" aria-label="Control de volumen" max="100" min="0" step="10" value="100" class="volume-slider" id="radio-slider" id="volume-slider">
              <div class="volume-level" style="color:black">100%</div>
              <span id="music-duration" class="music__duration duration__until">+</span>
            </div>
          </div>
          <div class="music__cover">
            <img id="ImgMaster" id="music-cover" class="music__image" src="https://www.ganja2music.com/Image/Post/06.93/08/Homayoun-Shajarian---Arayes.jpg" alt="mini music player - miko-github" />
          </div>
        </div>
      </div>
      <!-- end zona -->

  </main>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>