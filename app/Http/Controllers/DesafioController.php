<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class DesafioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getRepositories(Request $request)
    {
        // Fazer a requisição à API do GitHub
        $client = new Client();
        $username = request('username');
        try {
            $response = $client->get("https://api.github.com/users/$username/repos");
            $repositories = json_decode($response->getBody(), true);

            // Limita a exibição aos 5 repositórios mais populares
            $repositories = array_slice($repositories, 0, 5);

             // Ordena os repositórios  em ordem decrescente
            $repositories = collect($repositories)->sortByDesc('stargazers_count');

            return view('repositorio', compact('repositories', 'username'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error', compact('error'));
        }
    }
}
