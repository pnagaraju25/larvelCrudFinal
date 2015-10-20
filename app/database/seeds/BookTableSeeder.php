<?php

class BookTableSeeder extends Seeder
{
    public function run(){
        DB::table('books')->delete();
        Books::create(array(
            'bname' =>'talha',
            'bauthor' =>'talha1',
            'bedition' =>'Eight',
            //'image'=> '',
            'p_url'=>'ajed5hrgt4y',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ));

       DB::table('books')->insert([
            'bname' =>'talha',
            'bauthor' =>'talha2',
            'bedition' =>'ten',
          // 'image'=> '',
           'p_url'=>'ajed53y56hy',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('books')->insert([
            'bname' =>'talha',
            'bauthor' =>'talha3',
            'bedition' =>'nine',
            //'image'=> '',
             'p_url'=>'ajed5hy',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}