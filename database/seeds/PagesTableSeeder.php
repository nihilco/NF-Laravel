<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $websites = App\Models\Website::all();
	
        //
        $page1 = factory(App\Models\Page::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'website_id' => $websites->where('hostname', 'www.uclemmer.com')->first()->id,
            'title' => 'About',
            'slug' => 'about',
            'description' => 'About page content.',
            'content' => '',
        ]);

        $page2 = factory(App\Models\Page::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'website_id' => $websites->where('hostname', 'www.mazestonelaw.com')->first()->id,
            'title' => 'About Us',
            'slug' => 'about-us',
            'description' => '',
            'content' => '<p class="justify">Maze &amp; Stone, PLLC is a law firm located in Mount Sterling, Kentucky, although we service most of
	            Central and Eastern Kentucky. It was founded by Chandler Maze and Clayton Stone. Chandler and
	            Clayton met in law school, and bonded over their fondness for their “Kentucky Home.” Chandler and
	            Clayton truly care about the members of their community. We put our clients first, and work tirelessly to
	            obtain the best possible outcome in your case. We pride ourselves on our availability and attentiveness
	            to our clients. We will take your case personally and be totally invested, something that cannot be said
	            for TV lawyers, who will not be able to devote the time and attention that your case deserves.</p>',
	    ]);

        $page3 = factory(App\Models\Page::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'website_id' => $websites->where('hostname', 'www.mazestonelaw.com')->first()->id,
            'title' => 'Practice Areas',
            'slug' => 'practice-areas',
            'description' => '',
            'content' => '<h2 class="text-center">Personal Injury</h2><p class="justify">If you or a loved one has sustained any type of injury as a result of the carless or
	    negligent actions of another, it is important to seek the help of an experienced attorney. At the Maze &amp;
	    Stone, we can examine the facts of your case, help determine what actions need to be taken, and work
	    endlessly to get you the compensation you deserve. Many injuries can leave people with pain and
	    suffering, medical bills, wage loss and other undue hardships. Frequently, people are hesitant to file a
	    claim or lawsuit, because they are reluctant to sue fellow members of their community or local
	    businesses. However, the overwhelming majority of settlements or awards are paid by big insurance
	    companies. Maze &amp; Stone puts litigation and investigation experience to work holding insurance
	    companies and big corporations accountable when accidents or negligence cause people to suffer.</p>

	    <h2 class="text-center">Criminal Defense</h2>
	    <p class="justify">At Maze &amp; Stone, we realize that good people make mistakes. An arrest and
	    subsequent criminal charges can be one of the most stressful and trying times of one’s life. The
	    attorneys at Maze &amp; Stone are committed to minimizing this stress and helping people get on with their
	    lives. There are steps that need to be taken following your arrest to help raise the best possible defense
	    in your case. Maze &amp; Stone has the knowledge and experience to identify those steps, and tailor our
	    defense to each client’s needs.</p>

	    <h2 class="text-center">Workers Compensation</h2>
	    <p class="justify">Workplace injuries can take a serious toll on you and your family and cause
	    undue hardship on you physically, emotionally, and financially. If you have been injured at work, do not
	    let your employer talk you out of filing a claim. Oftentimes, employers will make promises to injured
	    workers that they do not intend to keep, in an attempt to dissuade them from filing a claim. You could
	    be missing out on compensation that you are entitled to. Do not try to go it alone. The process of filing a
	    claim can be confusing and stressful. Maze &amp; Stone has the knowledge and expertise to guide you
	    through the process. We will work aggressively and tirelessly to get you the compensation you deserve.</p>',
	]);

	$page4 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.mazestonelaw.com')->first()->id,
	    'title' => 'Attorneys',
	    'slug' => 'attorneys',
	    'description' => '',
	    'content' => '<div class="row mb-3">
	    <div class="col-sm-4 col-md-3">
	    <img class="img-fluid" src="/img/chandler-maze.jpg">
	    </div>
	    <div class="col-sm-8 col-md-9">
	    <h2>Chandler Maze</h2>
