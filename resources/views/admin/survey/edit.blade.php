@extends('admin.layout2')
@section('content')
    
    <div class="row breadcrumbs">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}">Home</a></li>
                <li class="active">Kuesioner</li>
            </ol>
            <!-- <h3 class="page-header">Daerah</h3><br> -->
        </div>
    </div>
    <!-- buat tambah pertanyaan -->
    <div id="add-question" tabindex="-1" role="dialog" class="modal fade">
        {!! Form::open(['route' => ['admin.surveys.questions.store', $survey->id], 'class' => 'modal-dialog']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Pertanyaan</h4>
                </div>
                <div class="modal-body">
                    @if($errors->hasBag('question'))
                        <div class="alert alert-danger">
                            <p><strong>Uh-oh!</strong> There was a problem with your submission:</p>
                            <ul>
                                @foreach($errors->question->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('Pertanyaan') !!}
                        {!! Form::text('label', null, ['class' => 'form-control1']) !!}
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('Kategori') !!}
                                {!! Form::text('kategori', null, ['class' => 'form-control1']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::label('Tipe Jawaban') !!}
                                {!! Form::select('type', ['text' => 'text', 'checkbox' => 'checkbox', 'radio' => 'radio', 'select' => 'select'], null, ['class' => 'form-control1']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('Pilihan') !!}
                                {!! Form::text('options', null, ['class' => 'form-control1']) !!}
                                <div class="help-block">
                                    Pisahkan dengan tanda koma
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div><!-- /.modal-content -->
        {!! Form::close() !!}<!-- /.modal-dialog -->
    </div><!-- /.modal -->

	

    <!-- <hr> -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Pertanyaan</h3>
        </div>

        <div class="row">
            <div class="col-md-12" >
                <button type="button" class="btn btn-primary btn-sm " data-toggle="modal"   data-target="#add-question">
                    <i class="fa fa-plus"></i> Tambah Pertanyaan
                </button>
            </div>
            <br><br>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Pertanyaan</th>
                    <th>Kategori</th>
                    <th>Type</th>
                    <th>pilihan</th>
                    <!-- <th>Required</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($survey->questions as $question)
                <tr>
                    <td>{{ $question->label }}</td>
                    <td>{{ $question->kategori }}</td>
                    <td>{{ $question->type }}</td>
                    <td>
                        {{ $question->optionsToString() }}
                    </td>
                    <!-- <td>
                        @if($question->isRequired())
                            <i class="fa fa-check"></i>
                        @endif
                    </td> -->
                    <td>
                        {!! Form::open(['route' => ['admin.surveys.questions.destroy', $survey->id, $question->id], 'method' => 'delete']) !!}
                            <button class="confirm-delete btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i><span class="sr-only">Delete Question Id:{{ $question->id }}</span></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-question">
        <i class="fa fa-plus"></i> Add Question
    </button> -->

    <hr>

    {!! Form::open(['route' => ['admin.surveys.destroy', $survey->id], 'method' => 'delete']) !!}
        <div class="form-group">
            <button class="confirm-delete btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete Survey</button>
        </div>
    {!! Form::close() !!}
@endsection
@section('js')
    @parent
    @if($errors->hasBag('question'))
        <script>
            $('#add-question').modal('show');
        </script>
    @endif
    <script>
        $('.confirm-delete').on('click', function (e) {
            var confirmed = confirm("Are you sure you want to delete this?");
            if (!confirmed) {
                e.preventDefault();
            }
        });
    </script>
    <script>
        function setOptionsProp () {
            var type = $('#type').val()
              , disabled = false
            ;

            if ('text' == type || 'checkbox' == type) {
                disabled = true;
            }
            $('#options').prop('disabled', disabled)
        }

        $(document).ready(function () { setOptionsProp() });
        $('#type').on('change', setOptionsProp);
    </script>
@endsection