<?php

namespace Modules\Test\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Test\App\resources\PostResource;
use Modules\Test\App\resources\PosttResource;
use Nwidart\Modules\Facades\Module;
class PostsController extends Controller
{
    public array $data = [
        [
            'id' => 1,
            'title' => 'Post 1',
            'content' => 'Content 1',
        ],
        [
            'id' => 2,
            'title' => 'Post 2',
            'content' => 'Content 2',
        ],
        [
            'id' => 3,
            'title' => 'Post 3',
            'content' => 'Content 3',
        ],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        return new PostResource($this->data);
    }

    public function index2()
    {
        dd(Module::all());
        return Module::all();
    }
}