<p class="justify">Chandler was born and raised in Eastern Kentucky.  Over the last decade, Chandler has lived in Western, Northern, and Central Kentucky, making invaluable connections to advance his education and career.  At his prior firm, Chandler was exposed to a variety of legal cases, scenarios, and experiences and was trained by some of the top lawyers in the area.  While focusing on personal injury, Chandler has also been immersed in many different areas of law. He has worked for the Montgomery County Attorney’s office and the Rowan County Attorney’s office, as well as the Public Defender’s office. As such, he has experience with criminal cases on both sides of the court. In addition, Chandler worked inside jails in Eastern Kentucky as a Pretrial Officer alongside Judges and arresting officers, helping to determine bonds for those incarcerated at the beginning stages of their proceedings. Having spent the last number of years working as an attorney for a large personal injury firm, Chandler has learned important tactics and strategies, crucial for maximizing the recovery value in every one of his client’s cases. After living in the Cincinnati and Lexington areas, Chandler feels very fortunate to be able to practice law in the area in which he grew up, and use his knowledge and experience to help those in need.</p>
	    </div>
	    </div>

<div class="row mb-3">
<div class="col-sm-4 col-md-3">
<img class="img-fluid" src="/img/clayton-stone.jpg">
</div>
<div class="col-sm-8 col-md-9">
<h2>Clayton Stone</h2>
<p class="justify">Clayton is a native of Central Kentucky and has a passion for serving his community. He
completed his undergraduate studies at the University of Kentucky, with a degree in Political
Science. After college, Clayton attended the Salmon P. Chase College of Law, where he would
eventually graduate with honors. While in law school, Clayton interned for the Boone County
Attorney’s office, as well as worked for one of the most successful criminal defense firms in the
tristate area. Following law school, Clayton spent his first years of practice working for an
insurance defense firm in Lexington, KY, focusing on civil litigation. These work experiences
provide Clayton a broad base of knowledge in many areas of law.</p>
</div>
</div>',
	]);

	$page5 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.mazestonelaw.com')->first()->id,
	    'title' => 'About Us',
	    'slug' => 'about-us',
	    'description' => '',
	    'content' => '<p class="justify">Maze &amp; Stone, PLLC is a law firm located in Mount Sterling, Kentucky, although we service most of
	    Central and Eastern Kentucky. It was founded by Chandler Maze and Clayton Stone. Chandler and
	    Clayton met in law school, and bonded over their fondness for their “Kentucky Home.” Chandler and
	    Clayton truly care about the members of their community. We put our clients first, and work tirelessly to
	    obtain the best possible outcome in your case. We pride ourselves on our availability and attentiveness
	    to our clients. We will take your case personally and be totally invested, something that cannot be said
	    for TV lawyers, who will not be able to devote the time and attention that your case deserves.</p>',
	]);

	$page6 = factory(App\Models\Page::class)->create([
            'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.mazestonelaw.com')->first()->id,
	    'title' => 'Practice Areas',
	    'slug' => 'practice-areas',
	    'description' => '',
	    'content' => '<h2 class="text-center">Personal Injury</h2><p class="justify">If you or a loved one has sustained any type of injury as a result of the carless or
	    negligent actions of another, it is important to seek the help of an experienced attorney. At the Maze &amp;
	    Stone, we can examine the facts of your case, help determine what actions need to be taken, and work
	    endlessly to get you the compensation you deserve. Many injuries can leave people with pain and
	    suffering, medical bills, wage loss and other undue hardships. Frequently, people are hesitant to file a
	    claim or lawsuit, because they are reluctant to sue fellow members of their community or local
	    businesses. However, the overwhelming majority of settlements or awards are paid by big insurance
	    companies. Maze &amp; Stone puts litigation and investigation experience to work holding insurance
	    companies and big corporations accountable when accidents or negligence cause people to suffer.</p>

	    <h2 class="text-center">Criminal Defense</h2>
	    <p class="justify">At Maze &amp; Stone, we realize that good people make mistakes. An arrest and
	    subsequent criminal charges can be one of the most stressful and trying times of one’s life. The
	    attorneys at Maze &amp; Stone are committed to minimizing this stress and helping people get on with their
	    lives. There are steps that need to be taken following your arrest to help raise the best possible defense
	    in your case. Maze &amp; Stone has the knowledge and experience to identify those steps, and tailor our
	    defense to each client’s needs.</p>

	    <h2 class="text-center">Workers Compensation</h2>
	    <p class="justify">Workplace injuries can take a serious toll on you and your family and cause
	    undue hardship on you physically, emotionally, and financially. If you have been injured at work, do not
	    let your employer talk you out of filing a claim. Oftentimes, employers will make promises to injured
	    workers that they do not intend to keep, in an attempt to dissuade them from filing a claim. You could
	    be missing out on compensation that you are entitled to. Do not try to go it alone. The process of filing a
	    claim can be confusing and stressful. Maze &amp; Stone has the knowledge and expertise to guide you
	    through the process. We will work aggressively and tirelessly to get you the compensation you deserve.</p>',
	]);

	$page7 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.mazestonelaw.com')->first()->id,
	    'title' => 'Attorneys',
	    'slug' => 'attorneys',
	    'description' => '',
	    'content' => '<div class="row mb-3">
	    <div class="col-sm-4 col-md-3">
	    <img class="img-fluid" src="/img/chandler-maze.jpg">
	    </div>
	    <div class="col-sm-8 col-md-9">
	    <h2>Chandler Maze</h2>
<p class="justify">Chandler was born and raised in Eastern Kentucky.  Over the last decade, Chandler has lived in Western, Northern, and Central Kentucky, making invaluable connections to advance his education and career.  At his prior firm, Chandler was exposed to a variety of legal cases, scenarios, and experiences and was trained by some of the top lawyers in the area.  While focusing on personal injury, Chandler has also been immersed in many different areas of law. He has worked for the Montgomery County Attorney’s office and the Rowan County Attorney’s office, as well as the Public Defender’s office. As such, he has experience with criminal cases on both sides of the court. In addition, Chandler worked inside jails in Eastern Kentucky as a Pretrial Officer alongside Judges and arresting officers, helping to determine bonds for those incarcerated at the beginning stages of their proceedings. Having spent the last number of years working as an attorney for a large personal injury firm, Chandler has learned important tactics and strategies, crucial for maximizing the recovery value in every one of his client’s cases. After living in the Cincinnati and Lexington areas, Chandler feels very fortunate to be able to practice law in the area in which he grew up, and use his knowledge and experience to help those in need.</p>
	    </div>
	    </div>

<div class="row mb-3">
<div class="col-sm-4 col-md-3">
<img class="img-fluid" src="/img/clayton-stone.jpg">
</div>
<div class="col-sm-8 col-md-9">
<h2>Clayton Stone</h2>
<p class="justify">Clayton is a native of Central Kentucky and has a passion for serving his community. He
completed his undergraduate studies at the University of Kentucky, with a degree in Political
Science. After college, Clayton attended the Salmon P. Chase College of Law, where he would
eventually graduate with honors. While in law school, Clayton interned for the Boone County
Attorney’s office, as well as worked for one of the most successful criminal defense firms in the
tristate area. Following law school, Clayton spent his first years of practice working for an
insurance defense firm in Lexington, KY, focusing on civil litigation. These work experiences
provide Clayton a broad base of knowledge in many areas of law.</p>
</div>
</div>',
	]);

	$page8 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Mission',
	    'slug' => 'mission',
	    'description' => '',
	    'content' => '<div class="row">
<div class="col-sm-4 order-sm-12">

<img src="/img/mission-hugs.jpg" alt="Mission Hugs" class="img-fluid img-padded" />

</div>
    <div class="col-sm-8 order-sm-1">

    <p><strong>The Taraloka Foundation</strong> creates opportunities for Himalayan girls by providing education, healthcare, and a safe refuge.</p>

    <p>We strive to do the best we can for a small group of girls in the Himalayan region of Sikkim. We rescue girls from difficult circumstances and support all of their needs until they graduate from college. As soon as one of our girls enters college, we have room to bring another girl into the Sikkim Happiness Home, their safe refuge.  Many have lost their parents and have no safety net. Some of our girls have a parent or a relative, but for a variety of reasons they need the safe refuge of the Sikkim Happiness Home. Regardless of the circumstance, our girls enjoy a life together as sisters. We help them cross over from a life of suffering to a life full of joy and potential.</p>

    </div>
    </div>',
	]);

    $page9 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'About',
	    'slug' => 'about',
	    'description' => '',
	    'content' => '<div class="row">
<div class="col-sm-4 order-sm-12">
        <img src="/img/about-girls-stair-steps.jpg" alt="About Girls Stair Steps" class="img-fluid img-padded" />
</div>
      <div class="col-sm-8 order-sm-1">

    <p>After twelve years of guiding students in India, Tim Williams created <strong>The Taraloka Foundation</strong> in 2012 as a way to assist the noble work of fellow guides and Tibetan locals, Kelsang Phuntsok and Gelek Gyatso.  Through their dedication and hard work, the Sikkim Happiness Home has become a place of safety, comfort, education, and love for more than 33 girls.</p>

    <h3>Basic structure of Taraloka:</h3>

        <ul>
    <li>19 girls in the Sikkim Happiness Home (four story home in Gangtok, Sikkim India)</li>
    <li>10 girls presently in college in Gangtok, Sikkim India (living in college dormitories)</li>
    <li>4 graduates</li>
    <li>Each girl has a sponsor in the USA ($2300 annually per girl)</li>
    <li>Beyond sponsorship funds, the we raise about $25,000 annually for building maintenance, house needs, salaries, medical expenses, and creating more oportunities for the girls.
    </li>
    <li>3 employees in Sikkim (SHH coordinator, house mother, and cook)</li>
    <li>The girls attend an excellent private schools in Gangtok, Sikkim India</li>
    <li>As soon as one girl leaves the SHH to live in a college dormitory, we find a sponsor and bring another young girl into the home.</li>
        </ul>
      </div>
    </div>',
	]);

    $page10 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Newsletters',
	    'slug' => 'newsletters',
	    'description' => '',
	    'content' => '
