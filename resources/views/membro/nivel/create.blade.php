@extends('layouts.membro')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista dos niveis <a href="{{route('nivel.index')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Voltar</a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="post" action="{{ route('nivel.store') }}" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}

                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <h5><b>Atribuir previlegio</b></h5>

                        <div class='form-group'>
                            @foreach ($permissions as $permission)
                                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                            @endforeach
                        </div>

                        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop