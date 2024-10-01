<script>
  // Mova a declaração das variáveis para antes das funções
  const nome = document.getElementById("name");
  const categoria = document.getElementById("categoria");

  // Declare as funções abaixo
  async function get() {
    try {
      const response = await fetch(
        "http://localhost/API--Pam/testeapi.php/cliente",
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
        "http://localhost/API--Pam/testeApi.php/cliente",
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

  async function postLogin() {
        try {
          const response = await fetch(
            "https://demo7802866.mockable.io/login",
            {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                user: "teste",
                password: "123",
              }),
            }
          );
          const data = await response.json(); // Aguarda o resultado da resposta
          alert(JSON.stringify(data.token));
        } catch (error) {
          console.error("Erro ao executar solicitação POST:", error);
        }
      }
      async function put() {
        try {
          const response = await fetch(
            "http://localhost/API--Pam/testeapi.php/cliente/1",
            {
              method: "PUT",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                nome: "Cliente Atualizado",
                categoria: "Categoria B",
              }),
            }
          );
          const data = await response.json(); // Aguarda o resultado da resposta
          alert(JSON.stringify(data));
        } catch (error) {
          console.error("Erro ao executar solicitação PUT:", error);
        }
      }

      async function del() {
        try {
          const response = await fetch(
            "http://localhost/API--Pam/testeapi.php/cliente/1",
            {
              method: "DELETE",
            }
          );
          const data = await response.json(); // Aguarda o resultado da resposta
          alert(JSON.stringify(data));
        } catch (error) {
          console.error("Erro ao executar solicitação DELETE:", error);
        }
      }
    </script>