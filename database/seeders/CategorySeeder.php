<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Footer;
use App\Models\footerdescription;
use App\Models\Footertext;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::query()->create([
           'category_id' => null,
            'title' => 'دسته بندی اصلی',
            'image' => 'public/categories/placeholder.jpg'
        ]);

        category::query()->insert([

            [
                'category_id' => '1',
                'title' => 'زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'مردانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'بچگانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'زیبایی و سلامت',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'لباس مردانه',
                'image' => 'public/categories/section-one-man.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'کفش مردانه',
                'image' => 'public/categories/section-one-man-shose.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'اکسسوری مردانه ',
                'image' => 'public/categories/section-one-man-accesory.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'ورزشی مردانه',
                'image' => 'public/categories/section-one-man-sport.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'لباس زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'کفش زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'اکسسوری زنانه ',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'ورزشی زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'نوزاد',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'دخترانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'پسرانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم آرایشی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم بهداشتی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم شخصی برقی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'عطر',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'ابزار سلامت',
                'image' => 'public/categories/placeholder.jpg'
            ],

        ]);

        Footer::query()->insert([
           [
               'instagram' => 'https://www.instagram.com/',
               'telegram' => 'https://telegram.org/',
               'whatsapp' => 'https://www.whatsapp.com/',
               'SupportPhone' => '123456789'
           ]
        ]);

        Product::query()->insert([
           [
               'category_id' => '10',
               'name' => 'شلوارکککک',
               'cost' => '15000000',
               'image' => 'public/products/section-one-woman-accesory.jpg',
               'description' => 'لباس پشمی',
               'body' => 'لباس خوبی است',
               'inventory' => '33',
               'specialOffer' => '1',
               'created_at' => '2021-11-09 06:24:13',
               'updated_at' => '2021-11-09 06:24:23'
           ]
        ]);

        Footertext::query()->insert([
           [
               'title' => 'فوتر 1  را کنترل کنید'
           ],
            [
                'title' => 'فوتر 2  را کنترل کنید'
            ]
        ]);

        footerdescription::query()->insert([
           [
               'title' => 'فروشگاه اینترنتی مد ولباس',
               'body1' => 'دیجی‌استایل، پس از تجربه‌ی موفق فروشگاه اینترنتی دیجی‌کالا به صورت تخصصی پا به عرصه مد، پوشاک و سبک زندگی گذاشت تا همان تجربه‌ی شیرین، در قالبی نو تکرار شود. در دیجی ‌استایل می‌توانید همه آنچه مرتبط با مد و پوشاک از انواع لباس زنانه، لباس مردانه و لباس بچگانه گرفته تا کیف و کفش و اکسسوری را با تخفیف ویژه در حراج ها، پیدا کنید و به سادگی یک ست کامل از جدیدترین‌ برندهای معتبر را بخرید.',
               'body2' => 'در دیجی استایل برندهای ایرانی مشهوری نظیر چرم مشهد، درسا، کفش ملی، کفش شیما، شیفر، چرم کروکو، مارال چرم، بادی اسپینر، ال سی من، پاتن جامه، تن درست، زیبو، زی، کیکی رایکی، نیکتا و ... برندهای خارجی نظیر دیور (Dior)، آلدو (Aldo)، آندر آرمور (Under Armour)، نایکی (Nike)، اسکچرز (Skechers)، ریباک (Reebok)، سالامون (Salomon)، ری بن (Rey Ban)، ال سی وایکیکی (LC Waikiki)، پوما (Puma)، دنیلی (Daniellee) و... موجود است و می توانید جدیدترین محصولات این برندها رو به صورت آنلاین تهیه کنید و به راحتی درب منزل تحویل بگیرید.',
               'body3' => 'همچنان دیجی استایل با ورود به دنیای زیبایی و سلامت انواع عطر و ادکلن، لوازم آرایش چشم و ابرو، آرایش صورت، لوازم شخصی برقی، بهداشت و زیبایی ناخن، ابزار سلامت و ... را در اختیار مشتریان قرار داده تا بتوانند از محصولات اورجینال و اصل خریداری کنند و در صورت مغایرت کالا تا 14 روز امکان بازگشت کالا را وجود دارد. پس همین حالا برای خرید انواع رنگ مو، سشوار، پنکیک، ماسک صورت، خط چشم، لاک ناخن، ادکلن، کانسیلر، شامپو، سایه ابرو و سایه چشم به فروشگاه اینترنتی دیجی استایل مراجعه کنید و تنها با چند کلیک محصول مورد نظر خود را سفارش دهید.',
               'image' => 'public/footer/shaparak.png',
               'description' => 'کلیه حقوق این سایت متعلق به شرکت ....... است'
           ]
        ]);
    }
}
