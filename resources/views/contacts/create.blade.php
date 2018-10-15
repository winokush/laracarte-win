@extends('layouts.default', ['title' => 'Contact'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service please <a href="mailto:f2wino@gmail.com">ask for help</a>.</p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="name" class="control-label">Name </label>
                        <input type="text" id="name" name="name" class="form-control" required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email </label>
                        <input type="email" id="email" name="email" class="form-control" required">
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Name </label>
                        <textarea name="message" id="message" class="form-control" ></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit Enquiry &raquo;&raquo;</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop