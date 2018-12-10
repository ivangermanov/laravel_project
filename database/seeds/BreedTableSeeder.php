<?php

use Illuminate\Database\Seeder;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            'breed' => 'Siberian Husky',
            'height' => 0.55,
            'weight' => 22,
            'history' => 'The Siberian Husky is a medium size working dog breed that originated in Northeast Asia. The breed belongs to the Spitz genetic family. With proper training, they make great home pets and sled dogs. It is recognizable by its thickly furred double coat, erect triangular ears, and distinctive markings.',
            'traits' => 'Outgoing, Alert, Intelligent, Friendly, Gentle',
            'img_link' => Storage::url('public/images/breeds/husky.jpg'),
            'author' => 'Ivan Germanov',
            'created_at' => '2017-06-30 19:22:35',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Pit bull',
            'height' => 0.49,
            'weight' => 21,
            'history' => 'Pit bull is the common name for a type of dog descended from bulldogs and terriers. Formal breeds often considered to be of the pit bull type include the American Pit Bull Terrier, American Staffordshire Terrier, American Bully, and Staffordshire Bull Terrier. The American Bulldog is also sometimes included. Mixed-breed dogs which physically resemble these breeds often get labelled as "pit bulls" by shelters. Many of these breeds were originally developed as fighting dogs from cross breeding bull-baiting dogs (used to hold the faces and heads of larger animals such as bulls) and terriers. After the use of dogs in blood sports was banned, such dogs were used as catch dogs in the United States for semi-wild cattle and hogs, to hunt and drive livestock, and as family companions. Despite dog fighting now being illegal in the United States, it still exists as an underground activity, and pit bulls are a common type used. Owners of pit bull-type dogs deal with a strong breed stigma, however controlled studies have not identified this breed group as disproportionately dangerous. Some jurisdictions have enacted legislation banning the group of breeds, and some insurance companies do not cover liability from pit bull bites. Among other roles, pit bulls have served as police dogs, search and rescue dogs, and several have appeared on film.',
            'traits' => 'Loyal, Strong-willed, Stubborn, Obedient, Courageous',
            'img_link' => Storage::url('public/images/breeds/pitbull.jpg'),
            'author' => 'Ivan Germanov',
            'visits' => 1,
            'created_at' => '2017-06-22 19:22:35',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'German Shepherd',
            'height' => 0.6,
            'weight' => 31,
            'history' => "The German Shepherd is a breed of medium to large-sized working dog that originated in Germany.  In the English language, the breed's officially recognized name is German Shepherd Dog. The breed is known as the Alsatian in Britain and Ireland.",
            'traits' => 'Active, Self-assured, Intelligent, Curious, Protective',
            'img_link' => Storage::url('public/images/breeds/germanshepherd.jpg'),
            'author' => 'Ivan Germanov',
            'visits' => 3,
            'created_at' => '2017-06-24 19:22:35',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Pomeranian',
            'height' => 0.24,
            'weight' => 2,
            'history' => "The Pomeranian (often known as a Pom) is a breed of dog of the Spitz type that is named for the Pomerania region in north-west Poland and north-east Germany in Central Europe. Classed as a toy dog breed because of its small size, the Pomeranian is descended from the larger Spitz-type dogs, specifically the German Spitz. It has been determined by the Fédération Cynologique Internationale to be part of the German Spitz breed; and in many countries, they are known as the Zwergspitz.",
            'traits' => 'Perky, Energetic, Intelligent, Alert, Barky',
            'img_link' => Storage::url('public/images/breeds/pomeranian.jpg'),
            'author' => 'Ivan Germanov',
            'created_at' => '2017-06-28 19:22:35',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Dalmatian',
            'height' => 0.58,
            'weight' => 24,
            'history' => "The Dalmatian is a breed of medium-sized dog, noted for its unique black or liver spotted coat and mainly used as a carriage dog in its early days. Its roots trace back to Croatia and its historical region of Dalmatia. Today, it is a popular family pet and many dog enthusiasts enter Dalmatians into kennel club competitions.",
            'traits' => 'Active, Energetic, Outgoing, Friendly, Intelligent',
            'img_link' => Storage::url('public/images/breeds/dalmatian.jpg'),
            'author' => 'Ivan Germanov',
            'visits' => 5,
            'created_at' => '2017-06-29 19:22:35',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Dandog',
            'height' => 0.29,
            'weight' => 10,
            'history' => "<p>The&nbsp;<em><strong>French Bulldog</strong>&nbsp;</em>is a small&nbsp;breed&nbsp;of&nbsp;domestic dog. They were the result in the 1800s of a cross between bulldog ancestors imported from&nbsp;England&nbsp;and local ratters&nbsp;in&nbsp;Paris, France.</p>\r\n\r\n<p>In 2015, they were the fourth most popular registered dog in the&nbsp;United Kingdom&nbsp;and in the&nbsp;U.S. the sixth most popular AKC registered dog breed.&nbsp;They were rated the third most popular dog in Australia in 2017.</p>",
            'traits' => 'Affectionate, Keen, Playful, Lively, Alert, Bright',
            'img_link' => Storage::url('images/breeds/ofmVPBf2BCjrXEzRKedVb2uCvFF0PHGxyP0jSGWe.jpeg'),
            'author' => 'Ivan Germanov',
            'visits' => 0,
            'created_at' => '2018-12-09 17:08:40',
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Ivandog',
            'height' => 3.00,
            'weight' => 66,
            'history' => "<p><strong>Not much is known about this mythical species. The creature is said to have roamed the earth around 500 BC and was mainly surviving by eating mammoths.&nbsp;</strong></p>",
            'traits' => 'Angry, Terrifying, BIG, Loyal',
            'img_link' => Storage::url('images/breeds/BVmrUy3wIcKrst5XUDq1jsbwal8FhDFBdcPkGt5D.jpeg'),
            'author' => 'Dan Niculae',
            'visits' => 0,
            'created_at' => '2018-12-09 17:56:35',
        ]);
    }
}
