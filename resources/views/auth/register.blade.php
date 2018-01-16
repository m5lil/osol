@extends('nolayout')

@section('body')

    <div class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card-body">
                        <div class="center">Nothing here to show</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        setTimeout(function () {
            window.location = "{{ url('/') }}"; //will redirect to your blog page (an ex: blog.html)
        }, 2000);//here double curly bracket
    </script>


@endsection
