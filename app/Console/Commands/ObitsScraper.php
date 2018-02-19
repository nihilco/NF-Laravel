<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ObitsScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:obits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obituary Scraper';

    protected $states = [
        'kentucky',
    ];

    protected $base_url = 'http://www.legacy.com/obituaries/';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach($this->states as $state)
	{
	    $this->scrape($state);
	}
    }

    public function scrape($state)
    {
        $crawler = \Goutte::request('GET', $this->base_url . $state . '/browse?page=1');

	//$pages = $crawler->filter('article')->count();
	//$pages = $crawler->filter('article');

	$crawler->filter('article')->each(function ($node) {
  	  $uri = $node->filter('a')->link()->getUri();
          print($uri . PHP_EOL);
	});

	return true;
    }
}
