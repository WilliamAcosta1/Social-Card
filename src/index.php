<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "WilliamAcosta";
      $description = "My personal homepage";
      $path = "/";

      require_once("./src/_templates/_head.php");

      // PHP: obtener archivos de audio
      $audioDir = __DIR__ . "/static/audio/";
      $audioFiles = [];

      // Como sabemos que tenemos al menos "test.mp3"
      foreach (glob($audioDir . "*.{mp3,wav,ogg}", GLOB_BRACE) as $file) {
          $audioFiles[] = "/static/audio/" . basename($file);
      }

      // Debug rápido: para asegurarnos que PHP encuentra el archivo
      // echo "<pre>"; print_r($audioFiles); echo "</pre>";
    ?>
  </head>
  <body class="dark-theme github">
    <div class="fullscreen">
      <div class="background" style="background-image: url('/static/images/background.webp');"></div>
      <div class="center-object">
        <div class="container">
          <section class="me unset">
            <div class="avatar-container">
              <img
                draggable="false"
                class="image-title primary-bg"
                src="/static/images/branding/avatar.webp"
                id="discord-avatar"
                alt="WilliamAcosta avatar"
              >
            </div>
            <div class="unset">
              <h1 class="title dropshadow-small">WilliamAcosta</h1>
              <p class="undertitle runescape dropshadow-medium" id="discord-status-loading">
                I do develop stuff, yes yes
              </p>
            </div>
          </section>
          <div class="buttons">
            <a href="https://discord.com/users/963953391061585972" class="btn discord-dropshadow white-text animation hover" target="_blank"> <i class="fab fa-discord"></i> Discord</a>
            <a href="https://github.com/WilliamAcosta1" class="btn github-dropshadow white-text animation hover" target="_blank"><i class="fab fa-github"></i> GitHub</a>
            <a href="https://www.facebook.com/share/1PqJGf1ika/" class="btn facebook-dropshadow white-text animation hover" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/williamacosta014" class="btn instagram-dropshadow white-text animation hover" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://www.tiktok.com/@williamacostadev" class="btn black-dropshadow white-text animation hover" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a>
            <a href="https://open.spotify.com/user/31kystwfa3k3xwvb6j5uqfeeymue?si=1QlNlnl7R4ey2X6m86zfGg" class="btn spotify-dropshadow white-text animation hover" target="_blank"><i class="fab fa-spotify"></i> Spotify</a>
            <a href="https://t.me/WilliamAcosta" class="btn telegram-dropshadow white-text animation hover" target="_blank"><i class="fab fa-telegram"></i> Telegram</a>
            <a href="https://wa.me/573212704159" class="btn whatsapp-dropshadow white-text animation hover" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
          </div>
        </div>
      </div>
    </div>

    <section class="container" id="information">
      <div class="box-container">
        <h1 class="title emerald-text"><i class="emoji alexcoffee"></i> Information:</h1>
        <div class="info-container">
          <p>
            Hey, my name is <span class="emerald-text">William</span>, also known online as 
            <span class="emerald-text">WilliamAcosta</span>.
            I’m a chill gamer who enjoys relaxed sessions, good games, and good vibes.
            I play mostly to unwind, explore worlds, and enjoy games at my own pace.
            I also run a gaming server called 
            <a href="https://discord.gg/PgYtk5udkf" target="_blank" class="emerald-text">
              Game&Chill
            </a>, 
            a place to hang out, play, and just enjoy the moment 🎮✨
          </p>
        </div>
      </div>
    </section>

    <!-- CSS -->
    <link href="/static/css/modesta.css" type="text/css" rel="stylesheet">
    <link href="/static/css/markdown.css" type="text/css" rel="stylesheet">
    <link href="/static/css/emojis.css" type="text/css" rel="stylesheet">
    <link href="/static/css/custom.css" type="text/css" rel="stylesheet">

    <!-- AUDIO CON CONTROLES PARA TEST -->
    <audio id="miAudio" controls></audio>
    <button id="btnAudio" title="Reproducir/Pausar música">🔊</button>

    <style>
      #btnAudio {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: rgba(40, 40, 40, 0.8);
        color: #1DB954;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        transition: transform 0.2s, background-color 0.2s;
        z-index: 999;
      }
      #btnAudio:hover {
        transform: scale(1.1);
        background-color: rgba(40, 40, 40, 1);
      }
    </style>

    <script>
      const audioFiles = <?php echo json_encode($audioFiles); ?>;
      const audio = document.getElementById('miAudio');
      const btn = document.getElementById('btnAudio');

      function playRandom() {
        if(audioFiles.length === 0) return;
        const index = Math.floor(Math.random() * audioFiles.length);
        audio.src = audioFiles[index];
        audio.play().catch(() => {});
      }

      // Reproducir primera canción al cargar
      window.addEventListener('load', () => {
        playRandom();
      });

      // Cambiar canción cuando termina
      audio.addEventListener('ended', playRandom);

      // Botón de pausa/reproducción
      btn.addEventListener('click', () => {
        if(audio.paused){
          audio.play();
          btn.textContent = "🔊";
        } else {
          audio.pause();
          btn.textContent = "🔈";
        }
      });
    </script>
  </body>
</html>