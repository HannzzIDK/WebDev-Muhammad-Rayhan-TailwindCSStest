<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | Hubungi Kami</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/blog">Blog</a>
        <a href="/contact" class="active">Contact</a>
    </nav>

    <div class="container">
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
    </div>

        <footer>
        <p>&copy; Web Development</p>
    </footer>


    <script src="/js/contact.js"></script>
</body>
</html>