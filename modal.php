<?php
require_once "header.php";
?>

<!-- Modal de Upload -->
<div id="fade" class="hide"></div>
  <section id="modal" class="bg-slate-900 hide w-6/12 p-4 rounded-lg border-white border-4">
    <header id="modal-header">
      <tittle class="text-white text-2xl font-bold">
        Cadastrar
      </tittle>
    </header>
    <main class="text-white font-bold grid grid-cols-1 gap-4 p-4">
      <label>Nome</label>
      <input id="name"type="text" rows="1" class="rounded-lg text-slate-900 text-xl pl-2" placeholder="Insira o Nome"></input>
      <label>Categoria</label>
      <input id="categoria" type="text" rows="1" class="rounded-lg text-slate-900 text-xl pl-2" placeholder="Insira a Categoria"></input>
    </main>
    <footer class="flex align-end justify-end">
      <button class="bg-blue-700 text-white w-20 rounded-lg p-2 font-bold text-sm mr-2" onclick="post()">Cadastrar</button>
      <button id="close-modal" class="bg-red-600 text-white w-20 rounded-lg p-2 font-bold text-sm">Fechar</button>
    </footer>
  </section>
<?php
  require_once "script.php";
?>