<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
     <title>Blog</title>
     <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">

     <div class="min-h-full"> 
   
       <x-navbar></x-navbar>
       
       <x-header>Halaman Blog</x-header>
   
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <div class="flexArtikel">
               <div>
                    <h4>Artikel Pertama</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolor sunt inventore, laborum expedita deserunt ea dicta enim dolorem neque, aut modi fugiat eaque laudantium eveniet eos nam! Aspernatur, in!</p>
               </div>
               <div>
                    <h4>Artikel Kedua</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolor sunt inventore, laborum expedita deserunt ea dicta enim dolorem neque, aut modi fugiat eaque laudantium eveniet eos nam! Aspernatur, in!</p>
               </div>
          </div>
     
          <article>
               <h3>haloo</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est odit blanditiis a quo distinctio modi maxime dicta quibusdam laborum libero? Quis unde suscipit quasi odit atque illum maiores libero cumque.</p>
          </article>
     
          <article>
               <h3>haloo</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est odit blanditiis a quo distinctio modi maxime dicta quibusdam laborum libero? Quis unde suscipit quasi odit atque illum maiores libero cumque.</p>
          </article>
          </div>
        </main>
   
   
      </div>
      
   </body>
</html>