<?php

namespace App\Repositories;

use App\Models\Category;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\CategoryContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class CategoryRepository extends BaseRepository implements CategoryContract
{
    use UploadAble;

    public function __construct(Category $model)
    {
    parent::__construct($model);
    $this->model = $model;
    }

    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
    return $this->all($columns, $order, $sort);
    }
    public function findCategoryById(int $id)
    {
    try {
        return $this->findOneOrFail($id);

    } catch (ModelNotFoundException $e) {

        throw new ModelNotFoundException($e);
    }
    }


    /**
    * @param array $params
    * @return Category|mixed
    */
    public function createCategory(array $params)
    {
    try {
        $collection = collect($params);
        
        $image = null;

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {
            $image = $this->uploadOne($params['image'], 'categories');
        }

        $featured = $collection->has('featured') ? 1 : 0;
        $menu = $collection->has('menu') ? 1 : 0;

        $merge = $collection->merge(compact('menu', 'image', 'featured'));

        $category = new Category($merge->all());

        $category->save();

        return $category;

    } catch (QueryException $exception) {
        throw new InvalidArgumentException($exception->getMessage());
    }
    }




    public function updateCategory(array $params)
    {
    $category = $this->findCategoryById($params['id']);

    $collection = collect($params)->except('_token');

    if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

        if ($category->image != null) {
            $this->deleteOne($category->image);
        }

        $image = $this->uploadOne($params['image'], 'categories');
    }

    $featured = $collection->has('featured') ? 1 : 0;
    $menu = $collection->has('menu') ? 1 : 0;

    $merge = $collection->merge(compact('menu', 'image', 'featured'));

    $category->update($merge->all());

    return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);
    
        if ($category->image != null) {
            $this->deleteOne($category->image);
        }
    
        $category->delete();
    
        return $category;
    }
}