<div class="row">
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/June-2018.pdf" target="_blank"><img src="/img/Newsletters/Covers/June-2018.jpg" class="img-fluid" /></a>
        <p>June 2018</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/January-2018.pdf#zoom=75,0,1025" target="_blank"><img src="/img/Newsletters/Covers/January-2018.jpg" class="img-fluid" /></a>
        <p>January 2018</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/newsletters/PDFs/March-2017.pdf" target="_blank"><img src="/img/Newsletters/Covers/March-2017.jpg" class="img-fluid" /></a>
        <p>March 2017</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/July-2016.pdf" target="_blank"><img src="/img/Newsletters/Covers/July-2016.jpg" class="img-fluid" /></a>
        <p>July 2016</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/January-2016.pdf" target="_blank"><img src="/img/Newsletters/Covers/January-2016.jpg" class="img-fluid" /></a>
        <p>January 2016</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/November-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/November-2015.png" class="img-fluid" /></a>
        <p>November 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/June-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/June-2015.jpg" class="img-fluid" /></a>
        <p>June 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/April-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/April-2015.jpg" class="img-fluid" /></a>
        <p>April 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/October-2014.pdf" target="_blank"><img src="/img/Newsletters/Covers/October-2014.png" class="img-fluid" /></a>
        <p>October 2014</p>
      </div>
    </div>
        ',
	]);

    $page11 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Partners',
	    'slug' => 'partners',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-4 order-sm-12">

<img src="/img/astral-shoe.jpg" alt="Partners" class="img-fluid img-padded" />

</div>
<div class="col-sm-8 order-sm-1">

    <p>The Taraloka community includes kind souls and partners that have our girls in Patagonia jackets, wearing Astral shoes during the monsoon season, and appearing in a documentary supported by Susan and Robert Downey Jr..  Thanks to their generosity, our girls know there are people on the other side of the planet that are looking out for them.</p>

    <div class="row">
      <div class="col-sm-3 col-4">
    <a href="http://www.astraldesigns.com/" target="_blank">
      <img src="/img/Partners/astral-square.png" class="img-fluid" alt="Astral" />
    </a>
      </div>
    <div class="col-sm-3 col-4">
    <a href="http://www.dzifoundation.org/" target="_blank">
      <img src="/img/Partners/dzifoundation-square.png" class="img-fluid" alt="dZi Foundation" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
    <a href="http://flyingsquirrelbar.com/" target="_blank">
      <img src="/img/Partners/flyingsquirrel.png" class="img-fluid" alt="Flying Squirrel" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
    <a href="https://www.highlandbrewing.com/" target="_blank">
      <img src="/img/Partners/highlandbrewing.png" class="img-fluid" alt="Highland Brewery" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://www.nihil.co/" target="_blank">
      <img src="/img/Partners/nihil.png" class="img-fluid" alt="The NIHIL Corporation" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://www.patagonia.com/" target="_blank">
      <img src="/img/Partners/patagonia.png" class="img-fluid" alt="Patagonia" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://randomactfunding.com/" target="_blank">
          <img src="/img/Partners/RAF.png" class="img-fluid" alt="Random Act Funding" />
        </a>
      </div>
    </div>


</div>
</div>
        ',
	]);

    $page16 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Transparency',
	    'slug' => 'transparency',
	    'description' => '',
	    'content' => '

    <div class="row">
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2017.pdf" target="_blank">
          <img src="/img/1099s/Covers/2017.jpg" class="img-fluid" alt="2017 Form 1099" />
        </a>
        <p>2017 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2016.pdf" target="_blank">
          <img src="/img/1099s/Covers/2016.jpg" class="img-fluid" alt="2016 Form 1099" />
        </a>
        <p>2016 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2015.pdf" target="_blank">
          <img src="/img/1099s/Covers/2015.jpg" class="img-fluid" alt="2015 Form 1099" />
        </a>
        <p>2015 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2014.pdf" target="_blank">
          <img src="/img/1099s/Covers/2014.jpg" class="img-fluid" alt="2014 Form 1099" />
        </a>
        <p>2014 Form 1099</p>
      </div>
    </div>

        ',
	]);

        $page23 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Films',
	    'slug' => 'films',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-6">

