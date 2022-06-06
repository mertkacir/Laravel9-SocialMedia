@extends('layouts.adminbase')
@section('title', 'Edit FAQ')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@section('content')
    <!-- FAQ Start -->
    <div class="content">
        <h1 class="mb-4">Edit FAQ: {{ $data->title }}</h1>
        <h6 class="mb-4">Basic Form</h6>
        <form role="form" action="{{ route('admin.faq.update', ['id' => $data->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Question</label>
                <input type="text" class="form-control" name="question" id="question" value="{{$data->question}}" aria-describedby="question">
            </div>
            <div class="form-group">
                <label>Answer</label>
                <textarea id="answer" name="answer"> {{$data->answer}}</textarea>

                <script>
                    ClassicEditor
                        .create(document.querySelector('#answer'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" {{$data->status}}>
                    <option>True</option>
                    <option>False</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </div>

    </div>
    </form>
@endsection
