@extends('layouts.user')

@section('content')
<div class="container">
                <div class="main-content">
                    <h1 class="welcome-text">Selamat Datang, {{ Auth::user()->name ?? 'Alumni' }}! 👋</h1>
                    
                    <!-- Study Tracer Information -->
                    <div class="info-card">
                        <h3><i class="fas fa-info-circle me-2"></i>Apa itu Study Tracer?</h3>
                        <p>Study Tracer adalah studi pelacakan jejak lulusan/alumni yang dilakukan untuk mengetahui outcome pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia kerja. Dengan study tracer, institusi pendidikan dapat memperoleh informasi yang berharga tentang keberhasilan lulusan dalam karier mereka.</p>
                    </div>

                    <div class="info-card">
                        <h3><i class="fas fa-bullseye me-2"></i>Tujuan Study Tracer</h3>
                        <p>Study tracer bertujuan untuk mengumpulkan data yang berguna bagi pengembangan institusi, termasuk:
                        <br>• Evaluasi relevansi kurikulum dengan kebutuhan pasar kerja
                        <br>• Analisis kompetensi lulusan di dunia kerja
                        <br>• Umpan balik untuk peningkatan kualitas layanan pendidikan
                        <br>• Pemetaan kesempatan kerja bagi lulusan baru</p>
                    </div>

                    <div class="info-card">
                        <h3><i class="fas fa-users me-2"></i>Manfaat Bagi Alumni</h3>
                        <p>Partisipasi Anda dalam study tracer memberikan berbagai manfaat:
                        <br>• Membantu meningkatkan kualitas pendidikan bagi generasi mendatang
                        <br>• Memperluas jaringan alumni dan kesempatan kolaborasi
                        <br>• Mendapatkan informasi tentang peluang pengembangan karier
                        <br>• Berkontribusi pada pengembangan almamater</p>
                    </div>

                    <div class="text-center mt-5">
                        <a href="{{ route('alumni.register') }}" class="btn btn-survey">
                            <i class="fas fa-clipboard-list me-2"></i>Isi Kuisioner Study Tracer
                        </a>
                    </div>
                </div>
                <div class="testimonial-section">
    <style>
        .testimonial-section {
            padding: 4rem 0;
            background: #ffffff;
            margin-top: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .testimonial-label {
            color: #3498db;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }

        .testimonial-heading {
            color: #2c3e50;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonial-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 2rem;
            margin: 1rem;
            border: 1px solid #e1e8ed;
            transition: all 0.3s ease;
            text-align: center;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            border: 3px solid #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .testimonial-quote {
            color: #5a6c7d;
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 1.5rem 0;
            position: relative;
            padding: 0 1.5rem;
        }

        .quote-icon {
            color: #3498db;
            font-size: 1.5rem;
            opacity: 0.5;
        }

        .testimonial-author {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .testimonial-status {
            color: #3498db;
            font-size: 0.9rem;
        }

        .swiper-pagination-bullet {
            background: #3498db;
        }

        .swiper-pagination-bullet-active {
            background: #2980b9;
        }

        /* Optional: Add responsive styles */
        @media (max-width: 768px) {
            .testimonial-heading {
                font-size: 1.5rem;
            }
            
            .testimonial-card {
                margin: 0.5rem;
            }
        }
    </style>
    
    <div class="container">
        <div class="testimonial-header">
            <p class="testimonial-label">TESTIMONIAL ALUMNI</p>
            <h2 class="testimonial-heading">Apa Kata Alumni Tentang Study Tracer?</h2>
        </div>

        <div class="swiper mySwiperTestimoni">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        @auth
                            @if(Auth::user()->avatar)
                                <img class="testimonial-avatar" src="/avatars/{{ Auth::user()->avatar }}" alt="User Avatar">
                            @else
                                <img class="testimonial-avatar" src="{{ asset('images/Sayang.jpg') }}" alt="Default Avatar">
                            @endif
                            <div class="testimonial-quote">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p>Study tracer sangat membantu saya dalam memberikan feedback untuk almamater. Sistem yang mudah digunakan dan pertanyaan yang relevan dengan kondisi lapangan.</p>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                            <p class="testimonial-author">{{ Auth::user()->name }}</p>
                        @else
                            <img class="testimonial-avatar" src="{{ asset('images/Sayang.jpg') }}" alt="Default Avatar">
                            <div class="testimonial-quote">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p>Study tracer sangat membantu saya dalam memberikan feedback untuk almamater. Sistem yang mudah digunakan dan pertanyaan yang relevan dengan kondisi lapangan.</p>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                            <p class="testimonial-author">Alumni</p>
                        @endauth
                        <p class="testimonial-status">Alumni Angkatan 2020</p>
                    </div>
                </div>
                
                <!-- Anda bisa menambahkan slide testimonial lainnya di sini -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
            </div>
@endsection