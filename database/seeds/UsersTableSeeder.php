<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dan Niculae',
            'email' => 'danniculae@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Ivan Germanov',
            'email' => 'ivangermanov@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'country' => 'Bulgaria',
            'breed' => 'Pitbull',
            'description' => '<p><b>Dogs</b> (<i>Canis lupus familiaris</i>) are <a href="/wiki/Domestication" title="Domestication">domesticated</a> <a href="/wiki/Mammal" title="Mammal">mammals</a>, not natural wild animals. They were originally <a href="/wiki/Artificial_selection" title="Artificial selection">bred</a> from <a href="/wiki/Wolf" class="mw-redirect" title="Wolf">wolves</a>. They have been bred by humans for a long time, and were the first animals ever to be domesticated.  
            </p>

            <p>Today,  some dogs are used as <a href="/wiki/Pet" title="Pet">pets</a>, others are used to help humans do their work. They are a popular pet because they are usually playful, friendly, loyal and listen to humans. Thirty million dogs in the <a href="/wiki/United_States" title="United States">United States</a> are <a href="https://simple.wiktionary.org/wiki/register" class="extiw" title="wikt:register">registered</a> as <a href="/wiki/Pet" title="Pet">pets</a>.<sup id="cite_ref-4" class="reference"><a href="#cite_note-4"></a></sup> Dogs eat both <a href="/wiki/Meat" title="Meat">meat</a> and <a href="/wiki/Vegetable" title="Vegetable">vegetables</a>, often mixed together and sold in stores as dog <a href="/wiki/Food" title="Food">food</a>. Dogs often have jobs, including as police dogs, army dogs, assistance dogs, fire dogs, messenger dogs, hunting dogs, herding dogs, or rescue dogs.  
            </p>
            
            <p>They are sometimes called "canines" from the <a href="/wiki/Latin_language" class="mw-redirect" title="Latin language">Latin</a> word for dog - <i>canis</i>. Sometimes people also use "dog" to describe other <a href="/wiki/Canid" class="mw-redirect" title="Canid">canids</a>, such as <a href="/wiki/Wolf" class="mw-redirect" title="Wolf">wolves</a>. A baby dog is called a <b>pup</b> or <b>puppy</b>. A dog is called a puppy until it is about one year old.
            </p>',
            'dob' => '1998-01-11',
            'last_online' => '2018-12-12 17:37:10',
            'role'=>'2',
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts2@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts3@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurt4@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts5@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts6@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts7@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts8@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts9@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts0@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts11@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts12@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts13@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts14@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts15@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts16@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'last_online' => '2018-12-12 18:54:13',
            'role'=>'2'
        ]);
    }
}
