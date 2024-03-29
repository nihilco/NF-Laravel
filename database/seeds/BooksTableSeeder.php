<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = \App\Models\Author::all();
        $series = \App\Models\Series::all();

        //
        //  BOOKS
        //

        // Abhorsen
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Abhorsen',
            'title_alphabetic' => 'Abhorsen',
            'slug' => 'abhorsen',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 4,
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        // Academs Fury
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Academ\'s Fury',
            'title_alphabetic' => 'Academ\'s Fury',
            'slug' => 'academs-fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 2,
            'description' => 'For one thousand years, the people of Alera have united against the aggressive and threatening races that inhabit the world, using their unique bond with the Furies--elementals of Earth, Air, Fire, Water, and Metal. But now, the unity of the Alerians hangs in precarious balance. The First Lord of Alera has fallen in his efforts to protect his people from the vicious attacks of their enemies. Now, the fate of the Alerians lies in the hands of Tavi, a young man who must use all of his courage and resourcefulness to save his people--and himself.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // The Aeronaughts Windlass 
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Aeronaughts Windlass',
            'title_alphabetic' => 'Aeronaughts Windlass, The',
            'slug' => 'the-aeronaughts-windlass',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // The Alloy of Law
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Alloy of Law',
            'title_alphabetic' => 'Alloy of Law, The',
            'slug' => 'the-alloy-of-law',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Arcanum Unbound
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title_display' => 'Arcanum Unbound',
            'title_alphabetic' => 'Arcanum Unbound',
            'slug' => 'arcanum-unbound',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Armada
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Armada',
            'title_alphabetic' => 'Armada',
            'slug' => 'armada',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Cline')->first()->id);

        // The Bands of Mourning
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Bands of Mourning',
            'title_alphabetic' => 'Bands of Mourning, The',
            'slug' => 'the-bands-of-mourning',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Barren
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Barren',
            'title_alphabetic' => 'Barren',
            'slug' => 'barren',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);
        
        // Beyond the Ice Limit
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title_display' => 'Beyond the Ice Limit',
            'title_alphabetic' => 'Beyond the Ice Limit',
            'slug' => 'beyond-the-ice-limit',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // The Black Prism
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Black Prism',
            'title_alphabetic' => 'Black Prism, The',
            'slug' => 'the-black-prism',
        ]);

        $b->addAuthor($authors->where('last_name', 'Weeks')->first()->id);

        // The Blinding Knife
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Blinding Knife',
            'title_alphabetic' => 'Blinding Knife, The',
            'slug' => 'the-blinding-knife',
        ]);

        $b->addAuthor($authors->where('last_name', 'Weeks')->first()->id);

        // The Blood Mirror 
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Blood Mirror',
            'title_alphabetic' => 'Blood Mirror, The',
            'slug' => 'the-blood-mirror',
        ]);

        $b->addAuthor($authors->where('last_name', 'Weeks')->first()->id);
        
        // Blood of the Fold
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Blood of the Fold',
            'title_alphabetic' => 'Blood of the Fold',
            'slug' => 'blood-of-the-fold',
            'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
            'series_order' => 3,
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        // Blood Rites
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Blood Rites',
            'title_alphabetic' => 'Blood Rites',
            'slug' => 'blood-rites',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 6,
            'description' => 'For Harry Dresden, there have been worse assignments than going undercover on the set of an adult film. Still, there\'s something more troubling than usual about his newest case. The film\'s producer believes he\'s the target of a sinister curse-but it\'s the women around him who are dying.

Harry\'s even more frustrated because he only got involved with this bizarre mystery as a favor to Thomas-his flirtatious, self-absorbed vampire acquaintance of dubious integrity. Thomas has a personal stake in the case Harry can\'t quite figure out. But Harry is about to discover that Thomas\' family tree has been hiding a shocking revelation that will change his life forever...',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Blue Labyrinth
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Blue Labyrinth',
            'title_alphabetic' => 'Blue Labyrinth',
            'slug' => 'blue-labyrinth',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // The Boy Who Harnessed the Wind
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Boy Who Harnessed the Wind',
            'title_alphabetic' => 'Boy Who Harnessed the Wind, The',
            'subtitle' => 'Creating Currents of Electricity & Hope',
            'slug' => 'the-boy-who-harnessed-the-wind',
        ]);

        $b->addAuthor($authors->where('last_name', 'Kamkwamba')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Mealer')->first()->id);

        // Brave Enough
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Brave Enough',
            'title_alphabetic' => 'Brave Enough',
            'slug' => 'brave-enough',
        ]);

        $b->addAuthor($authors->where('last_name', 'Strayed')->first()->id);
        
        // Brayans Gold
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Brayan\'s Gold',
            'title_alphabetic' => 'Brayan\'s Gold',
            'slug' => 'brayans-gold',
            'description' => '<p>Return to the world of The Warded Man and The Desert Spear in an illustrated new novella by Peter V. Brett.</p>

<p>Humanity has been brought to the brink of extinction. Each night, the world is overrun by demons bloodthirsty creatures of nightmare that have been hunting the surface for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that they survive. A handful of Messengers brave the night to keep the lines of communication open between the increasingly isolated populace.</p>

