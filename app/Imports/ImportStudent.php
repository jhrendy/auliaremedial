<?php

namespace App\Imports;

use App\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportStudent implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $key=>$data) {
    		if ($key > 0) {
    			$Student = new Student();
    			$Student ->name = $data [0];
    			$Student ->class = $data [1];
    			$Student ->major = $data [2];
    			$Student ->save();
    		}
    	}
    }
}
