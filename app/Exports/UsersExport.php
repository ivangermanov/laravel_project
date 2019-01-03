<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromQuery, WithHeadings, WithStrictNullComparison
{
    use Exportable;

    public function query()
    {
        return User::query(); 
    }

    public function headings(): array
    {
        $columns = Schema::getColumnListing('users');
        if (($key = array_search('password', $columns)) !== false) {
            unset($columns[$key]);
        }
        if (($key = array_search('remember_token', $columns)) !== false) {
            unset($columns[$key]);
        }
        if (($key = array_search('role', $columns)) !== false) {
            unset($columns[$key]);
        }
        if (($key = array_search('deleted_at', $columns)) !== false) {
            unset($columns[$key]);
        }
        return $columns;
    }
}
