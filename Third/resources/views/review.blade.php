@extends("layout")

@section('title') Review
@endsection

@section("main_content")
    <h1> Feedback form</h1>
    <form method="post" action="/review/check">

        <input type="email" name="email" id="email" placeholder="input email" class="form-control" >
   <br>
        <input type="subject" name="subject" id="subject" placeholder="input subject" class="form-control" >
        <br>
        <textarea name="message" id="message" class="form-control" placeholder="input message" ></textarea>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

