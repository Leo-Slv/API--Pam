<script>
  // Mova a declaração das variáveis para antes das funções
  const nome = document.getElementById("name");
  const categoria = document.getElementById("categoria");

  // Declare as funções abaixo
  async function get() {
    try {
      const response = await fetch(
        "http://localhost/api/testeapi.php/cliente",
        {
          method: "GET",
          headers: {
            "Content-Type": "application/json",
          },
        }
      );
      const data = await response.json(); // obtém resposta
      alert(JSON.stringify(data)); // mostra
    } catch (error) {
      console.error("Erro ao executar solicitação GET:", error);
    }
  }

  async function post() {
    const nomeValue = nome.value; // Captura o valor do input
    const categoriaValue = categoria.value; // Captura o valor do input

    try {
      const response = await fetch(
        "http://localhost/api/testeApi.php/cliente",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            nome: nomeValue,
            categoria: categoriaValue,
          }),
        }
      );
      const data = await response.json(); // Aguarda o resultado da resposta
      alert(JSON.stringify(data));
    } catch (error) {
      console.error("Erro ao executar solicitação POST:", error);
    }
  }

  // As funções postLogin, put e del permanecem inalteradas
</script>