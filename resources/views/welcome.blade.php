<!-- Pastikan Tailwind dan FontAwesome sudah terhubung -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Artikel Menarik</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeUp {
      animation: fadeUp 0.8s ease-out forwards;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-white to-gray-100 dark:from-gray-900 dark:to-gray-800 min-h-screen flex items-center justify-center">
  <div class="text-center p-6 rounded-xl shadow-xl bg-white dark:bg-gray-900 animate-fadeUp">
    <h1 class="text-3xl font-semibold text-gray-800 dark:text-white mb-4">
      <i class="fas fa-lightbulb text-yellow-400 mr-2"></i>Artikel Menarik
    </h1>
    <a
      href="/articles"
      class="group inline-flex flex-col items-center justify-center gap-2 p-6 bg-[#fef2f2] dark:bg-[#2d1c1c] rounded-lg transition-transform hover:-translate-y-1 hover:shadow-lg"
    >
      <i class="fas fa-newspaper text-5xl text-[#F53003] group-hover:scale-110 transition-transform duration-300"></i>
      <p class="text-base text-[#706f6c] dark:text-[#e0dfdb] group-hover:text-[#F53003] transition-colors">
        Klik untuk membaca artikel terbaru kami
      </p>
    </a>
  </div>
</body>
