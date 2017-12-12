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
    }
}
