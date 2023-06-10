<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        Dog::create($request->all());

        return to_route('dogs');
    }

    public function delete($id)
    {
        $dog = Dog::find($id);
        $dog->delete();

        return to_route('dogs');
    }
}
