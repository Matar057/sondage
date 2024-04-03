<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $sondage->question }}</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>{{ $sondage->question }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('sondage.respond', $sondage->id) }}">
        @csrf
        <!-- Afficher les options du sondage et permettre aux utilisateurs de sélectionner -->
        @foreach($sondage->options as $option)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="response" id="option{{ $loop->iteration }}" value="{{ $option }}">
                <label class="form-check-label" for="option{{ $loop->iteration }}">
                    {{ $option }}
                </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary mt-3">Répondre</button>
    </form>
</div>

<!-- Inclure Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
