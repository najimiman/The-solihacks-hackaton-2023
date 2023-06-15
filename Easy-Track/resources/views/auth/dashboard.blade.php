@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                        {{-- <script>
                            setTimeout(function() {
                                window.location.replace("{{ route('../') }}");
                            }, 5000); // 5000ms = 5 secondes
                        </script> --}}
                        {{-- {{ route('authenticate') }} --}}
                        {{-- <a href="{{ route('/') }}">Aller au tableau de bord</a> --}}
                    </div>       
                @endif                
            </div>
        </div>
    </div>    
</div>
    
@endsection