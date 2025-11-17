@extends('layouts.app')

@section('title', 'Khiane Aquino - IT Student Portfolio')
@section('description', 'Personal portfolio of an IT student showcasing projects, skills, and achievements')

@section('content')
    <!-- Home Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        Hi, I'm <span class="highlight">Khiane Jethron Aquino</span>
                    </h1>
                    <h2 class="hero-subtitle">IT Student & Aspiring Developer</h2>
                    <p class="hero-description">
                        Passionate about technology and software development. Currently pursuing my degree in Information Technology 
                        while building innovative projects and expanding my skills in web development, programming, and system design.
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="profile-card">
                        <div class="profile-image">
                            <img src="{{ asset('assets/profile.jpeg') }}" alt="Profile Picture" id="profile-img">
                        </div>
                        <div class="profile-bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    @include('sections.projects')
    @include('sections.certificates')
    @include('sections.skills')
    @include('sections.resume')
    @include('sections.contact')
@endsection

