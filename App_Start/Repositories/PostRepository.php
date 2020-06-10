<?php

namespace App\Repositories;

interface PostRepository
{
    public function getById($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);
}

?>