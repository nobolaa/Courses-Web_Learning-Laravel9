<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de Laravel";
        $curso->categoria = "Desarrollo Web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel2";
        $curso2->descripcion = "El mejor framework de Laravel2";
        $curso2->categoria = "Desarrollo Web2";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Laravel3";
        $curso3->descripcion = "El mejor framework de Laravel3";
        $curso3->categoria = "Desarrollo Web3";

        $curso3->save();
    }
}
