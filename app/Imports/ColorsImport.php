<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;

class ColorsImport implements ToArray
{
    /**
     * @param array $row
     *
     * @return null|\Illuminate\Database\Eloquent\Model
     */
    public function array(array $rows)
    {
        $result = [];
        foreach ($rows as $row) {
            $result[] = [$row[0] => $row[2]];
        }
        dd($result);
    }
}
