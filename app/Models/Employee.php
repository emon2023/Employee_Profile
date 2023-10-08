<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    private static $employee, $image, $imageName,$imageExtension, $directory, $imageUrl;


    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension =self::$image->getClientOriginalExtension();
        self::$imageName =rand(100, 100000000).'.'.self::$imageExtension;
        self::$directory='img/upload/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl= self::$directory.self::$imageName;
        return self::$imageUrl;
    }


    public static function newEmployee($request)
    {
        self::$employee = new Employee();
        self::$employee->name = $request->name;
        self::$employee->email = $request->email;
        self::$employee->mobile = $request->mobile;
        self::$employee->address = $request->address;
        self::$employee->image = self::getImageUrl($request);
        self::$employee->save();
    }


    public static function updateEmployee($request, $id)
    {
        self::$employee = Employee::find($id);

        if ($request->file('image'))
        {
            if(file_exists(self::$employee->image))
            {
                unlink(self::$employee->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }

        else
        {
            self::$imageUrl = self::$employee->image;
        }

        self::$employee->name = $request->name;
        self::$employee->email = $request->email;
        self::$employee->mobile = $request->mobile;
        self::$employee->address = $request->address;
        self::$employee->image = self::$imageUrl;
        self::$employee->save();
    }

    public static  function deleteEmployee($id)
    {
        self::$employee = Employee::find($id);

        if(file_exists(self::$employee->image))
        {
            unlink(self::$employee->image);
        }
        self::$employee->delete();
    }

}
