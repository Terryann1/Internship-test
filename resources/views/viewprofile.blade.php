<!DOCTYPE html>
<html>
    <head>
        <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <form action="{{ ('profile') }}", method="POST">
        </form>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('profile') }}</div>
        <div class="container">
            <div class="row">
                @foreach ( $user_data as $user )
                <p>First name: {{$user->first_name}}</p><br>
                <p>last name: {{$user->last_name }}</p><br>
                <p>Phone number:{{ $user->phone_number }}</p>  
                @endforeach

            </div>
        </div>
        
    </body>
</html>