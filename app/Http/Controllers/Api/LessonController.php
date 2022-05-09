<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $repository;	
	
	public function __construct(LessonRepository $courseRepository)
	{	
		$this->repository = $courseRepository;
	}

    public function index(String $moduleId)
    {  
        $lessons = $this->repository->getLessonsByModuleId($moduleId); 
        return LessonResource::collection($lessons);
    }

    public function show(String $lessonId)
    {     
        return new LessonResource($this->repository->getLesson($lessonId));
    }
}
