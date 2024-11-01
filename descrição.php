<?php  

use App\Models\Item;
use illuminate\database\Seeder;

class ItemSeeder    extends Seeder

{
    public function run()

    {
        item::create([
            'name' => 'Item 01',
            'description' => 'Descrição do primeiro item'
        ]);

        item::create([
            'name' => 'Item 02',
            'description' => 'Descrição do segundo item'

        ]);

        
    }

}


?>
