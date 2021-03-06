@extends('layout')

@section('conteudo')
<div class="container">
        <div class="form-group">
                <div class="col-md-offset-3 col-lg-6 text-center">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- Sprint 6 escolher pais-->
                        
                        <div class="form-group row">
                            {{-- <label for="" class="col-md-4 col-form-label text-md-right">Escolher país</label> --}}
                            <label for="estado" class="col-md-4 col-form-label text-md-right">estado</label>
                            <div class="col-md-6">
                                
                                <select name="estado" class="form-control" id="estado" class="form-control"></select>
               
                            </div>
                            
                            <div class="form-group">

                                    <label for="cidade" class="col-md-4 col-form-label text-md-right">cidade</label>
                                    <div class="col-md-6">
                                    <select name="cidade" class="form-control" id="cidade" class="form-control"></select>
                                    </div>
    
                                </div>
                              
                            

                        </div>
                        
                        <div class="form-group row mb-0">
                                <div class="col-md-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-default btn-default-custom">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
