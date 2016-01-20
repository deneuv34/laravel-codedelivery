<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Models\Category;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    protected $skipPresenter = true;

    public function lists()
    {
        return $this->model->lists('name', 'id');
    }

    /**
     * Fields utilizadas na busca
     */
    protected $fieldSearchable = [
        'id',
        'name'=>'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return CategoryPresenter::class;
    }
}
