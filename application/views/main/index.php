<section class="grid-wrap" >
    <header class="grid col-full">
        <hr>
        <p class="fleft">База</p>
        <a href="about.html" class="arrow fright">диви диви...</a>
    </header>

    <div class="grid col-one-half mq2-col-full">
        <h1>Приветствуем</h1>
        <p>на основном информационном узле киевской рок-группы Железный Садко.</p>
        <p></p>
        <p>Валим на:</p>
        <p>
            <img src="public/designa/img/aerodynamic.png" alt="">
            <img src="public/designa/img/_Logo-Fender-Strat_blog-LPG.png" alt="">
            <img src="public/designa/img/ibanez.png" alt="">
            <img src="public/designa/img/gibson-guitar-logo.png" alt="">
        </p>
        <p>
            <img src="public/designa/img/yamaha-istoriya-brenda.jpg" alt="">
            <img src="public/designa/img/15h07ncsgv.jpg" alt="">
            <img src="public/designa/img/0697e279.jpg" alt="">
            <img src="public/designa/img/muzic2.jpg" alt="">
            
        </p>
        <p>и др.</p>
    </div>


    <div class="slider grid col-one-half mq2-col-full">
      <div class="flexslider">
        <div class="slides">
            <?php for($i = 1; $i <= 18; $i++) { ?>
            <div class="slide">
                <figure>
                   <img src="<?=  base_url(); ?>public/designa/img/slide<?= $i;?>.jpg" alt="">
                </figure>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="services grid-wrap">
    <header class="grid col-full">
        <hr>
        <p class="fleft">Служба</p>
        <a href="services.html" class="arrow fright">диви диви...</a>
    </header>

    <article class="grid col-one-third mq3-col-full">
        <aside>01</aside>
        <h5>Web design</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
        <a href="/data/Железный Садко - Автівка.mp4">ЖС</a>
    </article>

    <article class="grid col-one-third mq3-col-full">
        <aside>02</aside>
        <h5>Web development</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
    </article>

    <article class="grid col-one-third mq3-col-full">
        <aside>03</aside>
        <h5>Graphic design</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
    </article>
</section>

<section class="works grid-wrap">
    <header class="grid col-full">
        <hr>
        <p class="fleft">Works</p>
        <a href="works.html" class="arrow fright">диви диви...</a>
    </header>

    <figure class="grid col-one-quarter mq2-col-one-half">
        <a href="work1.html">
            <img src="<?=  base_url(); ?>public/designa/img/esp.jpg" alt="">
            <span class="zoom"></span>
        </a>
        <figcaption>
            <a href="work1.html" class="arrow">Project page!</a>
            <p>Lorem ipsum dolor set amet</p>
        </figcaption>
    </figure>

    <figure class="grid col-one-quarter mq2-col-one-half">
        <a href="#">
            <img src="<?=  base_url(); ?>public/designa/img/dean.jpg" alt="">
            <span class="zoom"></span>
        </a>
        <figcaption>
            <a href="#" class="arrow">Project x</a>
            <p>Lorem ipsum dolor set amet</p>
        </figcaption>
    </figure>

    <figure class="grid col-one-quarter mq2-col-one-half">
        <a href="#">
            <img src="<?=  base_url(); ?>public/designa/img/peavey.jpg" alt="">
            <span class="zoom"></span>
        </a>
        <figcaption>
            <a href="#" class="arrow">Project x</a>
            <p>Lorem ipsum dolor set amet</p>
        </figcaption>
    </figure>

    <figure class="grid col-one-quarter mq2-col-one-half">
        <a href="#">
            <img src="<?=  base_url(); ?>public/designa/img/prs.gif" alt="">
            <span class="zoom"></span>
        </a>
        <figcaption>
            <a href="#" class="arrow">Project x</a>
            <p>Lorem ipsum dolor set amet</p>
        </figcaption>
    </figure>
</section>