<p>Arlen Bales is seventeen, an apprentice Messenger in brand new armor, about to go out for the first time alongside a trained Messenger on a simple overnight trip. Instead Arlen finds himself alone on a frozen mountainside, carrying a dangerous cargo to Count Brayan\'s gold mine, one of the furthest points in the duchy. And One Arm, the giant rock demon, hunts him still.</p>

<p>But Brayan\'s Gold may offer a way for Arlen to be free of One Arm forever, if he is willing to wager his life on the chance.</p>',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // The Broken Eye
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Broken Eye',
            'title_alphabetic' => 'Broken Eye, The',
            'slug' => 'the-broken-eye',
        ]);

        $b->addAuthor($authors->where('last_name', 'Weeks')->first()->id);
        
        // The Burning World
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Burning World',
            'title_alphabetic' => 'Burning World, The',
            'slug' => 'the-burning-world',
        ]);

        $b->addAuthor($authors->where('last_name', 'Marion')->first()->id);

        // Calamity
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Calamity',
            'title_alphabetic' => 'Calamity',
            'slug' => 'calamity',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Captains Fury
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Captain\'s Fury',
            'title_alphabetic' => 'Captain\'s Fury',
            'slug' => 'captains-fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 4,
            'description' => 'After two years of bitter conflict with the hordes of invading Canim, Tavi of Calderon, now Captain of the First Aleran Legion, realizes that a peril far greater than the Canim exists-the terrifying Vord, who drove the savage Canim from their homeland. Now, Tavi must find a way to overcome the centuries-old animosities between Aleran and Cane if an alliance is to be forged against their mutual enemy. And he must lead his legion in defiance of the law, against friend and foe-before the hammerstroke of the Vord descends on them all.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Changes
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Changes',
            'title_alphabetic' => 'Changes',
            'slug' => 'changes',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 12,
            'description' => 'Long ago, Susan Rodriguez was Harry Dresden\'s lover-until she was attacked by his enemies, leaving her torn between her own humanity and the bloodlust of the vampiric Red Court. Susan then disappeared to South America, where she could fight both her savage gift and those who cursed her with it.

            Now Arianna Ortega, Duchess of the Red Court, has discovered a secret Susan has long kept, and she plans to use it-against Harry. To prevail this time, he may have no choice but to embrace the raging fury of his own untapped dark power. Because Harry\'s not fighting to save the world...

He\'s fighting to save his child.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Childres of the Fleet
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Children of the Fleet',
            'title_alphabetic' => 'Children of the Fleet',
            'slug' => 'children-of-the-fleet',
        ]);

        $b->addAuthor($authors->where('last_name', 'Card')->first()->id);

        // City of Endless Night
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'City of Endless Night',
            'title_alphabetic' => 'City of Endless Night',
            'slug' => 'city-of-endless-night',
        ]);

        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);
        
        // Clariel
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Clariel',
            'title_alphabetic' => 'Clariel',
            'slug' => 'clariel',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 1,
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        // A Conjuring of Light
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Conjouring of Light',
            'title_alphabetic' => 'Conjouring of Light, A',
            'slug' => 'a-conjuring-of-light',
        ]);

        $b->addAuthor($authors->where('last_name', 'Schwab')->first()->id);
        
        // The Core
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Core',
            'title_alphabetic' => 'Core, The',
            'slug' => 'the-core',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 5,
            'description' => 'New York Times bestselling author Peter V. Brett brings one of the most imaginative fantasy sagas of the twenty-first century to an epic close.

For time out of mind, bloodthirsty demons have stalked the night, culling the human race to scattered remnants dependent on half-forgotten magics to protect them. Then two heroes aroseâ€”men as close as brothers, yet divided by bitter betrayal. Arlen Bales became known as the Warded Man, tattooed head to toe with powerful magic symbols that enable him to fight demons in hand-to-hand combatâ€”and emerge victorious. Jardir, armed with magically warded weapons, called himself the Deliverer, a figure prophesied to unite humanity and lead them to triumph in Sharak Kaâ€”the final war against demonkind.

But in their efforts to bring the war to the demons, Arlen and Jardir have set something in motion that may prove the end of everything they hold dearâ€”a swarm. Now the war is at hand, and humanity cannot hope to win it unless Arlen and Jardir, with the help of Arlenâ€™s wife, Renna, can bend a captured demon prince to their will and force the devious creature to lead them to the Core, where the Mother of Demons breeds an inexhaustible army.

Trusting their closest confidantes, Leesha, Inevera, Ragen, and Elissa, to rally the fractious people of the Free Cities and lead them against the swarm, Arlen, Renna, and Jardir set out on a desperate quest into the darkest depths of evilâ€”from which none of them expects to return alive.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);
        
        // Cross the Line
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Cross the Line',
            'title_alphabetic' => 'Cross the Line',
            'slug' => 'cross-the-line',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Patterson')->first()->id);

        // A Crown of Swords
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Crown of Swords',
            'title_alphabetic' => 'Crown of Swords, A',
            'slug' => 'a-crown-of-swords',
        ]);

        $b->addAuthor($authors->where('last_name', 'Jordan')->first()->id);
        
        // Cursors Fury
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Cursor\'s Fury',
            'title_alphabetic' => 'Cursor\'s Fury',
            'slug' => 'cursors-fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 3,
            'description' => 'The power-hungry High Lord of Kalare has launched a rebellion against the aging First Lord, Gaius Sextus, who with the loyal forces of Alera must fight beside the unlikeliest of allies-the equally contentious High Lord of Aquitaine.

