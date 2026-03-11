<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.show', compact('animal'));
    }

    public function add()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chat',
            'age' => 1,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
            'photo' => 'coquillette.png'
        ]);

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        if ($animal) {
            $animal->name .= ' modifié';
            $animal->save();
        }

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->delete();
        }

        return redirect()->route('index');
    }
}
