@extends('layouts.app')
@section('logout')
<div class="justify-content-end">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm">Deconnecter</button>
    </form>
</div>
@endsection
@section('content')
<div class="container-fluid ">
    <div style="border:none;background-color: white" class="card font-weight-bold shadow-lg p-3 mb-5 bg-white rounded">
        <div style="font-size: 2em;" class="card-header bg-white ">
            {{Auth::user()->name }},welcome to RHApp
        </div>
        <div class="card-body ">
            <div class="container">
                <p>Votre compte</p>
                <hr class="bg-info">
                <form method="POST" action="{{ route('societe.store') }}">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nom_societe" class="col-md-4 col-form-label text-md-right">{{ __('Raison Social') }}
                                    <span class="text-danger ml-2">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="nom_societe" style="box-shadow: none" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom_societe" required value="{{Auth::user()->rais_social}}">

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}
                                    <span class="text-danger ml-1">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" style="box-shadow: none" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rais_social" class="col-md-4 col-form-label text-md-right">{{ __('GSM') }}</label>
                                <div class="col-md-6">
                                    <input id="GSM" style="box-shadow: none" type="text" class="  form-control @error('gsm') is-invalid @enderror" name="GSM">

                                    @error('GSM')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="site" class="col-md-4 col-form-label text-md-right">{{ __('Site Internet') }}
                                </label>
                                <div class="col-md-6">
                                    <input style="box-shadow: none" type="text" class="form-control @error('site') is-invalid @enderror" name="site_internet" autocomplete="new-password">
                                    @error('site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}
                                    <span class="text-danger ml-1">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input style="box-shadow: none" id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required>
                                    @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}
                                    <span class="text-danger ml-1">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input style="box-shadow: none" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" required>
                                    @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}<span class="text-danger ml-1">*</span></label>
                                <div class="col-md-6">
                                    <input style="box-shadow: none" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" required>
                                    @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}

                                </label>
                                <div class="col-md-6">
                                    <input style="box-shadow: none" type="text" class="form-control @error('code_postal') is-invalid @enderror" name="code_postall">
                                    @error('code_postall')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">Votre Devise</p>
                    <hr class="bg-info">
                    <div class="form-group row float-left ml-4">
                        <label for="devise" class="col-md-4 col-form-label text-md-right">{{ __('Devise') }}
                            <span class="text-danger ml-1">*</span></label>

                        <div class="col-md-6">
                            <input style="box-shadow: none;width: 340px" type="text" class="form-control @error('devise') is-invalid @enderror" name="devise" required>
                            @error('devise')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0 col-auto float-right mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
