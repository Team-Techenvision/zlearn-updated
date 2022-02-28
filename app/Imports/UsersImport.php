<?php

namespace App\Imports;
   
use App\User;
use App\UserDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
    
class UsersImport implements  ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {

        Validator::make($rows->toArray(), [
            '*.name' => 'required',
            '*.email' => 'required',
            '*.password' => 'required',
        ])->validate();

        // return new User([
        //     'name'     => $row['name'],
        //     'email'    => $row['email'], 
        //     'password' => \Hash::make($row['password']),
        //     'phone'     => $row['phone'],
        //     'user_type'    => $row['user_type'],
        //     'gender'    => $row['gender'],
        //     'status'    => $row['status'],
        // ]);

        foreach ($rows as $row) {
            $user = User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => \Hash::make($row['password']),
            ]);

            $userinfo = UserDetails::create([
                'user_id' => $user->id,
            ]);
        }

    }
}
?>
