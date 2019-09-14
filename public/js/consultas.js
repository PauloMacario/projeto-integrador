(function() {
    const CEP = document.querySelector("#CEP");
    const rua = document.querySelector("#endereco");
    const bairro = document.querySelector("#bairro");
    const localidade = document.querySelector("#cidade");

    CEP.oninput = () => {
        console.log(CEP.value)
        if (CEP.value === "" || CEP.value.length < 9) {
            rua.value = "";
            bairro.value = "";
            localidade.value = "";
        }

        fetch(`https://viacep.com.br/ws/${CEP.value}/json/`)
            .then(response => response.json())
            .then(data => {
                rua.value = data.logradouro;
                bairro.value = data.bairro;
                localidade.value = data.localidade;
            });

        CEP.value = CEP.value.replace(/D/g, "").replace(/^(\d{5})(\d)/, "$1-$2");
    };
})();