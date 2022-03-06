<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->get_news();

        return view('pages.news', [
            'news_list' => $news
        ]);
    }

    public function single_news(int $id)
    {
        $news = $this->get_news($id);

        return view('pages.single-news', [
            'single_news' => $news
        ]);
    }

    public function news_by_category(int $category_id)
    {
        $news = $this->get_news();

        foreach ($news as $news_item) {
            if ($news_item->category_id === $category_id) {
                $result[] = $news_item;
            }
        }

        return view('pages.news', [
            'news_list' => $result
        ]);

    }

}
