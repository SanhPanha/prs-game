<?php

namespace Name\Rockpaperscissors\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    private $choices = ['rock✊', 'paper✋', 'scissors✌️'];
    private $results = ['win' => 0, 'lose' => 0, 'draw' => 0];

    public function index()
    {
        return view('rockpaperscissors::game');
    }

    public function play(Request $request)
    {
        $userChoice = $request->input('choice');
        $computerChoice = $this->choices[array_rand($this->choices)];

        $result = $this->determineWinner($userChoice, $computerChoice);

        session()->increment("results.{$result}");

        return view('rockpaperscissors::game', [
            'userChoice' => $userChoice,
            'computerChoice' => $computerChoice,
            'result' => $result,
            'results' => session('results', $this->results),
        ]);
    }

    private function determineWinner($userChoice, $computerChoice)
    {
        if ($userChoice === $computerChoice) {
            return 'draw';
        }

        if (($userChoice === 'rock✊' && $computerChoice === 'scissors✌️') ||
            ($userChoice === 'paper✋' && $computerChoice === 'rock✊') ||
            ($userChoice === 'scissors✌️' && $computerChoice === 'paper✋')) {
            return 'win';
        }

        return 'lose';
    }
}
