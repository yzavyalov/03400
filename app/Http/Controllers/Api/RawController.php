<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Raw;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\RawRepositoryInterface;
use App\Repositories\RawRepository;

class RawController extends Controller
{

    private $rawRepository;

    public function __construct(RawRepositoryInterface $rawRepository){
        $this->rawRepository = $rawRepository;
    }

    public function all(){
        $raws = $this->rawRepository->all();
        return $raws;
    }


    public function show($id)
    {
        $raw = $this->rawRepository->show($id);
        return $raw;
    }
}