Meanwhile, young Tavi of Calderon joins a newly formed legion under an assumed name even as the ruthless Kalare unites with the Canim, bestial enemies of the realm whose vast numbers spell certain doom for Alera. When treachery from within destroys the army\'s command structure, Tavi finds himself leading an inexperienced, poorly equipped legion-the only force standing between the Canim horde and the war-torn realm.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // A Darker Shade of Magic
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Darker Shade of Magic',
            'title_alphabetic' => 'Darker Shade of Magic, A',
            'slug' => 'a-darker-shade-of-magic',
        ]);

        $b->addAuthor($authors->where('last_name', 'Schwab')->first()->id);
        
        // Daylight War
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Daylight War',
            'title_alphabetic' => 'Daylight War',
            'slug' => 'daylight-war',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 3,
            'description' => '<p>With The Warded Man and The Desert Spear, Peter V. Brett surged to the front rank of contemporary fantasy, standing alongside giants in the field such as George R. R. Martin, Robert Jordan, and Terry Brooks. The Daylight War, the eagerly anticipated third volume in Brettâ€™s internationally bestselling Demon Cycle, continues the epic tale of humanityâ€™s last stand against an army of demons that rise each night to prey on mankind.</p>

<p>On the night of the new moon, the demons rise in force, seeking the deaths of two men, both of whom have the potential to become the fabled Deliverer, the man prophesied to reunite the scattered remnants of humanity in a final push to destroy the demon corelings once and for all.</p>

<p>Arlen Bales was once an ordinary man, but now he has become something moreâ€”the Warded Man, tattooed with eldritch wards so powerful they make him a match for any demon. Arlen denies he is the Deliverer at every turn, but the more he tries to be one with the common folk, the more fervently they believe. Many would follow him, but Arlenâ€™s path threatens to lead to a dark place he alone can travel to, and from which there may be no returning.</p>

<p>The only one with hope of keeping Arlen in the world of men, or joining him in his descent into the world of demons, is Renna Tanner, a fierce young woman in danger of losing herself to the power of demon magic.</p>

<p>Ahmann Jardir has forged the warlike desert tribes of Krasia into a demon-killing army and proclaimed himself Sharâ€™Dama Ka, the Deliverer. He carries ancient weaponsâ€”a spear and a crownâ€”that give credence to his claim, and already vast swaths of the green lands bow to his control.</p>

<p>But Jardir did not come to power on his own. His rise was engineered by his First Wife, Inevera, a cunning and powerful priestess whose formidable demon bone magic gives her the ability to glimpse the future. Ineveraâ€™s motives and past are shrouded in mystery, and even Jardir does not entirely trust her.</p>

<p>Once Arlen and Jardir were as close as brothers. Now they are the bitterest of rivals. As humanityâ€™s enemies rise, the only two men capable of defeating them are divided against each other by the most deadly demons of allâ€”those lurking in the human heart.</p>',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // Dead Beat
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Dead Beat',
            'title_alphabetic' => 'Dead Beat',
            'slug' => 'dead-beat',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 7,
            'description' => 'Jim Butcher\'s Dresden Files novels have been compared to Harry Potter with an adult tone and attitude. Now, in his first hardcover adventure, Harry Dresden must save Chicago from black magic and necromancy-all in a day\'s work for the city\'s only professional wizard.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Death Masks
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Death Masks',
            'title_alphabetic' => 'Death Masks',
            'slug' => 'death-masks',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 5,
            'description' => 'Harry Dresden, Chicago?s only practicing professional wizard, should be happy that business is pretty good for a change. But he also knows that whenever things are going good, the only way left for them to go is bad. Way bad.

Recent examples: A duel with the lethal champion of the Red Court, who must kill Harry to end the war between vampires and wizards?Hit men using Harry for target practice?The missing Shroud of Turin?and the possible involvement of Chicago?s most feared mob boss?A handless and headless corpse the Chicago police need identified?

Not to mention the return of Harry?s ex-girlfriend Susan, who?s still struggling with her semi-vampiric nature?and who seems to have a new man in her life.

