<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_groups')->insert([
            'name' => 'Healthy Food',            
        ]);

        DB::table('articles_groups')->insert([
            'name' => 'E-Sports',            
        ]);

        DB::table('articles_groups')->insert([
            'name' => 'Fitness',            
        ]);

        DB::table('articles_groups')->insert([
            'name' => 'Gadgets',            
        ]);

        DB::table('articles_groups')->insert([
            'name' => 'Potpourri',            
        ]);


        //create articles

        DB::table('articles')->insert([
            'category' => '1',
            'author' => '1',
            'title' => 'Vitamines',
            'description' => 'Immer gesund essen ist langweilig ;)',
            'image' => '/images/angryChicken1.jpg',
            'content' => 'Bacon ipsum dolor amet chicken short ribs pork loin spare ribs, beef tongue sunt ground round. Dolore meatloaf turducken, ham hock cow mollit aute kielbasa. Eiusmod anim kevin, laborum picanha sint t-bone dolore ut kielbasa officia velit reprehenderit sunt rump. Id ex spare ribs pork loin, lorem consectetur ball tip tempor beef ribs excepteur pork. Buffalo ex tail ground round proident picanha meatloaf ad aliqua sed exercitation ribeye pancetta pork chop.

            Shankle do quis biltong bresaola chislic deserunt magna excepteur lorem. Swine officia commodo turducken, cillum rump meatloaf sausage chislic. Ullamco do ut quis, tri-tip anim cupidatat excepteur minim eu turkey deserunt. Ea ham officia, pork loin tempor eiusmod aliquip do. Ex exercitation cupim aute tenderloin. Shoulder chicken ground round elit. Cupidatat in nostrud prosciutto andouille drumstick anim non labore rump ribeye pig hamburger frankfurter salami.
            
            Shank frankfurter prosciutto, pork andouille drumstick ad ipsum meatball. Fugiat spare ribs qui occaecat beef rump tongue pancetta. Occaecat flank ullamco cupidatat, ground round lorem chicken turkey drumstick nisi dolore consequat commodo. Dolore beef ribs cillum dolor laboris sausage fatback. Pork chop andouille ham hock enim voluptate tempor porchetta. Commodo velit pig id ham, culpa salami leberkas chicken alcatra jowl anim reprehenderit duis.',            
        ]);
        
    }
}
