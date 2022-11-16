<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutors';
    protected $primarykey = 'id';
    protected $fillable = ['tutors_id', 'tutors_name', 'contact_no', 'email'];

	/**
	 * @return mixed
	 */
	public function getPrimarykey() {
		return $this->primarykey;
	}
	
	/**
	 * @param mixed $primarykey 
	 * @return self
	 */
	public function setPrimarykey($primarykey): self {
		$this->primarykey = $primarykey;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * @param mixed $fillable 
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
}