Some days, it just doesn?t pay to get out of bed. No matter how much you?re charging.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // The Defenders of Shannara
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Defenders of Shannara',
            'title_alphabetic' => 'Defenders of Shannara, The',
            'slug' => 'the-defenders-of-shannara',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brooks')->first()->id);
        
        // The Desert Spear
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Desert Spear',
            'title_alphabetic' => 'Desert Spear, The',
            'slug' => 'the-desert-spear',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 2,
            'description' => '<p>The sun is setting on humanity. The night now belongs to voracious demons that prey upon a dwindling population forced to cower behind half-forgotten symbols of power. Legends tell of a Deliverer: a general who once bound all mankind into a single force that defeated the demons. But is the return of the Deliverer just another myth? Perhaps not. Out of the desert rides Ahmann Jardir, who has forged the desert tribes into a demon-killing army. He has proclaimed himself Sharâ€™Dama Ka, the Deliverer, and he carries ancient weaponsâ€”a spear and a crownâ€”that give credence to his claim. But the Northerners claim their own Deliverer: the Warded Man, a dark, forbidding figure. Once, the Sharâ€™Dama Ka and the Warded Man were friends. Now they are fierce adversaries. Yet as old allegiances are tested and fresh alliances forged, all are unaware of the appearance of a new breed of demon, more intelligentâ€”and deadlyâ€”than any that have come before.</p>',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // Dune 
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Dune',
            'title_alphabetic' => 'Dune',
            'slug' => 'dune',
        ]);

        $b->addAuthor($authors->where('last_name', 'Herbert')->first()->id);

        // Edgedancer
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Edgedancer',
            'title_alphabetic' => 'Edgedancer',
            'slug' => 'edgedancer',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // The Escape
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Escape',
            'title_alphabetic' => 'Escape, The',
            'slug' => 'the-escape',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        // The Eye of Minds
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Eye of Minds',
            'title_alphabetic' => 'Eye of Minds, The',
            'slug' => 'the-eye-of-minds',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Dashner')->first()->id);

        // The Eye of the World
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Eye of the World',
            'title_alphabetic' => 'Eye of the World, The',
            'slug' => 'the-eye-of-the-world',
        ]);

        $b->addAuthor($authors->where('last_name', 'Jordan')->first()->id);
        
        // Finders Keepers
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Finders Keepers',
            'title_alphabetic' => 'Finders Keepers',
            'slug' => 'finders-keepers',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'King')->first()->id);

        // Firefight
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Firefight',
            'title_alphabetic' => 'Firefight',
            'slug' => 'firefight',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // The First Fifteen Lives of Harry August
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The First Fifteen Lives of Harry August',
            'title_alphabetic' => 'First Fifteen Lives of Harry August, The',
            'slug' => 'the-first-fifteen-lives-of-harry-august',
        ]);

        $b->addAuthor($authors->where('last_name', 'North')->first()->id);
        
        // First Lords Fury
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'First Lord\'s Fury',
            'title_alphabetic' => 'First Lord\'s Fury',
            'slug' => 'first-lords-fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 6,
            'description' => 'For Gaius Octavian, life has been one long battle. Now, the end of all he fought for is close at hand. The brutal, dreaded Vord are on the march against Alera. And perhaps for the final time, Gaius Octavian and his legions must stand against the enemies of his people. And it will take all his intelligence, ingenuity, and furycraft to save their world from eternal darkness.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Fool Moon
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Fool Moon',
            'title_alphabetic' => 'Fool Moon',
            'slug' => 'fool-moon',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 2,
            'description' => 'Meet Harry Dresden, Chicago\'s first (and only) Wizard P.I. Turns out the \'everyday\' world is full of strange and magical things - and most of them don\'t play well with humans. That\'s where Harry comes in.Business has been slow lately for Harry Dresden. Okay, business has been dead. Not undead - just dead. You would think Chicago would have a little more action for the only professional wizard in the phone book. But lately, Harry hasn\'t been able to dredge up any kind of work - magical or mundane. But just when it looks like he can\'t afford his next meal, a murder comes along that requires his particular brand of supernatural expertise. A brutally mutilated corpse. Strange-looking paw prints. A full moon. Take three guesses. And the first two don\'t count . . . Magic - it can get a guy killed.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // Frogkisser!
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Frogkisser!',
            'title_alphabetic' => 'Frogkisser!',
            'slug' => 'frogkisser',
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);
        
        // Furies of Calderon
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Furies of Calderon',
            'title_alphabetic' => 'Furies of Calderon',
            'slug' => 'furies-of-calderon',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 1,
            'description' => 'In the realm of Alera, where people bond with the furies-elementals of earth, air, fire, water, and metal-fifteen-year-old Tavi struggles with his lack of furycrafting. But when his homeland erupts in chaos-when rebels war with loyalists and furies clash with furies-Tavi\'s simple courage will turn the tides of war.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // A Gathering of Shadows
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Gathering of Shadows',
            'title_alphabetic' => 'Gathering of Shadows, A',
            'slug' => 'a-gathering-of-shadows',
        ]);

        $b->addAuthor($authors->where('last_name', 'Schwab')->first()->id);

        // The Gathering Storm
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Gathering Storm',
            'title_alphabetic' => 'Gathering Storm, The',
            'slug' => 'the-gathering-storm',
        ]);

        $b->addAuthor($authors->where('last_name', 'Jordan')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // A Gentleman in Moscow
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Gentleman in Moscow',
            'title_alphabetic' => 'Gentleman in Moscow, A',
            'slug' => 'a-gentleman-in-moscow',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Towels')->first()->id);

        // Ghost Story
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Ghost Story',
            'title_alphabetic' => 'Ghost Story',
            'slug' => 'ghost-story',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 13,
            'description' => 'When we last left the mighty wizard detective Harry Dresden, he wasn\'t doing well. In fact, he had been murdered by an unknown assassin.

            But being dead doesn\'t stop him when his friends are in danger. Except now he has nobody, and no magic to help him. And there are also several dark spirits roaming the Chicago shadows who owe Harry some payback of their own.

To save his friends-and his own soul-Harry will have to pull off the ultimate trick without any magic...

The eagerly awaited new novel in the #1 New York Times bestselling Dresden Files series.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Go Set a Watchman
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Go Set a Watchman',
            'title_alphabetic' => 'Go Set a Watchman',
            'slug' => 'go-set-a-watchman',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Lee')->first()->id);

        // Goldenhand
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Goldenhand',
            'title_alphabetic' => 'Goldenhand',
            'slug' => 'goldemhand',
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);
        
        // Grave Peril
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Grave Peril',
            'title_alphabetic' => 'Grave Peril',
            'slug' => 'grave-peril',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 3,
            'description' => 'In all his years of supernatural sleuthing, Harry Dresden has never faced anything like this: the spirit world\'s gone postal. These ghosts are tormented, violent, and deadly. Someone-or something-is purposely stirring them up to wreak unearthly havoc. But why? If Harry doesn\'t figure it out soon, he could wind up a ghost himself.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // The Great Bazaar
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Great Bazaar',
            'title_alphabetic' => 'Great Bazaar, The',
            'slug' => 'the-great-bazaar',
            'description' => '<p>Humanity has been brought to the brink of extinction. Each night the world is overrun by demons - bloodthirsty creatures of nightmare that have been hunting and killing humanity for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once-proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that anyone has been able to survive.</p.

