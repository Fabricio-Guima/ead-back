<?php

namespace App\Repositories;

use App\Models\Module;

class ModuleRepository
{
	protected $entity;	

	public function __construct(Module $model)
	{	
		$this->entity = $model;
	}

	public function getModulesByCourseId(String $courseId)
	{
		return $this->entity::where('course_id',$courseId)->get();
	}

	public function getModule(String $identify)
	{
		return $this->entity::findOrFail($identify);
	}


}