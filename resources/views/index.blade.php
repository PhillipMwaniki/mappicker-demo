<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Picker Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
                @foreach ($pickers as $picker)
                    <div class="col-md-3 ml-1">
                        <div class="card">
                        <img src="/images/{{ $picker->mtrimage }}" style="min-height: 150px;" class="card-img-top img-responsive">
                            <div class="card-body">
                                <h5 class="card-title">{{ $picker->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Age is {{ $picker->age }}</h6>
                                <a href="#" class="card-link">View location on map</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="row">
            <div class="container mt-5 pull-right">{{ $pickers->links() }}</div>
        </div>
    </div>
</body>
</html>
