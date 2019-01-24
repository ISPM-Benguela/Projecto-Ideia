@extends('layouts.membro')
@section('principal')

<div class="">
  <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <img src="{{asset('storage')}}/{{ $perfil->imagem }}" style="border-radius: 50%;" width="200" height="200" alt="{{ $perfil->user['name']}}" />
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="jombotron">
                       <form method="POST" action="{{ route('perfil.update', ['id' => $perfil->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Nome<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ $perfil->user['name'] }}" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                
                                @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">Imagem <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{ Request::old('imagem') ?: '' }}" id="imagem" name="imagem" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('imagem'))
                                <span class="help-block">{{ $errors->first('imagem') }}</span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Create Product</button>
                            </div>
                        </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
