<?php
namespace App\Repositories\Interfaces;
interface RawRepositoryInterface
{
    public function all();
    public function show($id);
}