<p>A handful of Messengers brave the night to keep the lines of communication open among the increasingly isolated populace. But there was a time when the demons were not so bold. A time when wards did more than hold the demons at bay: They allowed man to fight back, and to win.</p>

<p>Messenger Arlen Bales will search anywhere, dare anything, to return this magic to the world. Abban, a merchant in the Great Bazaar of Krasia, purports to sell everything a man\'s heart could desire, including, perhaps, the key to Arlen\'s quest.</p>',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);
        
        // The Guilty
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Guilty',
            'title_alphabetic' => 'Guilty, The',
            'slug' => 'the-guilty',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        // Guns, Germs, and Steel
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Guns, Germs, and Steel',
            'title_alphabetic' => 'Guns, Germs, and Steel',
            'slug' => 'guns-germs-and-steel',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Diamond')->first()->id);

        // Half the World
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Half the World',
            'title_alphabetic' => 'Half the World',
            'slug' => 'half-the-world',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Abercrombie')->first()->id);
        
        // Hatching Twitter
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Hatching Twitter',
            'title_alphabetic' => 'Hatching Twitter',
            'slug' => 'hatching-twitter',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Bilton')->first()->id);

        // The Hero of the Ages
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Hero of Ages',
            'title_alphabetic' => 'Hero of Ages, The',
            'slug' => 'the-hero-of-ages',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // The Human Division
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Human Division',
            'title_alphabetic' => 'Human Division, The',
            'slug' => 'the-human-division',
        ]);

        $b->addAuthor($authors->where('last_name', 'Scalzi')->first()->id);

        // The Kraken Project
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Kraken Poject',
            'title_alphabetic' => 'Kraken Project, The',
            'slug' => 'the-kraken-project',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);

        // Legion
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Legion',
            'title_alphabetic' => 'Legion',
            'slug' => 'legion',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Legion: Skin Deep
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Legion: Skin Deep',
            'title_alphabetic' => 'Legion: Skin Deep',
            'slug' => 'legion-skin-deep',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Lirael
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Lirael',
            'title_alphabetic' => 'Lirael',
            'slug' => 'lirael',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 3,
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);
        
        // London Bridges
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'London Bridges',
            'title_alphabetic' => 'London Bridges',
            'slug' => 'london-bridges',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Patterson')->first()->id);

        // The Lost Island
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Lost Island',
            'title_alphabetic' => 'Lost Island, The',
            'slug' => 'the-lost-island',
        ]);

        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);
        
        // The Maze Runner
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Maze Runner',
            'title_alphabetic' => 'Maze Runner, The',
            'slug' => 'the-maze-runner',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Dashner')->first()->id);

        // A Memory of Light
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Memory of Light',
            'title_alphabetic' => 'Memory of Light, A',
            'slug' => 'a-memory-of-light',
        ]);

        $b->addAuthor($authors->where('last_name', 'Jordan')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Messengers Legacy
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Messenger\'s Legacy',
            'title_alphabetic' => 'Messenger\'s Legacy',
            'slug' => 'messengers-legacy',
            'description' => '<p>Humanity has been brought to the brink of extinction. Each night, the world is overrun by demons--bloodthirsty creatures of nightmare that have been hunting the surface for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that they survive. A handful of Messengers brave the night to keep the lines of communication open between the increasingly isolated populace.</p>

<p>Briar Damaj is a boy of six in the small village of Bogton. Half-Krasian, the village children call him Mudboy for his dark skin. When tragedy strikes, Briar decides the town is better off without him, fleeing into the bog with nothing but his wits and a bit of herb lore to protect him.</p>

<p>After twenty years, Ragen Messenger has agreed to retire and pass on his route to his protÃ©gÃ©, Arlen Bales. But for all that he\'s earned the rest, he has no idea what to do with the rest of his life. When he learns Briar, the son of an old friend, is missing, Ragen is willing to risk any danger to bring him safely home.</p>',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // Mistborn
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Mistborn',
            'title_alphabetic' => 'Mistborn',
            'slug' => 'mistborn',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // The Name of the Wind
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Name of the Wind',
            'title_alphabetic' => 'Name of the Wind, The',
            'slug' => 'the-name-of-the-wind',
        ]);

        $b->addAuthor($authors->where('last_name', 'Rothfuss')->first()->id);

        // The New Hunger
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The New Hunger',
            'title_alphabetic' => 'New Hunger, The',
            'slug' => 'the-new-hunger',
        ]);

        $b->addAuthor($authors->where('last_name', 'Marion')->first()->id);
        
        // No Mans Land
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'No Man\'s Land',
            'title_alphabetic' => 'No Man\'s Land',
            'slug' => 'no-mans-land',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        // Oathbringer
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Oathbringer',
            'title_alphabetic' => 'Oathbringer',
            'slug' => 'oathbringer',
        ]);

        $b->addAuthor($authors->where('last_name', 'Finn')->first()->id);
        
        // The Obsidian Chamber
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title_display' => 'The Obsidian Chamber',
            'title_alphabetic' => 'Obsidian Chamber, The',
            'slug' => 'the-obsidian-chamber',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // The People vs. Alex Cross
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The People vs. Alex Cross',
            'title_alphabetic' => 'People vs. Alex Cross, The',
            'slug' => 'the-people-vs-alex-cross',
        ]);

        $b->addAuthor($authors->where('last_name', 'Patterson')->first()->id);
        
        // Perfect Shadow
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Perfect Shadow',
            'title_alphabetic' => 'Perfect Shadow',
            'slug' => 'perfect-shadow',
        ]);

        $b->addAuthor($authors->where('last_name', 'Finn')->first()->id);

        // Perfect State
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Perfect State',
            'title_alphabetic' => 'Perfect State',
            'slug' => 'perfect-state',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // The Periferal
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Peripheral',
            'title_alphabetic' => 'Peripheral, The',
            'slug' => 'the-peripheral',
        ]);

        $b->addAuthor($authors->where('last_name', 'Gibson')->first()->id);
        
        // Princeps Fury
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Princeps\' Fury',
            'title_alphabetic' => 'Princeps\' Fury',
            'slug' => 'princeps-fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 5,
            'description' => 'Under Tavi of Calderon, heir to the crown, war-torn Alera rebuilds while politicians and nobles vie for power. But from the south comes news: the dreaded Vord have come to Alera. For a thousand years, Alera and her furies have withstood every enemy and survived every foe.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Proven Guilty
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Proven Guilty',
            'title_alphabetic' => 'Proven Guilty',
            'slug' => 'proven-guilty',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 8,
            'description' => 'Elevated "into the front rank of urban fantasy heroes" (SF Site), professional wizard Harry Dresden is pledged to fight crime, banish evil, and outwit the masters of dark arts in the shadowy corners of Chicago.

