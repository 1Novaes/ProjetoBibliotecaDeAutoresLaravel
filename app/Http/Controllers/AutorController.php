<?php
    namespace App\Http\Controllers;
    use illuminate\Support\Facades\DB;

class AutorController extends Controller {
    public function     lista() {
        $html = '<h1> Listagem de autores com laravel </h1>';
        $html .= '<ul>';
        $autores = DB ::select('select * from autores');
        foreach ($autores as $a)    {
            $html .= '<li> Nome: '. $a-> nome . ',
            Nacionalidade:'. $a->nacionalidade .'</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}