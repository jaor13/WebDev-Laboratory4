@extends('components.layout')

@section('title', 'HomePage')

@section('content')
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Welcome {{ $username ?? 'Guest' }} to RoQ Collective Portfolio! <span>🎉</span></h4>
                </div>
                <div class="modal-body">
                    <p>Explore our projects, skills, and experiences! Dive into our portfolio to see the innovative solutions we've crafted!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Start Exploring</button>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('age-verification') }}'">Access Restricted Content</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myModal').modal('show'); // Show the modal on page load
        });

        var typed = new Typed('.typing', {
            strings: ["are an undergrad student in the IT Field. Check out our skills, experience, and projects!"],
            loop: true,
            typeSpeed: 40,
            backSpeed: 50
        });
    </script>
@endsection