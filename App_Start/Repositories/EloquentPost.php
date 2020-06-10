<?php

namespace App\Repositories;

use App\Post;

class EloquentPost implements PostRepository
{

    private $model;

    // To bind the post model with this model
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $post = $this->model->findOrFail($id);
        $post->update($attributes);
        return $post;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }



















}



















?>