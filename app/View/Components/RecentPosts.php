<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecentPosts extends Component
{
    public $posts;

    public function __construct($posts)
    {
        if (empty($posts)) {
        	$this->posts = [
        		[
        			"image" => asset('assets/images/blogs/blog-1-details-thumb.jpg'),
        			"title" => "Why Off-Site Solar Parks are the Future of Renewable Energy",
        			"link" => "/blog/solar-technologies-and-techniques",
        			"date" => "January 9, 2024"
        		],

        		[
        			"image" => asset('assets/images/blogs/blog-2-details-thumb.jpg'),
        			"title" => "Embracing Sustainability with Solar Energy and Its Environmental Benefits",
        			"link" => "/blog/embracing-sustainability-with-solar-energy-and-its-environmental-benefits",
        			"date" => "January 9, 2024"
        		],

        		[
        			"image" => asset('assets/images/blogs/blog-3-details-thumb.jpg'),
        			"title" => "Navigating Green Energy Choices: Captive vs. Third-Party PPAs in India",
        			"link" => "/blog/blog-3",
        			"date" => "January 9, 2024"
        		],

        	];
        	return;
        }
        $this->posts = $posts;
    }

    public function render()
    {
        return view('components.recent-posts');
    }
}