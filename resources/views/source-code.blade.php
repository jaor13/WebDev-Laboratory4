@extends('components.layout')

@section('title', 'Source Code')

@section('content')

<main>
    <section id="portfolio" class="portfolio container" style="margin-top: 120px;">
        <div class="container">
            <div class="section-title">
                <h1 style="font-size:xx-large; font-weight: bold; margin-bottom: 30px">Download Project Source Code</h1>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-6 col-md-6 portfolio-item">
                    <a href="https://drive.google.com/drive/folders/1WrbpZCLKYFa_1zty_uUtjJJGiGu67dke?usp=sharing" target="_blank" style="text-decoration: none; color: inherit;">
                        <h2 style="font-size:larger" class="text-center">InCELLIgence Hub</h2>
                        <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                            <img src="{{ asset('asset/image/incelligence-hub.png') }}" class="img-fluid" alt="Incelligence Hub">
                            <div class="portfolio-info">
                                <p>An interactive learning website targeted for young students.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item">
                    <a href="https://drive.google.com/drive/folders/1WrbpZCLKYFa_1zty_uUtjJJGiGu67dke?usp=sharing" target="_blank" style="text-decoration: none; color: inherit;">
                        <h2 style="font-size:larger" class="text-center">Mind Whisper</h2>
                        <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                            <img src="{{ asset('asset/image/mind-whisper.png') }}" class="img-fluid" alt="Mind Whisper">
                            <div class="portfolio-info">
                                <p>A helpful website for individuals struggling with their mental health.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item">
                    <a href="https://drive.google.com/drive/folders/1WrbpZCLKYFa_1zty_uUtjJJGiGu67dke?usp=sharing" target="_blank" style="text-decoration: none; color: inherit;">
                        <h2 style="font-size:larger" class="text-center">University Logical Network Design</h2>
                        <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                            <img src="{{ asset('asset/image/logic-design.png') }}" class="img-fluid" alt="University Logical Network Design">
                            <div class="portfolio-info">
                                <p>Network Design for Bicol University. Includes simulation in packet tracer.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 portfolio-item">
                    <a href="https://drive.google.com/drive/folders/1WrbpZCLKYFa_1zty_uUtjJJGiGu67dke?usp=sharing" target="_blank" style="text-decoration: none; color: inherit;">
                        <h2 style="font-size:larger" class="text-center">JFV Library Management System</h2>
                        <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                            <img src="{{ asset('asset/image/jfv-lms.png') }}" class="img-fluid" alt="JFV Library Management System">
                            <div class="portfolio-info">
                                <p>JAVA-based application for a Library Management System.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
