@extends('main')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="email" name="email">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subject" name="subject">Subject</label>
                        <input type="text" id="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="content" name="content">Content</label>
                        <textarea id="content" class="form-control">Your Message...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection

