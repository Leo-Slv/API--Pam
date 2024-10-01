
  
  <body class="bg-slate-900">
    <section class="grid gap-20">
      <tittle class="flex align-center justify-center text-white font-bold text-4xl mt-8">
        <a>Teste de Requisições</a>
      </tittle>
      <main class="grid grid-cols-4 p-12 gap-4">
        <button class="bg-white text-slate-900 rounded-lg p-4 font-bold" onclick="get()">GET</button>
        <button class="bg-white text-slate-900 rounded-lg p-4 font-bold" id="cadastrar">POST</button>
        <button class="bg-white text-slate-900 rounded-lg p-4 font-bold" onclick="put()">PUT</button>
        <button class="bg-white text-slate-900 rounded-lg p-4 font-bold" onclick="del()">DELETE</button>
      </main>
    </section>
    
  <?php
  require_once "modal.php";

  ?>
  </body>
</html>