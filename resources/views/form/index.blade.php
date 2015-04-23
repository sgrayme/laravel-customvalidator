<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Form</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    @if (isset($input) && $input['success'])
    <div class="section">
        <div class="col s12 m10 offset-m1">
            <div class="row">
                <div class="col s12">
                    <div class="teal-text text-darken-2">Form successfully submitted.</div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="section">
        <form class="col s12 m10 offset-m1" action="{{ url('/form') }}" method="post">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="regular" id="regular" type="text" placeholder="Required field." value="{{ $input['regular'] or '' }}">
                    <label for="regular">In-built Validation</label>
                    @if ($errors->has('regular'))
                    <span class="red-text text-darken-2">{{ $errors->first('regular') }}</span>
                    @endif
                </div>
                <div class="input-field col s12 m6">
                    <input name="special" id="special" type="text" placeholder="Must be greater than 3 characters, if filled." value="{{ $input['special'] or '' }}">
                    <label for="special">Custom Validation</label>
                    @if ($errors->has('special'))
                    <span class="red-text text-darken-2">{{ $errors->first('special') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <div class="right-align">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <button name="submit" class="btn waves-effect waves-light" type="submit">
                        Submit Form
                    </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js" type="text/javascript"></script>
</body>
</html>