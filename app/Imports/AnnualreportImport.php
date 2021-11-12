<?php

namespace App\Imports;

use App\Models\Import_excel;
use Maatwebsite\Excel\Concerns\ToModel;

class AnnualreportImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Import_excel([
            'Member_Id' => $row[0],
            'Member_Name' => $row[1],
            'Project_ID' => $row[2],
            'Project_Title' => $row[3],
            'Project_Description' => $row[4],
            'Location' => $row[5],
            'Target_Start_Date' => $row[6],
            'Target_End_Date' => $row[7],
            'Actual_Start_Date' => $row[8],
            'Actual_End_Date' => $row[9],
        ]);
    }
}
