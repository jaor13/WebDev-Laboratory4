@extends('components.layout')

@section('title', 'About')

@section('content')
    <main>
        <section class="about-me container">
            <!-- Define an array of profiles to loop through -->
            @php
                $profiles = [
                    [
                        'image' => 'asset/image/jar.png',
                        'name' => 'Profile 1',
                        'description' => "I’m an undergraduate student with a strong passion for the IT field, particularly in networking, where I enjoy working with routers, PC configurations, and various setups. While I also have an interest in coding, my enthusiasm leans more towards front-end development. I love creating intuitive and visually appealing user interfaces, blending my technical skills with creativity to bring ideas to life.",
                        'birthday' => '13 June 2003',
                        'phone' => '+63 908-593-0667',
                        'city' => 'Tabaco, Albay',
                        'email' => 'rjamesanthony48@gmail.com',
                    ],
                    [
                        'image' => 'asset/image/pd.png',
                        'name' => 'Profile 2',
                        'description' => "I'm an undergraduate IT student passionate about creating digital art, especially graphic and web design. I also enjoy exploring new things, whether they relate to my field or not, always searching for what excites me the most and what I love doing.",
                        'birthday' => '8 September 2003',
                        'phone' => '+63 970-610-4541',
                        'city' => 'Sto. Domingo, Albay',
                        'email' => 'yandydiane08@gmail.com',
                    ],
                    [
                        'image' => 'asset/image/zaro.jpg',
                        'name' => 'Profile 3',
                        'description' => "As an undergraduate student aspiring to be a web developer, I am currently honing my skills in web development and design. I have a passion for creating intuitive, functional websites and am eager to continue learning about front-end and back-end development.",
                        'birthday' => '7 November 2002',
                        'phone' => '+639917768905',
                        'city' => 'Legazpi City, Albay',
                        'email' => 'zaro.quintanilla.2@gmail.com',
                    ],
                ];
            @endphp

            <!-- Loop through each profile -->
            @foreach ($profiles as $profile)
                <div class="container" id="cont-abt">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="{{ asset($profile['image']) }}" class="img-fluid" alt="{{ $profile['name'] }}">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <p>{{ $profile['description'] }}</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ $profile['birthday'] }}</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $profile['phone'] }}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ $profile['city'] }}</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{ $profile['email'] }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
@endsection
