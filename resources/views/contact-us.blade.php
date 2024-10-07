@extends('components.layout')

@section('title', 'Contact Us')

@section('content')

<main>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row cont justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('asset/image/msg-pn.svg') }}" class="img-fluid" alt="Contact Image">
                </div>
                <div class="col-md-6">
                    <h1 style="margin-top: 20px;">Get in touch with us</h1>
                    <form action="/submit-form" method="POST">
                        @csrf <!-- Add CSRF token for security -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" id="btn-sub" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