<p>
This is a short clip of Yangchen saying hello to her sponsor.  The voices you hear in the background are a group of her young sisters huddled around the camera… helping us film.
</p>
<p class="mt-4 pt-4">
Taraloka documentary coming to this page very soon!
</p>

</div>
<div class="col-sm-6">

<div class="embed-responsive embed-responsive-16by9">

<video id="my-video" class="video-js embed-responsive-item" controls preload="auto" width="640" height="360" poster="/img/Videos/Yanchen/Yanchen-Thumbs-Up.png" data-setup="{}">
    <source src="/img/Videos/Yanchen/Yanchen-360p.mp4" type="video/mp4">
    <source src="/img/Videos/Yanchen/Yanchen-360p.webm" type="video/webm">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

</div>

</div>
</div>

        ',
	]);

    $page23 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.taraloka.org')->first()->id,
	    'title' => 'Trips',
	    'slug' => 'trips',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-12">

<p>
Taraloka offers travel opportunities in India that support our work with the girls in the Sikkim Happiness Home.  Members of our staff have many years of experience  guiding and designing trips that range from trekking in Ladakh and Sikkim to motorcycle tours in both south and north India.
</p>

<p class="text-center">
<a href="mailto:tim@taraloka.org" target="_blank">
Please contact Tim Williams if you are interested in one of our unique adventures!
</a>
</p>

<h2>Annual Taraloka Trips</h2>
<p>
Our annual trips in Sikkim are focused on spending time with the girls in Gangtok and in the villages where the they were born.  Trips typically occur in either December or March and include a variety of activities ranging from simple driving tours to Himalayan treks and adventures on Royal Enﬁeld motorcycles.
</p>

<div class="row">
<div class="col-sm-12">
<img src="/img/bikes.jpg" alt="Bikes" class="img-fluid" />
</div>
</div>

<h2 class="text-center pt-4 pb-4">Our next trip<br />March 2019 motorcycle tour in Sikkim + trek in Dzonghu</h2>

<div class="row">
<div class="col-sm-4">
<img src="/img/trip-1.jpg" alt="Trip" class="img-fluid" />
</div>
<div class="col-sm-4">
<img src="/img/trip-2.jpg" alt="Trip" class="img-fluid" />
</div>
<div class="col-sm-4">
<img src="/img/trip-4.jpg" alt="Trip" class="img-fluid" />
</div>
</div>

<div class="row mt-4">
<div class="col-sm-8">
<h2>Dokham Tours and Travels</h2>  
<p>
Dokham is a guiding company owned by Gelek Gyatso, our India coordinator for Taraloka.  Gyatso specializes in motorcycle tours and trekking in Sikkim.  Custom trips can be created any time of year and a percentage of the trip cost will support Taraloka.
</p>
</div>
<div class="col-sm-4">
<img src="/img/trip-5.jpg" alt="Trip" class="img-fluid" />
</div>
</div>

<div class="row mt-2">
<div class="col-sm-8">
<h2>Ladakh Trekking </h2>  
<p>
Our friends at Ladakh Trekking offer treks in the north Indian state of Ladkh and motorcycle tours all over India.  Lalit Prakash is our good friend and primary guide for these adventures.  Custom trips can be created any time of year and a percentage of the trip cost will support Taraloka.
</p>
</div>
<div class="col-sm-4">
<img src="/img/lalit.jpg" alt="Lalit" class="img-fluid" />
</div>
</div>

</div>
</div>

        ',
	]);    

    	$page8 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Mission',
	    'slug' => 'mission',
	    'description' => '',
	    'content' => '<div class="row">
<div class="col-sm-4 order-sm-12">

<img src="/img/mission-hugs.jpg" alt="Mission Hugs" class="img-fluid img-padded" />

</div>
    <div class="col-sm-8 order-sm-1">

    <p><strong>The Taraloka Foundation</strong> creates opportunities for Himalayan girls by providing education, healthcare, and a safe refuge.</p>

    <p>We strive to do the best we can for a small group of girls in the Himalayan region of Sikkim. We rescue girls from difficult circumstances and support all of their needs until they graduate from college. As soon as one of our girls enters college, we have room to bring another girl into the Sikkim Happiness Home, their safe refuge.  Many have lost their parents and have no safety net. Some of our girls have a parent or a relative, but for a variety of reasons they need the safe refuge of the Sikkim Happiness Home. Regardless of the circumstance, our girls enjoy a life together as sisters. We help them cross over from a life of suffering to a life full of joy and potential.</p>

    </div>
    </div>',
	]);

    $page9 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'About',
	    'slug' => 'about',
	    'description' => '',
	    'content' => '<div class="row">
