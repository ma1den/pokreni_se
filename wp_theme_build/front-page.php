<?php get_header(); ?>

<!-- uvod -->
<section class="uvod text-center text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_field('o_nama_naslov'); ?></h2>
                <p class="lead">
                    Portal "Pokreni se" bavi se rekreacijom i potrebom čoveka za kretanjem. Svakako je sport veoma važan kako za fizičko tako i za duhovno stanje čoveka. Nije slučajna izreka u "U zdravom temu zdrav duh".
                    <br><br>
                    Pored sporta bavićemo se motivacijom kao životnom snagom koja nas gura napred i pomaže da se snađemo u životu i radu.
                    <br><br>
                    Portal će se baviti i tematikom, kako se uopšte pokrenuti i učiti nove stvari, pre svega poslove koji su vezani za neki život koji nas ne drži u mestu već možemo da ga radimo sa bilo kojeg mesta na planeti. Pomoći ćemo Vam kako da steknete veštine koje Vam omogućuju da na primer vozite rolere pre podne dok je vežina ljudi na svom poslu ili da u sredu ujutro idete na planinarsku šetnju.
                    <br><br>
                    Dobićete i savete i tekstove kako skuvati sami zdrav obrok za 20 minuta kao i mnoge druge savete vezane za zdravu ishranu kao veoma važnu kariku koja nam daje preko potrebnu energiju.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- teme -->
<section class="teme py-5 text-center">
    <h2>Teme</h2>
    <p class="lead">Ako vas interesuju neke od tema prijavite se i pisite o nekoj od navedenih oblasti</p>
    <div class="row">
        <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-4s">
            <h3>Sport i rekreacija</h3>
            <i class="fas fa-running"></i>
        </div>
        <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-4s">
            <h3>Posao iz snova</h3>
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-4s">
            <h3>Zdrava ishrana</h3>
            <i class="fas fa-carrot"></i>
        </div>
    </div>
</section>

<!--cta -->
<section class="cta text-center">
   <div class="container">
       <h2>Poziv za pisce</h2>
       <p class="lead">Ako se pronalazite u nekoj od tema prijavite se</p>
       <div class="alert alert-success lead d-inline-block">
           Kao benefit ovog programa svi psici dobice besplatnu obuku iz oblasti veb dizajna.
       </div>
       <a href="" class="btn btn-danger btn-lgr">PRIJAVI SE</a>
   </div>
</section>

<?php get_footer(); ?>