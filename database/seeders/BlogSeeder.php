<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\CategoryTranslation;
use Botble\Blog\Models\Post;
use Botble\Blog\Models\PostTranslation;
use Botble\Blog\Models\Tag;
use Botble\Blog\Models\TagTranslation;
use Botble\Language\Models\LanguageMeta;
use Botble\Slug\Models\Slug;
use Faker\Factory;
use Html;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use MetaBox;
use RvMedia;
use SlugHelper;

class BlogSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->uploadFiles('news');
        $this->uploadFiles('categories');

        Post::truncate();
        Category::truncate();
        Tag::truncate();
        PostTranslation::truncate();
        CategoryTranslation::truncate();
        TagTranslation::truncate();
        Slug::where('reference_type', Post::class)->delete();
        Slug::where('reference_type', Tag::class)->delete();
        Slug::where('reference_type', Category::class)->delete();
        MetaBoxModel::where('reference_type', Post::class)->delete();
        MetaBoxModel::where('reference_type', Tag::class)->delete();
        MetaBoxModel::where('reference_type', Category::class)->delete();
        LanguageMeta::where('reference_type', Post::class)->delete();
        LanguageMeta::where('reference_type', Tag::class)->delete();
        LanguageMeta::where('reference_type', Category::class)->delete();

        $faker = Factory::create();

        $categories = [
            [
                'name'       => 'Uncategorized',
                'is_default' => true,
            ],
            [
                'name'     => 'Travel',
                'children' => [
                    [
                        'name' => 'Guides',
                    ],
                ],
            ],
            [
                'name'     => 'Destination',
                'children' => [
                    [
                        'name' => 'Food',
                    ],
                ],
            ],
            [
                'name'     => 'Hotels',
                'children' => [
                    [
                        'name' => 'Review',
                    ],
                ],
            ],
            [
                'name' => 'Healthy',
            ],
            [
                'name' => 'Lifestyle',
            ],
        ];

        foreach ($categories as $index => $item) {
            $category = $this->createCategory(Arr::except($item, 'children'), $index, 0, $index != 0);

            if (isset($item['children']) && !empty($item['children'])) {
                foreach ($item['children'] as $childIndex => $child) {
                    $this->createCategory($child, $index + $childIndex, $category->id);
                }
            }
        }

        $translations = [
            [
                'name' => 'Kh??ng ph??n lo???i',
            ],
            [
                'name'     => 'Du l???ch',
                'children' => [
                    [
                        'name' => 'H?????ng d???n',
                    ],
                ],
            ],
            [
                'name'     => '??i???m ?????n',
                'children' => [
                    [
                        'name' => '????? ??n',
                    ],
                ],
            ],
            [
                'name'     => 'Kh??ch s???n',
                'children' => [
                    [
                        'name' => '????nh gi??',
                    ],
                ],
            ],
            [
                'name' => 'S???c kh???e',
            ],
            [
                'name' => 'Phong c??ch s???ng',
            ],
        ];

        $index = 0;
        foreach ($translations as $item) {
            $item['lang_code'] = 'vi';
            $item['categories_id'] = $index + 1;
            $item['description'] = $faker->text();

            CategoryTranslation::insert(Arr::except($item, ['children']));

            if (isset($item['children']) && !empty($item['children'])) {
                foreach ($item['children'] as $childIndex => $child) {
                    $child['lang_code'] = 'vi';

                    $index = $index + $childIndex + 1;

                    $child['categories_id'] = $index + 1;

                    CategoryTranslation::insert($child);
                }
            }

            $index++;
        }

        $tags = [
            [
                'name' => 'General',
            ],
            [
                'name' => 'Design',
            ],
            [
                'name' => 'Fashion',
            ],
            [
                'name' => 'Branding',
            ],
            [
                'name' => 'Modern',
            ],
        ];

        foreach ($tags as $item) {
            $item['author_id'] = 1;
            $item['author_type'] = User::class;
            $tag = Tag::create($item);

            Slug::create([
                'reference_type' => Tag::class,
                'reference_id'   => $tag->id,
                'key'            => Str::slug($tag->name),
                'prefix'         => SlugHelper::getPrefix(Tag::class),
            ]);
        }

        $translations = [
            [
                'name' => 'Chung',
            ],
            [
                'name' => 'Thi???t k???',
            ],
            [
                'name' => 'Th???i trang',
            ],
            [
                'name' => 'Th????ng hi???u',
            ],
            [
                'name' => 'Hi???n ?????i',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';
            $item['tags_id'] = $index + 1;

            TagTranslation::insert($item);
        }

        $posts = [
            [
                'name' => 'The Top 2020 Handbag Trends to Know',
            ],
            [
                'name' => 'Top Search Engine Optimization Strategies!',
            ],
            [
                'name' => 'Which Company Would You Choose?',
            ],
            [
                'name' => 'Used Car Dealer Sales Tricks Exposed',
            ],
            [
                'name' => '20 Ways To Sell Your Product Faster',
            ],
            [
                'name' => 'The Secrets Of Rich And Famous Writers',
            ],
            [
                'name' => 'Imagine Losing 20 Pounds In 14 Days!',
            ],
            [
                'name' => 'Are You Still Using That Slow, Old Typewriter?',
            ],
            [
                'name' => 'A Skin Cream That???s Proven To Work',
            ],
            [
                'name' => '10 Reasons To Start Your Own, Profitable Website!',
            ],
            [
                'name' => 'Simple Ways To Reduce Your Unwanted Wrinkles!',
            ],
            [
                'name' => 'Apple iMac with Retina 5K display review',
            ],
            [
                'name' => '10,000 Web Site Visitors In One Month:Guaranteed',
            ],
            [
                'name' => 'Unlock The Secrets Of Selling High Ticket Items',
            ],
            [
                'name' => '4 Expert Tips On How To Choose The Right Men???s Wallet',
            ],
            [
                'name' => 'Sexy Clutches: How to Buy & Wear a Designer Clutch Bag',
            ],
        ];

        foreach ($posts as $index => $item) {
            $item['content'] =
                ($index % 3 == 0 ? Html::tag(
                    'p',
                    '[youtube-video]https://www.youtube.com/watch?v=SlPhMPnQ58k[/youtube-video]'
                ) : '') .
                Html::tag('p', $faker->realText(1000)) .
                Html::tag(
                    'p',
                    Html::image(RvMedia::getImageUrl('news/' . $faker->numberBetween(1, 5) . '.jpg', 'medium'))
                        ->toHtml(),
                    ['class' => 'text-center']
                ) .
                Html::tag('p', $faker->realText(500)) .
                Html::tag(
                    'p',
                    Html::image(RvMedia::getImageUrl('news/' . $faker->numberBetween(6, 10) . '.jpg', 'medium'))
                        ->toHtml(),
                    ['class' => 'text-center']
                ) .
                Html::tag('p', $faker->realText(1000)) .
                Html::tag(
                    'p',
                    Html::image(RvMedia::getImageUrl('news/' . $faker->numberBetween(11, 14) . '.jpg', 'medium'))
                        ->toHtml(),
                    ['class' => 'text-center']
                ) .
                Html::tag('p', $faker->realText(1000));
            $item['author_id'] = 1;
            $item['author_type'] = User::class;
            $item['views'] = $faker->numberBetween(100, 2500);
            $item['is_featured'] = $index < 10;
            $item['image'] = 'news/' . ($index + 1) . '.jpg';
            $item['description'] = $faker->text();
            $item['format_type'] = $index % 3 == 0 ? 'video' : 'default';

            $post = Post::create($item);

            $post->categories()->sync([$faker->numberBetween(1, 4), $faker->numberBetween(5, 7)]);

            $post->tags()->sync([1, 2, 3, 4, 5]);

            Slug::create([
                'reference_type' => Post::class,
                'reference_id'   => $post->id,
                'key'            => Str::slug($post->name),
                'prefix'         => SlugHelper::getPrefix(Post::class),
            ]);
        }

        $translations = [
            [
                'name' => 'Xu h?????ng t??i x??ch h??ng ?????u n??m 2020 c???n bi???t',
            ],
            [
                'name' => 'C??c Chi???n l?????c T???i ??u h??a C??ng c??? T??m ki???m H??ng ?????u!',
            ],
            [
                'name' => 'B???n s??? ch???n c??ng ty n??o?',
            ],
            [
                'name' => 'L??? ra c??c th??? ??o???n b??n h??ng c???a ?????i l?? ?? t?? ???? qua s??? d???ng',
            ],
            [
                'name' => '20 C??ch B??n S???n ph???m Nhanh h??n',
            ],
            [
                'name' => 'B?? m???t c???a nh???ng nh?? v??n gi??u c?? v?? n???i ti???ng',
            ],
            [
                'name' => 'H??y t?????ng t?????ng b???n gi???m 20 b???ng Anh trong 14 ng??y!',
            ],
            [
                'name' => 'B???n v???n ??ang s??? d???ng m??y ????nh ch??? c??, ch???m ?????',
            ],
            [
                'name' => 'M???t lo???i kem d?????ng da ???? ???????c ch???ng minh hi???u qu???',
            ],
            [
                'name' => '10 L?? do ????? B???t ?????u Trang web C?? L???i nhu???n c???a Ri??ng B???n!',
            ],
            [
                'name' => 'Nh???ng c??ch ????n gi???n ????? gi???m n???p nh??n kh??ng mong mu???n c???a b???n!',
            ],
            [
                'name' => '????nh gi?? Apple iMac v???i m??n h??nh Retina 5K',
            ],
            [
                'name' => '10.000 Kh??ch truy c???p Trang Web Trong M???t Th??ng: ???????c ?????m b???o',
            ],
            [
                'name' => 'M??? kh??a B?? m???t B??n ???????c v?? Cao',
            ],
            [
                'name' => '4 L???i khuy??n c???a Chuy??n gia v??? C??ch Ch???n V?? Nam Ph?? h???p',
            ],
            [
                'name' => 'Sexy Clutches: C??ch Mua & ??eo T??i Clutch Thi???t k???',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';

            $post = Post::find($index + 1);

            $item['posts_id'] = $post->id;
            $item['description'] = $post->description;
            $item['content'] = $post->content;

            PostTranslation::insert($item);
        }
    }

    /**
     * @param array $item
     * @param string $locale
     * @param int $index
     * @param int $parentId
     * @param bool $isFeatured
     * @return Category|\Illuminate\Database\Eloquent\Model
     */
    protected function createCategory(
        array $item,
        int $index,
        int $parentId = 0,
        bool $isFeatured = false
    ) {
        $faker = Factory::create();

        $item['description'] = $faker->text();
        $item['author_id'] = 1;
        $item['parent_id'] = $parentId;
        $item['is_featured'] = $isFeatured;

        $category = Category::create($item);

        MetaBox::saveMetaBoxData($category, 'image', 'categories/' . ($index + 1) . '.jpg');

        Slug::create([
            'reference_type' => Category::class,
            'reference_id'   => $category->id,
            'key'            => Str::slug($category->name),
            'prefix'         => SlugHelper::getPrefix(Category::class),
        ]);

        return $category;
    }
}