<div class="col-sm-4 order-sm-12">
        <img src="/img/about-girls-stair-steps.jpg" alt="About Girls Stair Steps" class="img-fluid img-padded" />
</div>
      <div class="col-sm-8 order-sm-1">

    <p>After twelve years of guiding students in India, Tim Williams created <strong>The Taraloka Foundation</strong> in 2012 as a way to assist the noble work of fellow guides and Tibetan locals, Kelsang Phuntsok and Gelek Gyatso.  Through their dedication and hard work, the Sikkim Happiness Home has become a place of safety, comfort, education, and love for more than 33 girls.</p>

    <h3>Basic structure of Taraloka:</h3>

        <ul>
    <li>19 girls in the Sikkim Happiness Home (four story home in Gangtok, Sikkim India)</li>
    <li>10 girls presently in college in Gangtok, Sikkim India (living in college dormitories)</li>
    <li>4 graduates</li>
    <li>Each girl has a sponsor in the USA ($2300 annually per girl)</li>
    <li>Beyond sponsorship funds, the we raise about $25,000 annually for building maintenance, house needs, salaries, medical expenses, and creating more oportunities for the girls.
    </li>
    <li>3 employees in Sikkim (SHH coordinator, house mother, and cook)</li>
    <li>The girls attend an excellent private schools in Gangtok, Sikkim India</li>
    <li>As soon as one girl leaves the SHH to live in a college dormitory, we find a sponsor and bring another young girl into the home.</li>
        </ul>
      </div>
    </div>',
	]);

    $page10 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Newsletters',
	    'slug' => 'newsletters',
	    'description' => '',
	    'content' => '
<div class="row">
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/June-2018.pdf" target="_blank"><img src="/img/Newsletters/Covers/June-2018.jpg" class="img-fluid" /></a>
        <p>June 2018</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/January-2018.pdf#zoom=75,0,1025" target="_blank"><img src="/img/Newsletters/Covers/January-2018.jpg" class="img-fluid" /></a>
        <p>January 2018</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/newsletters/PDFs/March-2017.pdf" target="_blank"><img src="/img/Newsletters/Covers/March-2017.jpg" class="img-fluid" /></a>
        <p>March 2017</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/July-2016.pdf" target="_blank"><img src="/img/Newsletters/Covers/July-2016.jpg" class="img-fluid" /></a>
        <p>July 2016</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/January-2016.pdf" target="_blank"><img src="/img/Newsletters/Covers/January-2016.jpg" class="img-fluid" /></a>
        <p>January 2016</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/November-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/November-2015.png" class="img-fluid" /></a>
        <p>November 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/June-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/June-2015.jpg" class="img-fluid" /></a>
        <p>June 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/April-2015.pdf" target="_blank"><img src="/img/Newsletters/Covers/April-2015.jpg" class="img-fluid" /></a>
        <p>April 2015</p>
      </div>
      <div class="col-sm-3 col-6 text-center">
        <a href="/img/Newsletters/PDFs/October-2014.pdf" target="_blank"><img src="/img/Newsletters/Covers/October-2014.png" class="img-fluid" /></a>
        <p>October 2014</p>
      </div>
    </div>
        ',
	]);

    $page11 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Partners',
	    'slug' => 'partners',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-4 order-sm-12">

<img src="/img/astral-shoe.jpg" alt="Partners" class="img-fluid img-padded" />

