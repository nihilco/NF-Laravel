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

        $b1 = factory('App\Models\Book')->create([
	    'title' => 'Beyond the Ice Limit',
	    'description' => '',
	]);

        $b1->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b1->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b2 = factory('App\Models\Book')->create([
	    'title' => 'The Obsidian Chamber',
	    'description' => '',
	]);

	$b2->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b2->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b5 = factory('App\Models\Book')->create([
	    'title' => 'Arcanum Unbound',
	    'description' => '',
	]);
	
        $b5->addAuthor($authors->where('last_name', 'Sanderson')->first()->id);

        $b7 = factory('App\Models\Book')->create([
	    'title' => 'Reliquary',
	    'description' => '',
	]);

	$b7->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b7->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b9 = factory('App\Models\Book')->create([
	    'title' => 'Sutton',
	    'description' => '',
	]);

        $b9->addAuthor($authors->where('last_name', 'Moehringer')->first()->id);

        $b10 = factory('App\Models\Book')->create([
	    'title' => 'White Fire',
            'description' => '',
        ]);

	$b10->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b10->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b11 = factory('App\Models\Book')->create([
            'title' => 'Blue Labyrinth',
            'description' => '',
        ]);

	$b11->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b11->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b12 = factory('App\Models\Book')->create([
            'title' => 'Two Graves',
	    'description' => '',
	]);

	$b12->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b12->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b13 = factory('App\Models\Book')->create([
	    'title' => 'Cross the Line',
	    'description' => '',
	]);

        $b13->addAuthor($authors->where('last_name', 'Patterson')->first()->id);

        $b14 = factory('App\Models\Book')->create([
	    'title' => 'No Man\'s Land',
	    'description' => '',
	]);

        $b14->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        $b15 = factory('App\Models\Book')->create([
	    'title' => 'The Guilty',
	    'description' => '',
	]);

        $b15->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        $b17 = factory('App\Models\Book')->create([
	    'title' => 'The Escape',
	    'description' => '',
	]);

        $b17->addAuthor($authors->where('last_name', 'Baldacci')->first()->id);

        $b18 = factory('App\Models\Book')->create([
	    'title' => 'Rogue Lawyer',
	    'description' => '',
	]);

        $b18->addAuthor($authors->where('last_name', 'Grisham')->first()->id);

        $b19 = factory('App\Models\Book')->create([
	    'title' => 'Go Set A Watchman',
	    'description' => '',
	]);

        $b19->addAuthor($authors->where('last_name', 'Lee')->first()->id);

        $b20 = factory('App\Models\Book')->create([
	    'title' => 'Hatching Twitter',
	    'description' => '',
	]);

        $b20->addAuthor($authors->where('last_name', 'Bilton')->first()->id);

        $b21 = factory('App\Models\Book')->create([
	    'title' => 'Guns, Germs, and Steel',
	    'description' => '',
	]);

        $b21->addAuthor($authors->where('last_name', 'Diamond')->first()->id);

        $b23 = factory('App\Models\Book')->create([
	    'title' => 'London Bridges',
	    'description' => '',
	]);

        $b23->addAuthor($authors->where('last_name', 'Patterson')->first()->id);

        $b25 = factory('App\Models\Book')->create([
	    'title' => 'Armada',
	    'description' => '',
	]);

        $b25->addAuthor($authors->where('last_name', 'Cline')->first()->id);

        $b27 = factory('App\Models\Book')->create([
	    'title' => 'The Maze Runner',
	    'description' => '',
	]);

        $b27->addAuthor($authors->where('last_name', 'Dashner')->first()->id);

        $b28 = factory('App\Models\Book')->create([
	    'title' => 'The Eye of Mnids',
	    'description' => '',
	]);

        $b28->addAuthor($authors->where('last_name', 'Dashner')->first()->id);

        $b29 = factory('App\Models\Book')->create([
	    'title' => 'The Human Division',
	    'description' => '',
	]);

        $b29->addAuthor($authors->where('last_name', 'Scalzi')->first()->id);

        $b30 = factory('App\Models\Book')->create([
	    'title' => 'A Gentleman in Moscow',
	    'description' => '',
	]);

        $b30->addAuthor($authors->where('last_name', 'Towels')->first()->id);

        $b31 = factory('App\Models\Book')->create([
	    'title' => 'The Lost Island',
	    'description' => '',
	]);

	$b31->addAuthor($authors->where('last_name', 'Preston')->first()->id);
	$b31->addAuthor($authors->where('last_name', 'Child')->first()->id);

        $b32 = factory('App\Models\Book')->create([
	    'title' => 'The Kraken Poject',
	    'description' => '',
	]);

	$b32->addAuthor($authors->where('last_name', 'Preston')->first()->id);

        $b33 = factory('App\Models\Book')->create([
	    'title' => 'Finders Keepers',
	    'description' => '',
	]);

        $b33->addAuthor($authors->where('last_name', 'King')->first()->id);

        $b35 = factory('App\Models\Book')->create([
	    'title' => 'A Thousand Spendid Suns',
	    'description' => '',
	]);

        $b35->addAuthor($authors->where('last_name', 'Hosseini')->first()->id);

        $b36 = factory('App\Models\Book')->create([
	    'title' => 'Half the World',
	    'description' => '',
	]);

        $b36->addAuthor($authors->where('last_name', 'Abercrombie')->first()->id);

        // Sword of Truth Series
	$b37 = factory('App\Models\Book')->create([
	    'title' => 'Wizard\'s First Rule',
	    'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
	    'series_order' => 1,
	    'description' => '',
	]);

        $b37->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        $b38 = factory('App\Models\Book')->create([
	    'title' => 'Stone of Tears',
	    'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
	    'series_order' => 2,
	    'description' => '',
	]);

        $b38->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        $b39 = factory('App\Models\Book')->create([
	    'title' => 'Blood of the Fold',
	    'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
	    'series_order' => 3,
	    'description' => '',
	]);

        $b39->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        $b40 = factory('App\Models\Book')->create([
	    'title' => 'Temple of the Winds',
	    'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
	    'series_order' => 4,
	    'description' => '',
	]);

        $b40->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        $b41 = factory('App\Models\Book')->create([
	    'title' => 'Soul of the Fire',
	    'series_id' => $series->where('name', 'The Sword of Truth')->first()->id,
	    'series_order' => 5,
	    'description' => '',
	]);

        $b41->addAuthor($authors->where('last_name', 'Goodkind')->first()->id);

        // The Demon Cycle
	$b42 = factory('App\Models\Book')->create([
	    'title' => 'The Warded Man',
	    'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
	    'series_order' => 1,
	    'description' => '<p><strong>As darkness falls after sunset, the corelings riseâ€”demons who possess supernatural powers and burn with a consuming hatred of humanity.</strong></p>

<p>For hundreds of years the demons have terrorized the night, slowly culling the human herd that shelters behind magical wardsâ€”symbols of power whose origins are lost in myth and whose protection is terrifyingly fragile. It was not always this way. Once, men and women battled the corelings on equal terms, but those days are gone. Night by night the demons grow stronger, while human numbers dwindle under their relentless assault. Now, with hope for the future fading, three young survivors of vicious demon attacks will dare the impossible, stepping beyond the crumbling safety of the wards to risk everything in a desperate quest to regain the secrets of the past. Together, they will stand against the night.</p>',
        ]);

        $b42->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b43 = factory('App\Models\Book')->create([
            'title' => 'The Great Bazaar',
            'description' => '<p>Humanity has been brought to the brink of extinction. Each night the world is overrun by demons - bloodthirsty creatures of nightmare that have been hunting and killing humanity for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once-proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that anyone has been able to survive.</p.

<p>A handful of Messengers brave the night to keep the lines of communication open among the increasingly isolated populace. But there was a time when the demons were not so bold. A time when wards did more than hold the demons at bay: They allowed man to fight back, and to win.</p>

<p>Messenger Arlen Bales will search anywhere, dare anything, to return this magic to the world. Abban, a merchant in the Great Bazaar of Krasia, purports to sell everything a man\'s heart could desire, including, perhaps, the key to Arlen\'s quest.</p>',
        ]);

        $b43->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b44 = factory('App\Models\Book')->create([
            'title' => 'The Desert Spear',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 2,
            'description' => '<p>The sun is setting on humanity. The night now belongs to voracious demons that prey upon a dwindling population forced to cower behind half-forgotten symbols of power. Legends tell of a Deliverer: a general who once bound all mankind into a single force that defeated the demons. But is the return of the Deliverer just another myth? Perhaps not. Out of the desert rides Ahmann Jardir, who has forged the desert tribes into a demon-killing army. He has proclaimed himself Sharâ€™Dama Ka, the Deliverer, and he carries ancient weaponsâ€”a spear and a crownâ€”that give credence to his claim. But the Northerners claim their own Deliverer: the Warded Man, a dark, forbidding figure. Once, the Sharâ€™Dama Ka and the Warded Man were friends. Now they are fierce adversaries. Yet as old allegiances are tested and fresh alliances forged, all are unaware of the appearance of a new breed of demon, more intelligentâ€”and deadlyâ€”than any that have come before.</p>',
        ]);

        $b44->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b45 = factory('App\Models\Book')->create([
            'title' => 'Brayan\'s Gold',
            'description' => '<p>Return to the world of The Warded Man and The Desert Spear in an illustrated new novella by Peter V. Brett.</p>

<p>Humanity has been brought to the brink of extinction. Each night, the world is overrun by demons bloodthirsty creatures of nightmare that have been hunting the surface for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that they survive. A handful of Messengers brave the night to keep the lines of communication open between the increasingly isolated populace.</p>

<p>Arlen Bales is seventeen, an apprentice Messenger in brand new armor, about to go out for the first time alongside a trained Messenger on a simple overnight trip. Instead Arlen finds himself alone on a frozen mountainside, carrying a dangerous cargo to Count Brayan\'s gold mine, one of the furthest points in the duchy. And One Arm, the giant rock demon, hunts him still.</p>

<p>But Brayan\'s Gold may offer a way for Arlen to be free of One Arm forever, if he is willing to wager his life on the chance.</p>',
        ]);

        $b45->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b46 = factory('App\Models\Book')->create([
            'title' => 'Daylight War',
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

        $b46->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b47 = factory('App\Models\Book')->create([
            'title' => 'Messenger\'s Legacy',
            'description' => '<p>Humanity has been brought to the brink of extinction. Each night, the world is overrun by demons--bloodthirsty creatures of nightmare that have been hunting the surface for over 300 years. A scant few hamlets and half-starved city-states are all that remain of a once proud civilization, and it is only by hiding behind wards, ancient symbols with the power to repel the demons, that they survive. A handful of Messengers brave the night to keep the lines of communication open between the increasingly isolated populace.</p>

<p>Briar Damaj is a boy of six in the small village of Bogton. Half-Krasian, the village children call him Mudboy for his dark skin. When tragedy strikes, Briar decides the town is better off without him, fleeing into the bog with nothing but his wits and a bit of herb lore to protect him.</p>

<p>After twenty years, Ragen Messenger has agreed to retire and pass on his route to his protÃ©gÃ©, Arlen Bales. But for all that he\'s earned the rest, he has no idea what to do with the rest of his life. When he learns Briar, the son of an old friend, is missing, Ragen is willing to risk any danger to bring him safely home.</p>',
        ]);

        $b47->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b48 = factory('App\Models\Book')->create([
            'title' => 'The Skull Throne',
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

        $b48->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b49 = factory('App\Models\Book')->create([
            'title' => 'The Core',
            'series_id' => $series->where('name', 'The Demon Cycle')->first()->id,
            'series_order' => 5,
            'description' => 'New York Times bestselling author Peter V. Brett brings one of the most imaginative fantasy sagas of the twenty-first century to an epic close.

For time out of mind, bloodthirsty demons have stalked the night, culling the human race to scattered remnants dependent on half-forgotten magics to protect them. Then two heroes aroseâ€”men as close as brothers, yet divided by bitter betrayal. Arlen Bales became known as the Warded Man, tattooed head to toe with powerful magic symbols that enable him to fight demons in hand-to-hand combatâ€”and emerge victorious. Jardir, armed with magically warded weapons, called himself the Deliverer, a figure prophesied to unite humanity and lead them to triumph in Sharak Kaâ€”the final war against demonkind.

But in their efforts to bring the war to the demons, Arlen and Jardir have set something in motion that may prove the end of everything they hold dearâ€”a swarm. Now the war is at hand, and humanity cannot hope to win it unless Arlen and Jardir, with the help of Arlenâ€™s wife, Renna, can bend a captured demon prince to their will and force the devious creature to lead them to the Core, where the Mother of Demons breeds an inexhaustible army.

Trusting their closest confidantes, Leesha, Inevera, Ragen, and Elissa, to rally the fractious people of the Free Cities and lead them against the swarm, Arlen, Renna, and Jardir set out on a desperate quest into the darkest depths of evilâ€”from which none of them expects to return alive.',
        ]);

        $b49->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        $b50 = factory('App\Models\Book')->create([
            'title' => 'Barren',
            'description' => '',
        ]);

        $b50->addAuthor($authors->where('last_name', 'Brett')->first()->id);

        // The Old Kingdom
        $b51 = factory('App\Models\Book')->create([
            'title' => 'Clariel',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 1,
            'description' => '',
        ]);

        $b51->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        $b52 = factory('App\Models\Book')->create([
            'title' => 'Sabriel',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 2,
            'description' => '',
        ]);

        $b52->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        $b53 = factory('App\Models\Book')->create([
            'title' => 'Lirael',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 3,
            'description' => '',
        ]);

        $b53->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        $b54 = factory('App\Models\Book')->create([
            'title' => 'Abhorsen',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 4,
            'description' => '',
        ]);

        $b54->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        $b55 = factory('App\Models\Book')->create([
            'title' => 'To Hold the Bridge',
            'series_id' => $series->where('name', 'The Old Kingdom')->first()->id,
            'series_order' => 5,
            'description' => '',
        ]);

        $b55->addAuthor($authors->where('last_name', 'Nix')->first()->id);

        // The Desden Files
        $b56 = factory('App\Models\Book')->create([
           'title' => 'Storm Front',
           'series_id' => $series->where('name', 'Dresden Files')->first()->id,
           'series_order' => 1,
           'description' => 'For Harry Dresdenâ€”Chicago\'s only professional wizardâ€”business, to put it mildly, stinks. So when the police bring him in to consult on a grisly double murder committed with black magic, Harry\'s seeing dollar signs. But where there\'s black magic, there\'s a black mage behind it. And now that mage knows Harry\'s name...',
        ]);

        $b56->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b57 = factory('App\Models\Book')->create([
            'title' => 'Fool Moon',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 2,
            'description' => 'Meet Harry Dresden, Chicago\'s first (and only) Wizard P.I. Turns out the \'everyday\' world is full of strange and magical things - and most of them don\'t play well with humans. That\'s where Harry comes in.Business has been slow lately for Harry Dresden. Okay, business has been dead. Not undead - just dead. You would think Chicago would have a little more action for the only professional wizard in the phone book. But lately, Harry hasn\'t been able to dredge up any kind of work - magical or mundane. But just when it looks like he can\'t afford his next meal, a murder comes along that requires his particular brand of supernatural expertise. A brutally mutilated corpse. Strange-looking paw prints. A full moon. Take three guesses. And the first two don\'t count . . . Magic - it can get a guy killed.',
        ]);

        $b57->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b58 = factory('App\Models\Book')->create([
            'title' => 'Grave Peril',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 3,
            'description' => 'In all his years of supernatural sleuthing, Harry Dresden has never faced anything like this: the spirit world\'s gone postal. These ghosts are tormented, violent, and deadly. Someone-or something-is purposely stirring them up to wreak unearthly havoc. But why? If Harry doesn\'t figure it out soon, he could wind up a ghost himself.',
        ]);

        $b58->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b59 = factory('App\Models\Book')->create([
            'title' => 'Summer Knight',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 4,
            'description' => 'Private detective/wizard-for-hire Harry Dresden is suckered into tangling in the affairs of Faerie, where the fate of the entire world-and his soul-are at stake.',
        ]);

        $b59->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b60 = factory('App\Models\Book')->create([
            'title' => 'Death Masks',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 5,
            'description' => 'Harry Dresden, Chicago?s only practicing professional wizard, should be happy that business is pretty good for a change. But he also knows that whenever things are going good, the only way left for them to go is bad. Way bad.

Recent examples: A duel with the lethal champion of the Red Court, who must kill Harry to end the war between vampires and wizards?Hit men using Harry for target practice?The missing Shroud of Turin?and the possible involvement of Chicago?s most feared mob boss?A handless and headless corpse the Chicago police need identified?

Not to mention the return of Harry?s ex-girlfriend Susan, who?s still struggling with her semi-vampiric nature?and who seems to have a new man in her life.

Some days, it just doesn?t pay to get out of bed. No matter how much you?re charging.',
        ]);

        $b60->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b61 = factory('App\Models\Book')->create([
            'title' => 'Blood Rites',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 6,
            'description' => 'For Harry Dresden, there have been worse assignments than going undercover on the set of an adult film. Still, there\'s something more troubling than usual about his newest case. The film\'s producer believes he\'s the target of a sinister curse-but it\'s the women around him who are dying.

Harry\'s even more frustrated because he only got involved with this bizarre mystery as a favor to Thomas-his flirtatious, self-absorbed vampire acquaintance of dubious integrity. Thomas has a personal stake in the case Harry can\'t quite figure out. But Harry is about to discover that Thomas\' family tree has been hiding a shocking revelation that will change his life forever...',
        ]);

        $b61->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b62 = factory('App\Models\Book')->create([
            'title' => 'Dead Beat',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 7,
            'description' => 'Jim Butcher\'s Dresden Files novels have been compared to Harry Potter with an adult tone and attitude. Now, in his first hardcover adventure, Harry Dresden must save Chicago from black magic and necromancy-all in a day\'s work for the city\'s only professional wizard.',
        ]);

        $b62->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b63 = factory('App\Models\Book')->create([
            'title' => 'Proven Guilty',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 8,
            'description' => 'Elevated "into the front rank of urban fantasy heroes" (SF Site), professional wizard Harry Dresden is pledged to fight crime, banish evil, and outwit the masters of dark arts in the shadowy corners of Chicago.

Harry, the only wizard in the Chicago phone book, is drafted to look into rumors of black magic in the Windy City. And if that wasn\'t enough, he must help the daughter of an old friend, whose boyfriend was the only one in a room where an old man was attacked. He insists he didn\'t do it. And what looks like a supernatural assault straight out of a horror film turns out to be-well, something quite close to that, as Harry discovers that malevolent entities that feed on fear are loose in Chicago.',
        ]);

        $b63->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b64 = factory('App\Models\Book')->create([
            'title' => 'White Night',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 9,
            'description' => 'Professional wizard Harry Dresden is investigating a series of deaths in Chicago. Someone is killing practitioners of magic, those incapable of becoming full-fledged wizards. Shockingly, all the evidence points to Harry\'s half-brother, Thomas, as the murderer. Determined to clear his sibling\'s name, Harry uncovers a conspiracy within the White Council of Wizards that threatens not only him, but his nearest and dearest, too...',
        ]);

        $b64->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b65 = factory('App\Models\Book')->create([
            'title' => 'Small Favor',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 10,
            'description' => 'Harry Dresden?s life finally seems to be calming down?until a shadow from the past returns. Mab, monarch of the Sidhe Winter Court, calls in an old favor from Harry?one small favor that will trap him between a nightmarish foe and an equally deadly ally, and that will strain his skills?and loyalties?to their very limits.',
        ]);

        $b65->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b66 = factory('App\Models\Book')->create([
            'title' => 'Turn Coat',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 11,
            'description' => 'The Warden Morgan has been accused of treason against the Wizards of the White Council-and there\'s only one final punishment for that crime. He\'s on the run, he wants his name cleared, and he needs someone with a knack for backing the underdog. Like Harry Dresden. Now, Harry must uncover a traitor within the Council, keep a less-than-agreeable Morgan under wraps, and avoid coming under scrutiny himself. And a single mistake could cost Harry his head...',
        ]);

        $b66->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b67 = factory('App\Models\Book')->create([
            'title' => 'Changes',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 12,
            'description' => 'Long ago, Susan Rodriguez was Harry Dresden\'s lover-until she was attacked by his enemies, leaving her torn between her own humanity and the bloodlust of the vampiric Red Court. Susan then disappeared to South America, where she could fight both her savage gift and those who cursed her with it.

            Now Arianna Ortega, Duchess of the Red Court, has discovered a secret Susan has long kept, and she plans to use it-against Harry. To prevail this time, he may have no choice but to embrace the raging fury of his own untapped dark power. Because Harry\'s not fighting to save the world...

He\'s fighting to save his child.',
        ]);

        $b67->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b68 = factory('App\Models\Book')->create([
            'title' => 'Ghost Story',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 13,
            'description' => 'When we last left the mighty wizard detective Harry Dresden, he wasn\'t doing well. In fact, he had been murdered by an unknown assassin.

            But being dead doesn\'t stop him when his friends are in danger. Except now he has nobody, and no magic to help him. And there are also several dark spirits roaming the Chicago shadows who owe Harry some payback of their own.

To save his friends-and his own soul-Harry will have to pull off the ultimate trick without any magic...

The eagerly awaited new novel in the #1 New York Times bestselling Dresden Files series.',
        ]);

        $b68->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b69 = factory('App\Models\Book')->create([
            'title' => 'Side Jobs',
            'series_id' => $series->where('name', 'Dresden Files')->first()->id,
            'series_order' => 99,
            'description' => 'The first short story collection in the #1 New York Times bestselling series-including a brand-new Harry Dresden novella!

Here, together for the first time, are the shorter works of #1 New York Times bestselling author Jim Butcher-a compendium of cases that Harry and his cadre of allies managed to close in record time. The tales range from the deadly serious to the absurdly hilarious. Also included is a new, never-before-published novella that takes place after the cliff-hanger ending of the new April 2010 hardcover, Changes. This is a must-have collection for every devoted Harry Dresden fan as well as a perfect introduction for readers ready to meet Chicago\'s only professional wizard.',
        ]);

        $b69->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        // The Codex Alera
        $b70 = factory('App\Models\Book')->create([
            'title' => 'Furies of Calderon',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 1,
            'description' => 'In the realm of Alera, where people bond with the furies-elementals of earth, air, fire, water, and metal-fifteen-year-old Tavi struggles with his lack of furycrafting. But when his homeland erupts in chaos-when rebels war with loyalists and furies clash with furies-Tavi\'s simple courage will turn the tides of war.',
        ]);

        $b70->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b71 = factory('App\Models\Book')->create([
            'title' => 'Academ\'s Fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 2,
            'description' => 'For one thousand years, the people of Alera have united against the aggressive and threatening races that inhabit the world, using their unique bond with the Furies--elementals of Earth, Air, Fire, Water, and Metal. But now, the unity of the Alerians hangs in precarious balance. The First Lord of Alera has fallen in his efforts to protect his people from the vicious attacks of their enemies. Now, the fate of the Alerians lies in the hands of Tavi, a young man who must use all of his courage and resourcefulness to save his people--and himself.',
        ]);

        $b71->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b72 = factory('App\Models\Book')->create([
            'title' => 'Cursor\'s Fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 3,
            'description' => 'The power-hungry High Lord of Kalare has launched a rebellion against the aging First Lord, Gaius Sextus, who with the loyal forces of Alera must fight beside the unlikeliest of allies-the equally contentious High Lord of Aquitaine.

Meanwhile, young Tavi of Calderon joins a newly formed legion under an assumed name even as the ruthless Kalare unites with the Canim, bestial enemies of the realm whose vast numbers spell certain doom for Alera. When treachery from within destroys the army\'s command structure, Tavi finds himself leading an inexperienced, poorly equipped legion-the only force standing between the Canim horde and the war-torn realm.',
        ]);

        $b72->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b73 = factory('App\Models\Book')->create([
            'title' => 'Captain\'s Fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 4,
            'description' => 'After two years of bitter conflict with the hordes of invading Canim, Tavi of Calderon, now Captain of the First Aleran Legion, realizes that a peril far greater than the Canim exists-the terrifying Vord, who drove the savage Canim from their homeland. Now, Tavi must find a way to overcome the centuries-old animosities between Aleran and Cane if an alliance is to be forged against their mutual enemy. And he must lead his legion in defiance of the law, against friend and foe-before the hammerstroke of the Vord descends on them all.',
        ]);

        $b73->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b74 = factory('App\Models\Book')->create([
            'title' => 'Princeps\' Fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 5,
            'description' => 'Under Tavi of Calderon, heir to the crown, war-torn Alera rebuilds while politicians and nobles vie for power. But from the south comes news: the dreaded Vord have come to Alera. For a thousand years, Alera and her furies have withstood every enemy and survived every foe.',
        ]);

        $b74->addAuthor($authors->where('last_name', 'Butcher')->first()->id);

        $b75 = factory('App\Models\Book')->create([
            'title' => 'First Lord\'s Fury',
            'series_id' => $series->where('name', 'The Codex Alera')->first()->id,
            'series_order' => 6,
            'description' => 'For Gaius Octavian, life has been one long battle. Now, the end of all he fought for is close at hand. The brutal, dreaded Vord are on the march against Alera. And perhaps for the final time, Gaius Octavian and his legions must stand against the enemies of his people. And it will take all his intelligence, ingenuity, and furycraft to save their world from eternal darkness.',
        ]);

        $b75->addAuthor($authors->where('last_name', 'Butcher')->first()->id);
	
    }
}
