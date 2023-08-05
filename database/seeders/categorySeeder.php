<?php

namespace Database\Seeders;
use App\Models\Subcategory;
use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\New_;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i=1; $i <=20; $i++) { 
        //    category::create([
        //     'name'=>fake()->name(),
        //     'description'=>fake()->text(),
        //    ]);
        // } 

        $c = [
          'Automobiles'=>['Car','Bike','Truck','Van'],
          'Property'=>['Land','Flat','House','Rent'],
          'Electronics'=> ['TV','Computer','Mobile','Mouse','Keyboard'],
          'Accessories'=>['Belt','Watch','Ring','Purse','Button','Umbrella','Hat'],
           'Beauty'=>['Mascara','Foundation','Eye Liner','Concealer','Primer','Eye primer','Setting spray'],
           'Men'=>['Shirt','Shoes','Belt','Pant','Watch','Sunglass','Panjabi'],
           'Women'=>['Sharee','Top','Shoes','Watch','Sunglass','Pant']

        ];
        foreach ($c as $k => $v) {
           $c =new category();
           $c->name =$k;
           $c->save();
           if(count($v)){
            foreach ($v as $vv) {
                $sc = new Subcategory();
                $sc->name=$vv;
                $c->subcategories()->save($sc);
            }
           }
        }
    }
}
