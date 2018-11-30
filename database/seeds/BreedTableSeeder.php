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
            'history' => 'The Siberian Husky is a medium size
             working dog breed that originated in Northeast Asia.
              The breed belongs to the Spitz genetic family. With
               proper training, they make great home pets and sled dogs.
                It is recognizable by its thickly furred double coat,
                 erect triangular ears, and distinctive markings.',
            'behaviour' => 'Outgoing, Alert, Intelligent, Friendly, Gentle',
            'img_link' => Storage::url('public/images/breeds/husky.jpg'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('breeds')->insert([
            'breed' => 'Pit bull',
            'height' => 0.49,
            'weight' => 21,
            'history' => 'Pit bull is the common name for a
             type of dog descended from bulldogs and terriers.
              Formal breeds often considered to be of the pit bull
               type include the American Pit Bull Terrier, American
                Staffordshire Terrier, American Bully, and Staffordshire Bull
                 Terrier. The American Bulldog is also sometimes included.
                 Mixed-breed dogs which physically resemble these breeds often
                  get labelled as "pit bulls" by shelters. Many of these breeds
                   were originally developed as fighting dogs from cross breeding
                    bull-baiting dogs (used to hold the faces and heads of larger animals
                     such as bulls) and terriers. After the use of dogs in blood sports was
                      banned, such dogs were used as catch dogs in the United States for semi-wild
                       cattle and hogs, to hunt and drive livestock, and as family companions.
                        Despite dog fighting now being illegal in the United States, it still
                         exists as an underground activity, and pit bulls are a common type used.

                          Owners of pit bull-type dogs deal with a strong breed stigma, however controlled studies
                           have not identified this breed group as disproportionately dangerous. Some jurisdictions
                            have enacted legislation banning the group of breeds, and some insurance companies do not
                             cover liability from pit bull bites. Among other roles, pit bulls have served as police dogs,
                              search and rescue dogs, and several have appeared on film.',
            'behaviour' => 'Loyal, Strong-willed, Stubborn, Obedient, Courageous',
            'img_link' => Storage::url('public/images/breeds/pitbull.jpg'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('breeds')->insert([
            'breed' => 'German Shepherd',
            'height' => 0.6,
            'weight' => 31,
            'history' => "The German Shepherd is a breed of medium to large-sized working dog that originated in Germany. 
            In the English language, the breed's officially recognized name is German Shepherd Dog.
             The breed is known as the Alsatian in Britain and Ireland.",
            'behaviour' => 'Active, Self-assured, Intelligent, Curious, Protective',
            'img_link' => Storage::url('public/images/breeds/germanshepherd.jpg'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}