<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\InfoPage;
use Illuminate\Database\Seeder;


class PageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSlug = [
            'welcome-note',
            'why-shejda',
            'our-story',
            'our-mission',
            'our-vision',
            'our-values',
            'landowners',
            'buyers',
            'customers',
            'contact-us',
        ];

        $pageTitle = [
            'Welcome to Shejda',
            'Why Shejda',
            'Our Story',
            'Our Mission',
            'Our Vision',
            'Our Values',
            'Landowners',
            'Buyers',
            'Customers',
            'Contact Us',
        ];

        foreach ($pageSlug as $index => $pageSlug) {
            InfoPage::create([
                'title' => $pageTitle[$index],
                'slug' => $pageSlug,
                'content' => $pageTitle[$index] . ' page content',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
