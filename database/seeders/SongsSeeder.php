<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->queenSongs();
        $this->beatlesSongs();
        $this->nirvanaSongs();
    }

    private function queenSongs()
    {
        $song = new Song([
            'name' => 'Keep Yourself Alive',
            'length' => 226,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Doing All Right',
            'length' => 250,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Great King Rat',
            'length' => 341,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'My Fairy King',
            'length' => 247,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Liar',
            'length' => 386,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Night Comes Down',
            'length' => 264,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Modern Times Rock \'n\' Roll',
            'length' => 108,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Son and Daughter',
            'length' => 204,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Jesus',
            'length' => 225,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Seven Seas of Rhye...',
            'length' => 70,
            'album_id' => 1
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Procession',
            'length' => 72,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Father to Son',
            'length' => 374,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'White Queen (As It Began)',
            'length' => 274,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Some Day One Day',
            'length' => 263,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Loser in the End',
            'length' => 242,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ogre Battle',
            'length' => 250,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Fairy Feller\'s Master-Stroke',
            'length' => 160,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Nevermore',
            'length' => 77,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The March of the Black Queen',
            'length' => 393,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Funny How Love Is.',
            'length' => 170,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Seven Seas of Rhye',
            'length' => 170,
            'album_id' => 2
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Brighton Rock',
            'length' => 308,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Killer Queen"',
            'length' => 181,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tenement Funster',
            'length' => 168,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Flick of the Wrist"',
            'length' => 199,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lily of the Valley',
            'length' => 103,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Now I\'m Here',
            'length' => 250,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In the Lap of the Gods',
            'length' => 3*60+20,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Stone Cold Crazy',
            'length' => 2*60+12,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dear Friends',
            'length' => 60+7,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Misfire',
            'length' => 60+50,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Bring Back That Leroy Brown',
            'length' => 2*60+13,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'She Makes Me (Stormtrooper in Stilettoes)',
            'length' => 4*60+8,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In the Lap of the Gods...Revisited',
            'length' => 3*60+42,
            'album_id' => 3
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Death on Two Legs (Dedicated to...)',
            'length' => 3*60+43,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lazing on a Sunday Afternoon',
            'length' => 60+8,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I\'m in Love with My Car',
            'length' => 3*60+5,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You\'re My Best Friend',
            'length' => 2*60+50,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => '\'39',
            'length' => 3*60+30,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sweet Lady',
            'length' => 4*60+1,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Seaside Rendezvous',
            'length' => 2*60+13,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Prophet\'s Song',
            'length' => 8*60+21,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Love of My Life',
            'length' => 3*60+38,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Good Company',
            'length' => 3*60+26,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Bohemian Rhapsody',
            'length' => 5*60+55,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'God Save the Queen',
            'length' => 60+11,
            'album_id' => 4
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tie Your Mother Down',
            'length' => 4*60+48,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Take My Breath Away',
            'length' => 5*60+9,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Long Away',
            'length' => 3*60+34,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Millionaire Waltz',
            'length' => 4*60+54,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You and I',
            'length' => 3*60+25,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Somebody to Love',
            'length' => 4*60+56,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'White Man',
            'length' => 4*60+59,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Good Old-Fashioned Lover Boy',
            'length' => 2*60+54,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Drowse',
            'length' => 3*60+45,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Teo Torriatte (Let Us Cling Together)',
            'length' => 5*60+50,
            'album_id' => 5
        ]);
        $song->save();
        $song = new Song([
            'name' => 'We Will Rock You',
            'length' => 2*60+1,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'We Are the Champions',
            'length' => 2*60+59,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sheer Heart Attack',
            'length' => 3*60+26,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All Dead, All Dead',
            'length' => 3*60+10,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Spread Your Wings',
            'length' => 4*60+34,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Fight from the Inside',
            'length' => 3*60+3,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Get Down, Make Love',
            'length' => 3*60+51,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sleeping on the Sidewalk',
            'length' => 3*60+6,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Who Needs You',
            'length' => 3*60+5,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It\'s Late',
            'length' => 6*60+26,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'My Melancholy Blues',
            'length' => 3*60+29,
            'album_id' => 6
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mustapha',
            'length' => 3*60+3,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Fat Bottomed Girls',
            'length' => 4*60+14,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Jealousy',
            'length' => 3*60+14,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Bicycle Race',
            'length' => 3*60+4,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'If You Can\'t Beat Them',
            'length' => 4*60+15,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Let Me Entertain You',
            'length' => 3*60+1,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dead on Time',
            'length' => 3*60+23,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In Only Seven Days',
            'length' => 2*60+30,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dreamer\'s Ball',
            'length' => 3*60+30,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Fun It',
            'length' => 3*60+29,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Leaving Home Ain\'t Easy',
            'length' => 3*60+15,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don\'t Stop Me Now',
            'length' => 3*60+29,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'More of That Jazz',
            'length' => 4*60+12,
            'album_id' => 7
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Play the Game',
            'length' => 3*60+30,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dragon Attack',
            'length' => 4*60+18,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Another One Bites the Dust',
            'length' => 3*60+35,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Need Your Loving Tonight',
            'length' => 2*60+50,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Crazy Little Thing Called Love',
            'length' => 2*60+42,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Rock It (Prime Jive)',
            'length' => 4*60+33,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don\'t Try Suicide',
            'length' => 3*60+52,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sail Away Sweet Sister',
            'length' => 3*60+33,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Coming Soon',
            'length' => 2*60+51,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Save Me',
            'length' => 3*60+48,
            'album_id' => 8
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Flash\'s Theme',
            'length' => 3*60+31,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In the Space Capsule (The Love Theme)',
            'length' => 2*60+43,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ming\'s Theme (In the Court of Ming the Merciless)',
            'length' => 2*60+41,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Ring (Hypnotic Seduction of Dale)',
            'length' => 57,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Football Fight',
            'length' => 88,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In the Death Cell (Love Theme Reprise)',
            'length' => 2*60+25,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Execution of Flash',
            'length' => 66,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Kiss (Aura Resurrects Flash)',
            'length' => 105,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Arboria (Planet of the Tree Men)',
            'length' => 102,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Escape from the Swamp',
            'length' => 103,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Flash to the Rescue',
            'length' => 2*60+44,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Vultan\'s Theme (Attack of the Hawk Men)',
            'length' => 73,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Battle Theme',
            'length' => 2*60+18,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Wedding March',
            'length' => 56,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Marriage of Dale and Ming (And Flash Approaching)',
            'length' => 2*60+4,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Crash Dive on Mingo City',
            'length' => 60,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Flash\'s Theme Reprise (Victory Celebrations)',
            'length' => 84,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Hero',
            'length' => 3*60+31,
            'album_id' => 9
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Staying Power',
            'length' => 4*60+11,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dancer',
            'length' => 3*60+49,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Back Chat',
            'length' => 4*60+35,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Body Language',
            'length' => 4*60+32,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Action This Day',
            'length' => 3*60+32,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Put Out the Fire',
            'length' => 3*60+19,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Life Is Real (Song for Lennon)',
            'length' => 3*60+32,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Calling All Girls',
            'length' => 3*60+51,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Las Palabras de Amor (The Words of Love)',
            'length' => 4*60+31,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Cool Cat',
            'length' => 3*60+29,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Under Pressure',
            'length' => 4*60+6,
            'album_id' => 10
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Radio Ga Ga',
            'length' => 5*60+48,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tear It Up',
            'length' => 3*60+28,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It\'s a Hard Life',
            'length' => 4*60+8,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Man on the Prowl',
            'length' => 3*60+28,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Machines (or \'Back to Humans\')',
            'length' => 5*60+10,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Want to Break Free',
            'length' => 3*60+20,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Keep Passing the Open Windows',
            'length' => 5*60+21,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Hammer to Fall',
            'length' => 4*60+28,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Is This the World We Created...?',
            'length' => 2*60+13,
            'album_id' => 11
        ]);
        $song->save();
        $song = new Song([
            'name' => 'One Vision',
            'length' => 5*60+11,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'A Kind of Magic',
            'length' => 4*60+24,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'One Year of Love',
            'length' => 4*60+27,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Pain Is So Close to Pleasure',
            'length' => 4*60+21,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Friends Will Be Friends',
            'length' => 4*60+6,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Who Wants to Live Forever',
            'length' => 5*60+15,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Gimme the Prize (Kurgan\'s Theme)',
            'length' => 4*60+33,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don\'t Lose Your Head',
            'length' => 4*60+38,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Princes of the Universe',
            'length' => 3*60+33,
            'album_id' => 12
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Party',
            'length' => 2*60+24,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Khashoggi\'s Ship',
            'length' => 2*60+47,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Miracle',
            'length' => 5*60+2,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Want It All',
            'length' => 4*60+41,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Invisible Man',
            'length' => 3*60+55,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Breakthru',
            'length' => 4*60+7,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Rain Must Fall',
            'length' => 4*60+20,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Scandal',
            'length' => 4*60+42,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'My Baby Does Me',
            'length' => 3*60+22,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Was It All Worth It',
            'length' => 5*60+45,
            'album_id' => 13
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Innuendo',
            'length' => 6*60+31,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I\'m Going Slightly Mad',
            'length' => 4*60+22,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Headlong',
            'length' => 4*60+38,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Can\'t Live with You',
            'length' => 4*60+33,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don\'t Try So Hard',
            'length' => 3*60+39,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ride the Wild Wind',
            'length' => 4*60+42,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All God\'s People',
            'length' => 4*60+21,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'These Are the Days of Our Lives',
            'length' => 4*60+15,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Delilah',
            'length' => 3*60+35,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Hitman',
            'length' => 4*60+56,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Bijou',
            'length' => 3*60+36,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Show Must Go On',
            'length' => 4*60+35,
            'album_id' => 14
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It\'s a Beautiful Day',
            'length' => 2*60+32,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Made in Heaven',
            'length' => 5*60+25,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yeah',
            'length' => 4*60+45,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mother Love',
            'length' => 4*60+49,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'My Life Has Been Saved',
            'length' => 3*60+15,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Was Born to Love You',
            'length' => 4*60+49,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Heaven for Everyone',
            'length' => 5*60+36,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Too Much Love Will Kill You',
            'length' => 4*60+20,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Don\'t Fool Me',
            'length' => 5*60+24,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'A Winter\'s Tale',
            'length' => 3*60+49,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It\'s a Beautiful Day',
            'length' => 3*60+1,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yeah',
            'length' => 4,
            'album_id' => 15
        ]);
        $song->save();
        $song = new Song([
            'name' => '13',
            'length' => 22*60+32,
            'album_id' => 15
        ]);
        $song->save();

    }

    private function beatlesSongs()
    {
        $song = new Song([
            'name' => 'I Saw Her Standing There',
            'length' => 2*60+54,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Misery',
            'length' => 110,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Anna (Go to Him)',
            'length' => 2*60+57,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Chains',
            'length' => 2*60+23,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Boys',
            'length' => 2*60+27,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ask Me Why',
            'length' => 2*60+27,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Please Please Me',
            'length' => 119,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Love Me Do',
            'length' => 2*60+18,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'P.S. I Love You',
            'length' => 2*60+5,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Baby It’s You',
            'length' => 2*60+38,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Do You Want to Know a Secret?',
            'length' => 119,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'A Taste of Honey',
            'length' => 2*60+5,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'There’s a Place',
            'length' => 112,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Twist and Shout',
            'length' => 2*60+32,
            'album_id' => 16
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It Won’t Be Long',
            'length' => 2*60+9,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All I’ve Got to Do',
            'length' => 2*60+3,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All My Loving',
            'length' => 2*60+6,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don’t Bother Me',
            'length' => 2*60+24,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Little Child',
            'length' => 104,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Till There Was You',
            'length' => 2*60+14,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Please Mr. Postman',
            'length' => 2*60+34,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Roll Over Beethoven',
            'length' => 2*60+44,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Hold Me Tight',
            'length' => 2*60+32,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Really Got a Hold on Me',
            'length' => 2*60+59,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Wanna Be Your Man',
            'length' => 118,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Devil in Her Heart',
            'length' => 2*60+26,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Not a Second Time',
            'length' => 2*60+7,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Money (That’s What I Want)',
            'length' => 2*60+50,
            'album_id' => 17
        ]);
        $song->save();
        $song = new Song([
            'name' => 'A Hard Day’s Night',
            'length' => 2*60+33,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Should Have Known Better',
            'length' => 2*60+39,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'If I Fell',
            'length' => 2*60+18,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’m Happy Just to Dance with You',
            'length' => 2*60,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'And I Love Her',
            'length' => 2*60+29,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tell Me Why',
            'length' => 2*60+9,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Can’t Buy Me Love',
            'length' => 2*60+15,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Any Time at All',
            'length' => 2*60+11,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’ll Cry Instead',
            'length' => 103,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Things We Said Today',
            'length' => 2*60+35,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'When I Get Home',
            'length' => 2*60+17,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Can’t Do That',
            'length' => 2*60+33,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’ll Be Back',
            'length' => 2*60+24,
            'album_id' => 18
        ]);
        $song->save();
        $song = new Song([
            'name' => 'No Reply',
            'length' => 2*60+15,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’m a Loser',
            'length' => 2*60+28,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Baby’s in Black',
            'length' => 2*60+7,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Rock and Roll Music',
            'length' => 2*60+33,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’ll Follow the Sun',
            'length' => 113,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mr. Moonlight',
            'length' => 2*60+33,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Kansas City/Hey-Hey-Hey-Hey!',
            'length' => 2*60+33,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Eight Days a Week',
            'length' => 2*60+45,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Words of Love',
            'length' => 2*60+12,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Honey Don’t',
            'length' => 2*60+55,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Every Little Thing',
            'length' => 2*60+1,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Don’t Want to Spoil the Party',
            'length' => 2*60+33,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'What You’re Doing',
            'length' => 2*60+30,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Everybody’s Trying to Be My Baby',
            'length' => 2*60+23,
            'album_id' => 19
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Help!',
            'length' => 2*60+16,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Night Before',
            'length' => 2*60+30,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You’ve Got to Hide Your Love Away',
            'length' => 2*60+6,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Need You',
            'length' => 2*60+25,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Another Girl',
            'length' => 2*60+2,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Help!',
            'length' => 2*60+17,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ticket to Ride',
            'length' => 3*60+2,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Act Naturally',
            'length' => 2*60+33,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It’s Only Love',
            'length' => 114,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Like Me Too Much',
            'length' => 2*60+35,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tell Me What You See',
            'length' => 2*60+36,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’ve Just Seen a Face',
            'length' => 2*60+4,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yesterday',
            'length' => 2*60+3,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dizzy Miss Lizzy',
            'length' => 2*60+53,
            'album_id' => 20
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Drive My Car',
            'length' => 2*60+25,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Norwegian Wood (This Bird Has Flown)',
            'length' => 2*60+1,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Won’t See Me',
            'length' => 3*60+18,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Nowhere Man',
            'length' => 2*60+40,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Think for Yourself',
            'length' => 2*60+16,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Word',
            'length' => 2*60+41,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Michelle',
            'length' => 2*60+33,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'What Goes On',
            'length' => 2*60+41,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Girl',
            'length' => 2*60+30,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’m Looking Through You',
            'length' => 2*60+23,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In My Life',
            'length' => 2*60+24,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Wait',
            'length' => 2*60+12,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'If I Needed Someone',
            'length' => 2*60+20,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Run for Your Life',
            'length' => 2*60+18,
            'album_id' => 21
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Taxman',
            'length' => 2*60+39,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Eleanor Rigby',
            'length' => 2*60+7,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’m Only Sleeping',
            'length' => 2*60+56,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Love You To',
            'length' => 3*60+1,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Here, There and Everywhere',
            'length' => 2*60+25,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yellow Submarine',
            'length' => 2*60+42,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'She Said, She Said',
            'length' => 2*60+37,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Good Day Sunshine',
            'length' => 2*60+9,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'And Your Bird Can Sing',
            'length' => 118,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'For No One',
            'length' => 115,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dr. Robert',
            'length' => 2*60+15,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Want to Tell You',
            'length' => 2*60+29,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Got to Get You into My Life',
            'length' => 2*60+30,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tomorrow Never Knows',
            'length' => 2*60+57,
            'album_id' => 22
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sgt. Pepper’s Lonely Hearts Club Band',
            'length' => 2*60+2,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'With a Little Help from My Friends',
            'length' => 2*60+42,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lucy in the Sky with Diamonds',
            'length' => 3*60+26,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Getting Better',
            'length' => 2*60+47,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Fixing a Hole',
            'length' => 2*60+36,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'She’s Leaving Home',
            'length' => 3*60+35,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Being for the Benefit of Mr. Kite!',
            'length' => 2*60+40,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Within You Without You',
            'length' => 5*60+5,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'When I’m Sixty Four',
            'length' => 2*60+36,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lovely Rita',
            'length' => 2*60+42,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Good Morning Good Morning',
            'length' => 2*60+41,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sgt. Pepper’s Lonely Hearts Club Band (Reprise)',
            'length' => 78,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'A Day in the Life',
            'length' => 5*60+37,
            'album_id' => 23
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Magical Mystery Tour',
            'length' => 2*60+51,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Your Mother Should Know',
            'length' => 2*60+29,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Am the Walrus',
            'length' => 4*60+32,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Fool on the Hill',
            'length' => 2*60+56,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Flying',
            'length' => 2*60+17,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Blue Jay Way',
            'length' => 3*60+55,
            'album_id' => 24
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Back in the U.S.S.R.',
            'length' => 2*60+42,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dear Prudence',
            'length' => 3*60+56,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Glass Onion',
            'length' => 2*60+17,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Ob-La-Di, Ob-La-Da',
            'length' => 3*60+8,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Wild Honey Pie',
            'length' => 52,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Continuing Story of Bungalow Bill',
            'length' => 3*60+13,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'While My Guitar Gently Weeps',
            'length' => 4*60+45,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Happiness Is a Warm Gun',
            'length' => 2*60+43,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Martha My Dear',
            'length' => 2*60+28,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I’m So Tired',
            'length' => 2*60+3,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Blackbird',
            'length' => 2*60+18,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Piggies',
            'length' => 2*60+4,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Rocky Raccoon',
            'length' => 3*60+32,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Don’t Pass Me By',
            'length' => 3*60+42,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Why Don’t We Do It in the Road?',
            'length' => 101,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Will',
            'length' => 105,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Julia',
            'length' => 2*60+54,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Birthday',
            'length' => 2*60+40,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yer Blues',
            'length' => 4*60+1,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mother Nature’s Son',
            'length' => 2*60+47,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Everybody’s Got Something to Hide Except Me and My Monkey',
            'length' => 2*60+24,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sexy Sadie',
            'length' => 3*60+15,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Helter Skelter',
            'length' => 4*60+29,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Long, Long, Long',
            'length' => 3*60+3,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Revolution 1',
            'length' => 4*60+15,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Honey Pie',
            'length' => 2*60+40,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Savoy Truffle',
            'length' => 2*60+54,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Cry Baby Cry',
            'length' => 3*60+2,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Revolution 9',
            'length' => 8*60+22,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Good Night',
            'length' => 3*60+11,
            'album_id' => 25
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yellow Submarine',
            'length' => 2*60+34,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Only a Northern Song',
            'length' => 3*60+24,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All Together Now',
            'length' => 2*60+13,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Hey Bulldog',
            'length' => 3*60+14,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'It’s All Too Much',
            'length' => 6*60+25,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All You Need Is Love',
            'length' => 3*60+44,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Pepperland',
            'length' => 2*60+21,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sea of Time',
            'length' => 3*60,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sea of Holes',
            'length' => 2*60+17,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sea of Monsters',
            'length' => 3*60+37,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'March of the Meanies',
            'length' => 2*60+22,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Pepperland Laid Waste',
            'length' => 2*60+19,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Yellow Submarine in Pepperland',
            'length' => 2*60+13,
            'album_id' => 26
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Come Together',
            'length' => 4*60+20,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Something',
            'length' => 3*60+3,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Maxwell’s Silver Hammer',
            'length' => 3*60+25,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Oh! Darling',
            'length' => 3*60+26,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Octopus’s Garden',
            'length' => 2*60+51,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Want You (She’s So Heavy)',
            'length' => 7*60+47,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Here Comes the Sun',
            'length' => 3*60+5,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Because',
            'length' => 2*60+45,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'You Never Give Me Your Money',
            'length' => 4*60+2,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sun King',
            'length' => 2*60+26,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mean Mr. Mustard',
            'length' => 66,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Polythene Pam',
            'length' => 72,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'She Came In Through the Bathroom Window',
            'length' => 117,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Golden Slumbers',
            'length' => 91,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Carry That Weight',
            'length' => 97,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The End',
            'length' => 2*60+19,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Her Majesty',
            'length' => 23,
            'album_id' => 27
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Two of Us',
            'length' => 3*60+36,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dig a Pony',
            'length' => 3*60+54,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Across the Universe',
            'length' => 3*60+48,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I Me Mine',
            'length' => 2*60+25,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dig It',
            'length' => 49,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Let It Be',
            'length' => 4*60+3,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Maggie Mae',
            'length' => 40,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'I\'ve Got a Feeling',
            'length' => 3*60+38,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'One After 909',
            'length' => 2*60+55,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'The Long and Winding Road',
            'length' => 3*60+37,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'For You Blue',
            'length' => 2*60+32,
            'album_id' => 28
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Get Back',
            'length' => 3*60+7,
            'album_id' => 28
        ]);
        $song->save();
    }

    private function nirvanaSongs()
    {
        $song = new Song([
            'name' => 'Blew',
            'length' => 2*60+55,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Floyd the Barber',
            'length' => 2*60+18,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'About a Girl',
            'length' => 2*60+48,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'School',
            'length' => 2*60+42,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Love Buzz',
            'length' => 3*60+35,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Paper Cuts',
            'length' => 4*60+5,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Negative Creep',
            'length' => 2*60+56,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Scoff',
            'length' => 4*60+10,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Swap Meet',
            'length' => 3*60+3,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Mr. Moustache',
            'length' => 3*60+24,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Sifting',
            'length' => 5*60+22,
            'album_id' => 29
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Smells Like Teen Spirit',
            'length' => 5*60+1,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'In Bloom',
            'length' => 4*60+14,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Come as You Are',
            'length' => 3*60+38,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Breed',
            'length' => 3*60+3,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lithium',
            'length' => 4*60+16,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Polly',
            'length' => 2*60+56,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Territorial Pissings',
            'length' => 2*60+22,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Drain You',
            'length' => 3*60+43,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Lounge Act',
            'length' => 2*60+36,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Stay Away',
            'length' => 3*60+32,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'On a Plain',
            'length' => 3*60+16,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Something in the Way',
            'length' => 3*60+50,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Endless, Nameless',
            'length' => 6*60+44,
            'album_id' => 30
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Serve the Servants',
            'length' => 3*60+36,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Scentless Apprentice',
            'length' => 3*60+48,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Heart-Shaped Box',
            'length' => 4*60+41,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Rape Me',
            'length' => 2*60+50,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Frances Farmer Will Have Her Revenge on Seattle',
            'length' => 4*60+9,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Dumb',
            'length' => 2*60+32,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Very Ape',
            'length' => 116,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Milk It',
            'length' => 3*60+55,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Pennyroyal Tea',
            'length' => 3*60+37,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Radio Friendly Unit Shifter',
            'length' => 4*60+51,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Tourette’s',
            'length' => 95,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'All Apologies',
            'length' => 3*60+51,
            'album_id' => 31
        ]);
        $song->save();
        $song = new Song([
            'name' => 'Gallons of Rubbing Alcohol Flow Through the Strip',
            'length' => 7*60+28,
            'album_id' => 31
        ]);
        $song->save();
    }
}
