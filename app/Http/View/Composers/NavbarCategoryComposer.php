<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Repositories\CategoryRepository;
use App\Models\Category;

class NavbarCategoryComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categoryRepository;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        // Dependencies automatically resolved by service container...
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     * */
     
    
    public function compose(View $view)
    {

        $view->with('categories', Category::orderByRaw('-name ASC')->get()->nest());
    }
}


    