</div>
<div class="col-sm-8 order-sm-1">

    <p>The Taraloka community includes kind souls and partners that have our girls in Patagonia jackets, wearing Astral shoes during the monsoon season, and appearing in a documentary supported by Susan and Robert Downey Jr..  Thanks to their generosity, our girls know there are people on the other side of the planet that are looking out for them.</p>

    <div class="row">
      <div class="col-sm-3 col-4">
    <a href="http://www.astraldesigns.com/" target="_blank">
      <img src="/img/Partners/astral-square.png" class="img-fluid" alt="Astral" />
    </a>
      </div>
    <div class="col-sm-3 col-4">
    <a href="http://www.dzifoundation.org/" target="_blank">
      <img src="/img/Partners/dzifoundation-square.png" class="img-fluid" alt="dZi Foundation" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
    <a href="http://flyingsquirrelbar.com/" target="_blank">
      <img src="/img/Partners/flyingsquirrel.png" class="img-fluid" alt="Flying Squirrel" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
    <a href="https://www.highlandbrewing.com/" target="_blank">
      <img src="/img/Partners/highlandbrewing.png" class="img-fluid" alt="Highland Brewery" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://www.nihil.co/" target="_blank">
      <img src="/img/Partners/nihil.png" class="img-fluid" alt="The NIHIL Corporation" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://www.patagonia.com/" target="_blank">
      <img src="/img/Partners/patagonia.png" class="img-fluid" alt="Patagonia" />
    </a>
      </div>
      <div class="col-sm-3 col-4">
        <a href="http://randomactfunding.com/" target="_blank">
          <img src="/img/Partners/RAF.png" class="img-fluid" alt="Random Act Funding" />
        </a>
      </div>
    </div>


</div>
</div>
        ',
	]);

    $page16 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Transparency',
	    'slug' => 'transparency',
	    'description' => '',
	    'content' => '

    <div class="row">
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2017.pdf" target="_blank">
          <img src="/img/1099s/Covers/2017.jpg" class="img-fluid" alt="2017 Form 1099" />
        </a>
        <p>2017 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2016.pdf" target="_blank">
          <img src="/img/1099s/Covers/2016.jpg" class="img-fluid" alt="2016 Form 1099" />
        </a>
        <p>2016 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2015.pdf" target="_blank">
          <img src="/img/1099s/Covers/2015.jpg" class="img-fluid" alt="2015 Form 1099" />
        </a>
        <p>2015 Form 1099</p>
      </div>
      <div class="col-sm-3">
        <a href="/img/1099s/PDFs/2014.pdf" target="_blank">
          <img src="/img/1099s/Covers/2014.jpg" class="img-fluid" alt="2014 Form 1099" />
        </a>
        <p>2014 Form 1099</p>
      </div>
    </div>

        ',
	]);

        $page23 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Films',
	    'slug' => 'films',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-6">

<p>
This is a short clip of Yangchen saying hello to her sponsor.  The voices you hear in the background are a group of her young sisters huddled around the camera… helping us film.
</p>
<p class="mt-4 pt-4">
Taraloka documentary coming to this page very soon!
</p>

</div>
<div class="col-sm-6">

<div class="embed-responsive embed-responsive-16by9">

<video id="my-video" class="video-js embed-responsive-item" controls preload="auto" width="640" height="360" poster="/img/Videos/Yanchen/Yanchen-Thumbs-Up.png" data-setup="{}">
    <source src="/img/Videos/Yanchen/Yanchen-360p.mp4" type="video/mp4">
    <source src="/img/Videos/Yanchen/Yanchen-360p.webm" type="video/webm">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

</div>

</div>
</div>

        ',
	]);

    $page23 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.taraloka.org')->first()->id,
	    'title' => 'Trips',
	    'slug' => 'trips',
	    'description' => '',
	    'content' => '

<div class="row">
<div class="col-sm-12">

<p>
Taraloka offers travel opportunities in India that support our work with the girls in the Sikkim Happiness Home.  Members of our staff have many years of experience  guiding and designing trips that range from trekking in Ladakh and Sikkim to motorcycle tours in both south and north India.
</p>

<p class="text-center">
<a href="mailto:tim@taraloka.org" target="_blank">
Please contact Tim Williams if you are interested in one of our unique adventures!
</a>
</p>

<h2>Annual Taraloka Trips</h2>
<p>
Our annual trips in Sikkim are focused on spending time with the girls in Gangtok and in the villages where the they were born.  Trips typically occur in either December or March and include a variety of activities ranging from simple driving tours to Himalayan treks and adventures on Royal Enﬁeld motorcycles.
</p>

<div class="row">
<div class="col-sm-12">
<img src="/img/bikes.jpg" alt="Bikes" class="img-fluid" />
</div>
</div>

<h2 class="text-center pt-4 pb-4">Our next trip<br />March 2019 motorcycle tour in Sikkim + trek in Dzonghu</h2>

<div class="row">
<div class="col-sm-4">
<img src="/img/trip-1.jpg" alt="Trip" class="img-fluid" />
</div>
<div class="col-sm-4">
<img src="/img/trip-2.jpg" alt="Trip" class="img-fluid" />
</div>
<div class="col-sm-4">
<img src="/img/trip-4.jpg" alt="Trip" class="img-fluid" />
</div>
</div>

