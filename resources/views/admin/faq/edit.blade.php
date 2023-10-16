@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FaQ Form</h4>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.faq.update', $faq->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="question" class="col-sm-3 col-form-label">Question</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('question') is-invalid @enderror"
                                        value="{{ old('question', $faq->question) }}" id="question" name="question"
                                        placeholder="Add Question">
                                    @error('question')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="answer" class="col-sm-3 col-form-label">answer</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control @error('answer') is-invalid @enderror" value="{{ old('answer') }}"
                                        id="task-textarea" name="answer" placeholder="Add answer">{{ old('answer', $faq->answer) }}</textarea>
                                    @error('answer')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ Route('admin.faq.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