Harry, the only wizard in the Chicago phone book, is drafted to look into rumors of black magic in the Windy City. And if that wasn\'t enough, he must help the daughter of an old friend, whose boyfriend was the only one in a room where an old man was attacked. He insists he didn\'t do it. And what looks like a supernatural assault straight out of a horror film turns out to be-well, something quite close to that, as Harry discovers that malevolent entities that feed on fear are loose in Chicago.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Relinquary
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title_display' => 'Reliquary',
            'title_alphabetic' => 'Relinquary',
            'slug' => 'relinquary',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // Rouge Lawyer
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Rogue Lawyer',
            'title_alphabetic' => 'Rogue Lawyer',
            'slug' => 'rogue-lawyer',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Grisham')->first()->id);

        // Sabriel
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Sabriel',
            'title_alphabetic' => 'Sabriel',
            'slug' => 'sabriel',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 2,
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        // Shadows for Silence in the Forest of Hell
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Shadows for Silence In the Forests of Hell',
            'title_alphabetic' => 'Shadows for Silence In the Forests of Hell',
            'slug' => 'shadows-for-silence-in-the-forests-of-hell',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Shadows of Self
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Shadows of Self',
            'title_alphabetic' => 'Shadows of Self',
            'slug' => 'shadows-of-self',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Side Jobs
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Side Jobs',
            'title_alphabetic' => 'Side Jobs',
            'slug' => 'side-jobs',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 99,
            'description' => 'The first short story collection in the #1 New York Times bestselling series-including a brand-new Harry Dresden novella!

