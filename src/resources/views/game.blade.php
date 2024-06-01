<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Rock, Paper, Scissors</h1>
    <br/>
    <form method="POST" action="{{ route('rockpaperscissors.play') }}" class="d-flex justify-content-center">
        @csrf
        
        <select name="choice" id="choice" class="h2">
            <option value="rock✊">Rock✊</option>
            <option value="paper✋">Paper✋</option>
            <option value="scissors✌️">Scissors✌️</option>
        </select>
        <button type="submit" class="btn btn-dark h1">Play</button>
    </form>
    <br/>
    @if (isset($result))
        <h2 class="text-center h2">Result: {{ ucfirst($result) }}</h2>
        <br/>
        <p class="text-center h1">Your choice: {{ $userChoice }}</p>
        <br/>
        <p class="text-center h1">Computer's choice: {{ $computerChoice }}</p>
    @endif
    <!-- <h2>Score</h2>
    <p>Wins: {{ session('results.win', 0) }}</p>
    <p>Losses: {{ session('results.lose', 0) }}</p>
    <p>Draws: {{ session('results.draw', 0) }}</p> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
