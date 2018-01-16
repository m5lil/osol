<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="{{ url('plugins/semantic/dist/semantic.rtl.css') }}" rel='stylesheet' type='text/css'>

    <!-- Site Properties -->
    <title>Login Example - Semantic</title>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/semantic/dist/semantic.js') }}"></script>

    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier  : 'email',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your e-mail'
                                    },
                                    {
                                        type   : 'email',
                                        prompt : 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier  : 'password',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your password'
                                    },
                                    {
                                        type   : 'length[6]',
                                        prompt : 'Your password must be at least 6 characters'
                                    }
                                ]
                            }
                        }
                    })
                ;
            })
        ;
    </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <img src="{{ url('images/osol.png') }}" class="image">
        </h2>
        <form class="ui large form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail address" id="user_login">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" id="user_password">

                    </div>
                </div>
                <div class="ui fluid large teal submit button">دخول</div>
            </div>

            <div class="ui error message"></div>

        </form>

        {{--<div class="ui message">--}}
             {{--<a href="#">Sign Up</a>--}}
        {{--</div>--}}
    </div>
</div>

</body>

</html>
