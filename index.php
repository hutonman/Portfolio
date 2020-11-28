<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
  </head>
  <body>
    <section id="header">
    <div class="head-wrapper">
        <button id="navi"><i class="fa fa-navicon "></i></button>
        <ul>
          <li><a href="#">TOP</a></li>
          <li><a href="#profile">Profile</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#works">Works</a></li>
          <li><a href="#estimate">Estimate</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </section>

    <section id="title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/decorated-3561710_1920.jpg)">
      <div id="logo">
        <div class="dot">
          <div class="logo-part part-bot">
            <div class="bar">
              <div class="triangle right"></div>
              <div class="triangle left"></div>
            </div>
          </div>
          <div class="logo-part part-right">
            <div class="bar">
              <div class="triangle right"></div>
              <div class="triangle left"></div>
            </div>
          </div>
          <div class="logo-part part-left">
            <div class="bar">
              <div class="triangle right"></div>
              <div class="triangle left"></div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h1>Sakamoto Takeshi</h1>
      </div>
    </section>

    <section id="profile" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/damask-937607_1280.jpg)">
      <h2>Profile</h2>
      <div>
        <p>Name: 坂本 健</p>
        <p>Birthday: 1996/5/11</p>
        <p>Carrier: 熊本大学工学部機械科卒業(2019)</p>
        <p>機械メーカー就職(2019)</p>
        <p>Web制作学習開始(2020)
          <br>(HTML/CSS, JavaScript, jQuery, PHP, WordPress等)</p>
      </div>
    </section>

    <section id="skills" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/damask-220161_1280.jpg)">
      <h2>Skills</h2>
      <div class="skills-box">
        <div class="skills-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/html5.svg" alt="" width="250px">
          <h3>HTML5</h3>
          <p>"Webサイトの基本構造を構築することができます"</p>
        </div>
        <div class="skills-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/css3.svg" alt="" width="250px">
          <h3>CSS3</h3>
          <p>"Webサイトのレイアウトや配色などデザインを設計できます"</p>
        </div>
      </div>

      <div class="skills-box">
        <div class="skills-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/javascript.png" alt="" width="150px">
          <h3>JavaScript</h3>
          <p>"Webサイトに動きやアニメーションをつけることができます"</p>
        </div>
        <div class="skills-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/jquery.svg" alt="" width="250px">
          <h3>jQuery</h3>
          <p>"JavaScriptのライブラリでより簡単にWebサイトに動きをつけることができます"</p>
        </div>
      </div>
      <div class="skills-box">
        <div class="skills-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="" width="250px">
          <h3>WordPress</h3>
          <p>"新着情報やニュースの更新など、Webサイトを誰でも簡単に管理・運用することができます"</p>
        </div>
      </div>
      
      <ul>
        <p>▼可能な業務</p>
        <li>HTML/CSS コーディング</li>
        <li>ランディングページ(LP)制作</li>
        <li>コーポレートサイト(企業サイト)制作</li>
        <li>レスポンシブ化</li>
        <li>WordPress構築</li>
      </ul>
    </section>

    <section id="works" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/damask-220162_1280.jpg)">
      <h2>Works</h2>
      <div class="works-contents-wrapper">
        <div class="works-contents">
          <a href="https://hutonman.com/wp-content/themes/ImitationSite/Airbnb/index.html">
            <h3>Airbnb</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/imitation1-min.png" alt="Airbnbの画像です">
          </a>
        </div>
        <div class="works-contents">
          <a href="https://hutonman.com/wp-content/themes/ImitationSite/Jindemo/index.html">
            <h3>Jin Demo Site 4</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/imitation2-min.png" alt="Jinの画像です">
          </a>
        </div>
        <div class="works-contents">
          <a href="https://hutonman.com/wp-content/themes/ImitationSite/Xeory/index.html">
            <h3>Xeory Extension</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/imitation3-min.png" alt="Xeoryの画像です">
          </a>
        </div>
      </div>
      <div class="works-contents-wrapper">
        <div class="works-contents">
          <a href="https://hutonman.com/wp-content/themes/ImitationSite/isara/index.html">
            <h3>iSara</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/imitation4-min.png" alt="iSaraの画像です">
          </a>
        </div>
        <div class="works-contents">
          <a href="https://hutonman.com/wp-content/themes/ImitationSite/TechCamp/index.html">
            <h3>Tech Camp</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/imitation5-min.png" alt="TechCampの画像です">
          </a>
        </div>
      </div>
      <p></p>
    </section>

    <section id="estimate" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/damask-937610_1280.jpg)">
      <h2>Estimate</h2>
      <p>コーポレートサイト 1P : 6,000円</p>
      <p>ランディングページ(LP) 1P : 30,000円</p>
      <p>レスポンシブ化 1P: (ページ単価)✕(ブレイクポイント数)✕0.3 円 </p>
      <p>WordPress構築 : 12,000円</p>
      <p class="caution">※金額は目安であり作業内容やスケジュールにより変化します</p>
    </section>

    <section id="contact" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/damask-937607_1280.jpg)">
      <h2>Contact</h2>
      <?php echo do_shortcode( '[contact-form-7 id="13" title="Contact Form"]' ); ?>
    </section>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script>
      $(function() {
        ScrollReveal().reveal('#title, #profile, #skills, #works, #estimate, #contact', {
          duration: 1000,
          vierFactor: 0.1,
        });
        
        $('#navi').click(function () {
          $('#header ul').slideToggle();
        });

        $('#header ul').css('display', 'none');

        $('#logo .dot').css('display', 'none');
        $('.logo-part').css('display', 'none');
        $('h1').css('margin-top', '400px');
        $('h1').css('opacity', '0');
      
        $('#logo .dot').fadeIn(2000);
        $('#logo .part-left').delay(2000).fadeIn(500);
        $('#logo .part-bot').delay(2500).fadeIn(500);
        $('#logo .part-right').delay(3000).fadeIn(500)
          .delay(500).queue(function(next){
            $('#logo .dot').addClass('rotation');
            next();
         })
         .delay(970).queue(function(next){
          $('#logo .dot').removeClass('rotation');
          next();
         }).delay(500).queue(function(next){
          $('#logo .dot').animate({
            marginLeft: '-10%'
          }, 2000);
          next();
        }).delay(500).queue(function(next){
          $('h1').animate({
            marginTop: '0%',
            opacity: '1'
          }, 2000);
          next();
        })
      });
      </script>
<?php wp_footer(); ?>
  </body>
</html>