<div class="row mt-4">
<div class="col-sm-8">
<h2>Dokham Tours and Travels</h2>  
<p>
Dokham is a guiding company owned by Gelek Gyatso, our India coordinator for Taraloka.  Gyatso specializes in motorcycle tours and trekking in Sikkim.  Custom trips can be created any time of year and a percentage of the trip cost will support Taraloka.
</p>
</div>
<div class="col-sm-4">
<img src="/img/trip-5.jpg" alt="Trip" class="img-fluid" />
</div>
</div>

<div class="row mt-2">
<div class="col-sm-8">
<h2>Ladakh Trekking </h2>  
<p>
Our friends at Ladakh Trekking offer treks in the north Indian state of Ladkh and motorcycle tours all over India.  Lalit Prakash is our good friend and primary guide for these adventures.  Custom trips can be created any time of year and a percentage of the trip cost will support Taraloka.
</p>
</div>
<div class="col-sm-4">
<img src="/img/lalit.jpg" alt="Lalit" class="img-fluid" />
</div>
</div>

</div>
</div>

        ',
	]);    

    $page18 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.schowsestatesales.com')->first()->id,
	    'title' => 'Who We are',
	    'slug' => 'who-we-are',
	    'description' => '',
	    'content' => '
    <div class="jumbotron jumbotron-fluid" id="jumbotron-whoweare" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h1 class="display-3">Who We Are</h1>
    </div>
    </div>
      </div>
    </div>
        ',
	]);

    $page19 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.schowsestatesales.com')->first()->id,
	    'title' => 'Our Philosophy',
	    'slug' => 'our-philosophy',
	    'description' => '',
	    'content' => '

    <div class="jumbotron jumbotron-fluid" id="jumbotron-philosophy" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h1 class="display-3">Our Philosophy</h1>
    </div>
    </div>
      </div>
    </div>

        ',
	]);

    $page20 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.schowsestatesales.com')->first()->id,
	    'title' => 'Notable Sales',
	    'slug' => 'notable-sales',
	    'description' => '',
	    'content' => '

    <div class="jumbotron jumbotron-fluid" id="jumbotron-sales" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h1 class="display-3">Notable Sales</h1>
    </div>
    </div>
      </div>
    </div>

        ',
	]);

    $page21 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.schowsestatesales.com')->first()->id,
	    'title' => 'Testimonials',
	    'slug' => 'testimonials',
	    'description' => '',
	    'content' => '

    <div class="jumbotron jumbotron-fluid" id="jumbotron-testimonials" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h1 class="display-3">Testimonials</h1>
    </div>
    </div>
      </div>
    </div>

    <div style="padding-top:2em; padding-bottom:2em;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>&quot;The Coleman family knew when we met Carl and Mel, that we had found the perfect fit for handling the items that were important to us.  Their pointing us in the right direction, their marketing abilities, their personal connections and their artistic knowledge of antiques, have all been important to the success of needed restoration and the key to placing historical memorabilia in accessible locations to the public.</p>

<p>Down to earth, honest, unpretentious, hard working and simply kind, are several characteristics that come to mind when we think about Carl and Mel.  They have become like family to the Coleman’s and we are so thankful that our paths have crossed!&quot;</p>

<p>
Donna Coleman<br />
Chattanooga, TN<br />
March 1, 2018
</p>
</div>
<div class="col-sm-6">
<p>
&quotI highly recommend the services of Carl Schow for any Estate Sale efforts.
</p>
<p>
Carl and his team bring to any estate sale a wealth of knowledge regarding most anything that
one would consider dispensing with. He knows art, antiques, furniture, jewelry, glassware and
almost anything I can think of. His experience at conducting such sales brings an added sense
of feeling as if one is letting go of valuable and not so valuable items in the best possible way.
Carl’s approach is comprehensive and efficient, and, in our case, gave my family a great sense
of peace that we had dealt with our family’s treasures in the most respectful way knowing what
was not valuable either brought us significant value, was donated to a good cause or dispensed
with properly.&quot
</p>
<p>
Chris Moore, MD<br />
Lookout Mountain, GA</br />
April 27, 2018
</p>


</div>
</div>
</div>
</div>
',
	]);

    $page22 = factory(App\Models\Page::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'dev.schowsestatesales.com')->first()->id,
	    'title' => 'Upcoming Listings',
	    'slug' => 'upcoming-listings',
	    'description' => '',
	    'content' => '

    <div class="jumbotron jumbotron-fluid" id="jumbotron-listings" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
        <h1 class="display-3">Upcoming Listings</h1>
    </div>
    </div>
      </div>
    </div>

        ',
	]);
    
    }
}
