@extends('layouts.app')

@section('content')
      <article class="card">
        <h1>Hubungi Kami (Contact Us)</h1>
        <p>Jika ada pertanyaan, diskusi, atau keperluan seputar materi perkuliahan dan kolaborasi proyek, silakan hubungi saluran berikut:</p>

        <ul class="contact-list">
            <li>
                <strong>Email Resmi</strong>
                <span>: <a href="mailto:{{ $email ?? 'rayhanakunblog@gmail.com' }}">{{ $email ?? 'rayhanakunblog@gmail.com' }}</a></span>
            </li>
            <li>
                <strong>GitHub</strong>
                <span>: <a href="{{ $github ?? 'https://github.com/HannzzIDK' }}" target="_blank">{{ $github ?? 'https://github.com/HannzzIDK' }}</a></span>
            </li>
            <li>
                <strong>LinkedIn</strong>
                <span>: <a href="{{ $linkedin ?? 'https://www.linkedin.com/in/muhammad-rayhan-hans' }}" target="_blank">{{ $linkedin ?? 'linkedin.com/in/muhammad-rayhan-hans' }}</a></span>
            </li>
        </ul>
    </article>
@endsection