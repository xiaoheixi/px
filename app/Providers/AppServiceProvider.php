<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Nav;
use App\news;
use App\User;
use App\footer;
use App\Product;
use App\sideNav;
use App\carousel;
use App\services;
use App\radioShow;
use App\AdminSideNav;
use App\contactDetails;
use App\Page;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navContent = Nav::all();
        view()->share('navContent', $navContent);
        $sideNavContent = sideNav::all();
        view()->share('sideNavContent', $sideNavContent);
        $adminSideNavContent = AdminSideNav::all();
        view()->share('adminSideNavContent', $adminSideNavContent);
        $contactDetail = contactDetails::all();
        view()->share('contactDetail', $contactDetail);
        $serviceContent = services::all();
        view()->share('serviceContent', $serviceContent);
        $newsContent = news::all();
        view()->share('newsContent', $newsContent);
        $footerContent = footer::all();
        view()->share('footerContent', $footerContent);
        $carouselContent = carousel::all();
        view()->share('carouselContent', $carouselContent);
        $audios = Product::all()->where('type', 'Audio');
        view()->share('audios', $audios);
        $books = Product::all()->where('type', 'Book');
        view()->share('books', $books);
        $videos = Product::all()->where('type', 'Video');
        view()->share('videos', $videos);
        $adminContent = User::all();
        view()->share('adminContent, $adminContent');
        $radioContent = radioShow::all();
        view()->share('radioContent', $radioContent);
        $allProducts = Product::all();
        view()->share('allProducts', $allProducts);
        $productContent = Product::all();
        view()->share('productContent', $productContent);
        $pageContent = Page::all();
        view()->share('pageContent', $pageContent);
        $totalPages = count(Page::select('title')->get());
        view()->share('totalPages', $totalPages);
        $totalProducts = count(Product::select('name')->get());
        view()->share('totalProducts', $totalProducts);
        $totalNavs = count(Nav::select('navName')->get());
        view()->share('totalNavs', $totalNavs);
        $totalSideNavs = count(sideNav::select('sideNavName')->get());
        view()->share('totalSideNavs', $totalSideNavs);
        $totalServices = count(services::select('serviceName')->get());
        view()->share('totalServices', $totalServices);
        $totalNews = count(news::select('newsName')->get());
        view()->share('totalNews', $totalNews);
        $totalAdmins = count(User::select('name')->get());
        view()->share('totalAdmins', $totalAdmins);
        $totalAdminSideNavs = count(AdminSideNav::select('adminSideNavName')->get());
        view()->share('totalAdminSideNavs', $totalAdminSideNavs);
    }
}