Here, together for the first time, are the shorter works of #1 New York Times bestselling author Jim Butcher-a compendium of cases that Harry and his cadre of allies managed to close in record time. The tales range from the deadly serious to the absurdly hilarious. Also included is a new, never-before-published novella that takes place after the cliff-hanger ending of the new April 2010 hardcover, Changes. This is a must-have collection for every devoted Harry Dresden fan as well as a perfect introduction for readers ready to meet Chicago\'s only professional wizard.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // The Skull Throne
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Skull Throne',
            'title_alphabetic' => 'Skull Throne, The',
            'slug' => 'the-skull-throne',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 4,
            'description' => '<p>The first three novels in Peter V. Brettâ€™s groundbreaking Demon Cycle seriesâ€”The Warded Man, The Desert Spear, and The Daylight Warâ€”set a new standard for heroic fantasy. The powerful saga of humans winnowed to the brink of extinction by night-stalking demons, and the survivors who fight back, has kept readers breathless as they eagerly turned the pages. Now the thrilling fourth volume, The Skull Throne, raises the stakes as it carries the action in shocking new directions.</p>

<p>The Skull Throne of Krasia stands empty.</p>

<p>Built from the skulls of fallen generals and demon princes, it is a seat of honor and ancient, powerful magic, keeping the demon corelings at bay. From atop the throne, Ahmann Jardir was meant to conquer the known world, forging its isolated peoples into a unified army to rise up and end the demon war once and for all.</p>

<p>But Arlen Bales, the Warded Man, stood against this course, challenging Jardir to a duel he could not in honor refuse. Rather than risk defeat, Arlen cast them both from a precipice, leaving the world without a savior, and opening a struggle for succession that threatens to tear the Free Cities of Thesa apart.</p>

<p>In the south, Inevera, Jardirâ€™s first wife, must find a way to keep their sons from killing one another and plunging their people into civil war as they strive for glory enough to make a claim on the throne.</p>

<p>In the north, Leesha Paper and Rojer Inn struggle to forge an alliance between the duchies of Angiers and Miln against the Krasians before it is too late.</p>

<p>Caught in the crossfire is the duchy of Laktonâ€”rich and unprotected, ripe for conquest.</p>

<p>All the while, the corelings have been growing stronger, and without Arlen and Jardir there may be none strong enough to stop them. Only Renna Bales may know more about the fate of the missing men, but she, too, has disappeared...</p>',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // The Slow Regard of Silent Things
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Slow Regard of Silent Things',
            'title_alphabetic' => 'Slow Regard of Silent Things, The',
            'slug' => 'the-slow-regard-of-silent-things',
        ]);

        $b->addAuthor($authors->where('last_name', 'Rothfuss')->first()->id);

        // Small Favor
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Small Favor',
            'title_alphabetic' => 'Small Favor',
            'slug' => 'small-favor',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 10,
            'description' => 'Harry Dresden?s life finally seems to be calming down?until a shadow from the past returns. Mab, monarch of the Sidhe Winter Court, calls in an old favor from Harry?one small favor that will trap him between a nightmarish foe and an equally deadly ally, and that will strain his skills?and loyalties?to their very limits.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Soul of the Fire
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Soul of the Fire',
            'title_alphabetic' => 'Soul of the Fire',
            'slug' => 'soul-of-the-fires',
            'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
            'series_order' => 5,
        ]);

        $b->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        // Steelheart
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Steelheart',
            'title_alphabetic' => 'Steelheart',
            'slug' => 'steelheart',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Stone of Tears
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Stone of Tears',
            'title_alphabetic' => 'Stone of Tears',
            'slug' => 'stone-of-tears',
            'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
            'series_order' => 2,
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        // Storm Front
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Storm Front',
            'title_alphabetic' => 'Storm Front',
            'slug' => 'storm-front',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 1,
            'description' => 'For Harry Dresdenâ€”Chicago\'s only professional wizardâ€”business, to put it mildly, stinks. So when the police bring him in to consult on a grisly double murder committed with black magic, Harry\'s seeing dollar signs. But where there\'s black magic, there\'s a black mage behind it. And now that mage knows Harry\'s name...',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // Summer Knight
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Summer Knight',
            'title_alphabetic' => 'Summer Knight',
            'slug' => 'summer-knight',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 4,
            'description' => 'Private detective/wizard-for-hire Harry Dresden is suckered into tangling in the affairs of Faerie, where the fate of the entire world-and his soul-are at stake.',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
        
        // Sutton
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Sutton',
            'title_alphabetic' => 'Sutton',
            'slug' => 'sutton',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Moehringer')->first()->id);

        // Temple of the Winds
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Temple of the Winds',
            'title_alphabetic' => 'Temple of the Winds',
            'slug' => 'temple-of-the-winds',
            'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
            'series_order' => 4,
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        // This Savage Song
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'This Savage Song',
            'title_alphabetic' => 'This Savage Song',
            'slug' => 'this-savage-song',
        ]);

        $b->addAuthor($authors->where('last_name', 'Schwab')->first()->id);
        
        // A Thousand Splendid Suns
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'A Thousand Spendid Suns',
            'title_alphabetic' => 'Thousand Splendid Suns, A',
            'slug' => 'a-thousand-splendid-suns',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Hosseini')->first()->id);

        // To Hold the Bridge
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'To Hold the Bridge',
            'title_alphabetic' => 'To Hold the Bridge',
            'slug' => 'to-hold-the-bridge',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 5,
        ]);

        $b->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        // Towers of Midnight
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Towers of Midnight',
            'title_alphabetic' => 'Towers of Midnight',
            'slug' => 'towers-of-midnight',
        ]);

        $b->addAuthor($authors->where('last_name', 'Jordan')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Turn Coat
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Turn Coat',
            'title_alphabetic' => 'Turn Coat',
            'slug' => 'turn-coat',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 11,
            'description' => 'The Warden Morgan has been accused of treason against the Wizards of the White Council-and there\'s only one final punishment for that crime. He\'s on the run, he wants his name cleared, and he needs someone with a knack for backing the underdog. Like Harry Dresden. Now, Harry must uncover a traitor within the Council, keep a less-than-agreeable Morgan under wraps, and avoid coming under scrutiny himself. And a single mistake could cost Harry his head...',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // Turtles ALl the Way Down
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Turtles All the Way Down',
            'title_alphabetic' => 'Turtles All the Way Down',
            'slug' => 'turtles-all-the-way-down',
        ]);

        $b->addAuthor($authors->where('last_name', 'Green')->first()->id);
        
        // Two Graves
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Two Graves',
            'title_alphabetic' => 'Two Graves',
            'slug' => 'two-graves',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // Unfettered
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Unfettered',
            'title_alphabetic' => 'Unfettered',
            'slug' => 'unfettered',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        // Warbreaker
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Warbreaker',
            'title_alphabetic' => 'Warbreaker',
            'slug' => 'warbreaker',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // The Warded Man
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Warded Man',
            'title_alphabetic' => 'Warded Man, The',
            'slug' => 'the-warded-man',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 1,
            'description' => '<p>As darkness falls after sunset, the corelings rise - demons who possess supernatural powers and burn with a consuming hatred of humanity.</p>

