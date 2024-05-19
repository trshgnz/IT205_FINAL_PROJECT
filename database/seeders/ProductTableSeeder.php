<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Jellypop Necklace',
                'price' => 299.00,
                'description' => 'Experience the magic of summer with this Jellypop Necklace! Adorned with multi-colored beads and charming butterfly pendants, this necklace is a playful addition to any summer outfit. It’s not just a piece of jewelry, it’s a statement of joy and color. Perfect for those who love to stand out and embrace their unique style.',
                'details' => 'Made with freshwater pearls and glass seed beads, 14 inch necklace with 2 inch extender, Lobster clasp closure',
                'category' => 'Summer Collection',
            ],
            [
                'name' => 'Bloom Hoop Earrings',
                'price' => 199.00,
                'description' => 'Discover your new go-to earrings with our Bloom Hoop Earrings. Pairing a cute flower design with classic gold hoops, these earrings are the perfect blend of simple and stylish.',
                'details' => '14k gold plated brass hoops with plastic charm, Hoop size: 0.7 inches, Flower charm: 0.7 inches',
                'category' => 'Summer Collection',
            ],
            [
                'name' => 'Hibiscus Layered Necklace',
                'price' => 499.00,
                'description' => 'Embrace island-inspired elegance with our Hibiscus Layered Necklace. Adorned with delicate pearls and featuring a charming plumeria flower pendant, this necklace effortlessly captures the beauty of tropical paradise.',
                'details' => 'Made with freshwater pearls and glass seed beads, 16 inch necklace with 2 inch extender, Lobster clasp closure',
                'category' => 'Summer Collection',
            ],
            [
                'name' => 'Summer Ring Set',
                'price' => 399.00,
                'description' => 'Immerse yourself in the summer’s essence with this radiant set of rings, exploding with hues as brilliant as a midsummer’s day. Allow your fingers to sway in the sunlight, decorated with these whimsical rings that resonate with the delight of summer’s flourish.',
                'details' => 'Made with resin and 14k gold-plated material, Adjustable to fit sizes 5-9, Waterproof and sweatproof',
                'category' => 'Summer Collection',
            ],
            [
                'name' => 'Western Wed Necklace',
                'price' => 599.00,
                'description' => 'Embrace the charm of the west with our Western Wednesday Multi-Layered Necklace. This unique piece features a combination of a delicate pearl necklace, two gold chains with a heart-shaped pendant, and a cowboy boot pendant. The standout feature is the rectangular bar pendant engraved with “11:11”, adding a touch of mystery and allure.',
                'details' => 'Made with gold-plated chains, pendants, and synthetic pearls, 16 inch necklace with 2 inch extender, Lobster clasp closure',
                'category' => 'Best Sellers',
            ],
            [
                'name' => 'Everyday Ring Set',
                'price' => 399.00,
                'description' => 'Add a splash of color to your style with our Everyday Ring Set. This set features a variety of rings in different shapes, sizes, and designs, including smiley faces, a butterfly, a flower, and abstract shapes. The rings are adorned with vibrant colors like gold, green, pink, blue, and purple, perfect for those who love to make a statement.',
                'details' => 'High-quality mixed metals and colored enamel, Adjustable to fit sizes 5-9, Waterproof and sweatproof',
                'category' => 'Best Sellers',
            ],
            [
                'name' => 'Pink Fairy Earrings Set',
                'price' => 499.00,
                'description' => 'This set is adorned with stunning pink gemstones, adding a pop of color to the golden hue. Whether you’re dressing up for a special occasion or adding a little sparkle to your everyday look, this earring set is a must-have addition to your jewelry collection.',
                'details' => 'High-quality gold plated metal, Synthetic pink gemstones, Waterproof and sweatproof',
                'category' => 'Best Sellers',
            ],
            [
                'name' => 'Full of Love Bracelet',
                'price' => 299.00,
                'description' => 'Experience the blend of elegance and whimsy with this Full of Love Bracelet set, a timeless accessory that adds a touch of love to your style. Let the gold-colored heart links and the pink heart charm on the pearl bracelet be a sweet reminder of the beauty in simplicity.',
                'details' => 'Made with 18k thick gold plated material, Freshwater pearls and enamel pendant, 6.5-7 inches with 2 inches extender',
                'category' => 'Best Sellers',
            ],
            [
                'name' => 'Duo Hoop Earrings',
                'price' => 299.00,
                'description' => 'Discover your new go-to earrings with our Duo Hoop Earrings. Pairing a cute flower design with classic gold hoops and enamel flower earrings, these two are the perfect addition to your summer outfits.',
                'details' => '14k gold plated brass hoops with plastic charm, Hoop size: 0.7 inches, Flower charm: 0.7 inches, Enamel charm: 0.6 inches',
                'category' => 'Shop',
            ],
            [
                'name' => 'Marble Bubble Stack',
                'price' => 399.00,
                'description' => 'Brighten your look with our Marble Bubble Stack. This set includes three unique pieces: one with colorful, variously shaped beads, another with pearl-like and flower-shaped beads, and a minimalist string bracelet for contrast.',
                'details' => 'High-quality beads and marble stones, 6.5-7 inches, Waterproof and sweatproof',
                'category' => 'Shop',
            ],
            [
                'name' => 'Bow Ear Huggies',
                'price' => 299.00,
                'description' => 'Elevate your style with our Bow Ear Huggies. This set includes two unique earrings: one with a bow design encrusted with sparkling gemstones, and the other a hoop with a heart-shaped pendant featuring a pink stone. Both gold earrings beautifully complement the glittering gemstones.',
                'details' => 'Made with 18k gold plated on brass, Cubic zirconia bow, 6.5-7 inches',
                'category' => 'Shop',
            ],
            [
                'name' => 'Flashy Rings Set',
                'price' => 599.00,
                'description' => 'While you can’t buy class, you can certainly elevate your style with our Flashy Ring Set. A set of stunning statement pieces adorned with crystals that bring all the bling and ensure you stand out.',
                'details' => 'Made with 14k gold plated, Adjustable to fit sizes 5-9, Waterproof and sweatproof',
                'category' => 'Shop',
            ],
            [
                'name' => 'Spring Is Here Ring Set',
                'price' => 399.00,
                'description' => 'Unleash your vibrant side with our Funky Fresh Color Pop Ring Collection! This set of five unique rings features playful designs like \'NYC\' letters and whimsical flowers. Comfortable for all-day wear, they\'re perfect for parties or adding a pop of color to your everyday look.',
                'details' => 'High-quality mixed metals and colored enamel, Adjustable to fit sizes 5-9, Waterproof and sweatproof',
                'category' => 'Shop',
            ],
            [
                'name' => 'Friendship Charm Bracelet',
                'price' => 599.00,
                'description' => 'Celebrate the bond of friendship with our Friendship Charm Bracelet. This set features three distinct bracelets, each adorned with unique charms that symbolize love and adventure. The beads of the bracelets are spherical and shiny, reflecting light beautifully.',
                'details' => 'Made with 18k thick gold plated material, Freshwater pearls and enamel pendant, 6.5-7 inches with 2 inches extender',
                'category' => 'Shop',
            ],
            [
                'name' => 'Bear Hug Necklace',
                'price' => 699.00,
                'description' => 'Enhance your style with our Bear Hug Necklace. Featuring gold chains and pearl strands with heart and teddy bear charms, this set adds a playful yet elegant touch to any outfit.',
                'details' => 'Made with high-quality gold plated and faux pearls, 16 inches with 2 inches extender, Lobster clasp closure',
                'category' => 'Shop',
            ],
            [
                'name' => 'Bad Blood Necklace',
                'price' => 999.00,
                'description' => 'This striking necklace features thick, golden links with various charms like a rose, apple, cross, ace of hearts card, and ornate circular charm. A bright red ribbon adds a colorful touch, making it ideal for expressing individual style. Stand out with this unique statement piece!',
                'details' => 'Made with high-quality gold plated material, 14 inches with 2 inches extender, Lobster clasp closure',
                'category' => 'Shop',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