<p>For hundreds of years the demons have terrorized the night, slowly culling the human herd that shelters behind magical wards - symbols of power whose origins are lost in myth and whose protection is terrifyingly fragile. It was not always this way. Once, men and women battled the corelings on equal terms, but those days are gone. Night by night the demons grow stronger, while human numbers dwindle under their relentless assault. Now, with hope for the future fading, three young survivors of vicious demon attacks will dare the impossible, stepping beyond the crumbling safety of the wards to risk everything in a desperate quest to regain the secrets of the past. Together, they will stand against the night.</p>',
        ]);

        $b->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // Warm Bodies
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Warm Bodies',
            'title_alphabetic' => 'Warm Bodies',
            'slug' => 'warm-bodies',
        ]);

        $b->addAuthor($authors->where('last_name', 'Marion')->first()->id);
        
        // The Well of Ascension
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Well of Ascension',
            'title_alphabetic' => 'Well of Ascension, The',
            'slug' => 'the-well-of-ascension',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // White Fire
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'White Fire',
            'title_alphabetic' => 'White Fire',
            'slug' => 'white-fire',
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Preston')->first()->id);
        $b->addAuthor($authors->where('last_name', 'Child')->first()->id);

        // White Night
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'White Night',
            'title_alphabetic' => 'White Night',
            'slug' => 'white-night',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 9,
            'description' => 'Professional wizard Harry Dresden is investigating a series of deaths in Chicago. Someone is killing practitioners of magic, those incapable of becoming full-fledged wizards. Shockingly, all the evidence points to Harry\'s half-brother, Thomas, as the murderer. Determined to clear his sibling\'s name, Harry uncovers a conspiracy within the White Council of Wizards that threatens not only him, but his nearest and dearest, too...',
        ]);

        $b->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // White Sand
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'White Sand',
            'title_alphabetic' => 'White Sand',
            'slug' => 'white-sand',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
        
        // Wild
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Wild',
            'title_alphabetic' => 'Wild',
            'slug' => 'wild',
        ]);

        $b->addAuthor($authors->where('last_name', 'Strayed')->first()->id);

        // The Wise Mans Fear
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Wise Mans Fear',
            'title_alphabetic' => 'Wise Mans Fear, The',
            'slug' => 'the-wise-mans-fear',
        ]);

        $b->addAuthor($authors->where('last_name', 'Rothfuss')->first()->id);
        
        // Wizards First Rule
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Wizard\'s First Rule',
            'title_alphabetic' => 'Wizard\'s First Rule',
            'slug' => 'wizards-first-rule',
            'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
            'series_order' => 1,
        ]);
        
        $b->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);
 
        // The Woman in the Window
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'The Woman in the Window',
            'title_alphabetic' => 'Woman in the Window, The',
            'slug' => 'the-woman-in-the-window',
        ]);

        $b->addAuthor($authors->where('last_name', 'Finn')->first()->id);

        // Words of Radiance
        $b = factory('App\Models\Book')->create([
            'creator_id' => 1,
            'owner_id' => 1,	
            'title_display' => 'Words of Radiance',
            'title_alphabetic' => 'Words of Radiance',
            'slug' => 'words-of-radiance',
        ]);

        $b->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);
    }
}
