@extends('components.layout')

@section('conteudo')

    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{url('css/styled_cep.css')}}">

    <h1>Buscar Cep</h1>

    <!-- Inicio do formulário -->
    <form>
    <div>
        <label> Insira o Cep:
            <input placeholder="Ex: 03169-040" name="cep" type="text" id="cep" value="" size="10" maxlength="9" />
        </label><br />
        <button type="button" onclick="buscarCEP()" class="btn-buscar">Buscar</button>
    </div>

    <div>
        <h4> O Cep inserido corresponde a: </h4>
        <label>Rua:
            <input name="rua" type="text" id="rua" size="60" />
        </label><br />
        <label>Bairro:
            <input name="bairro" type="text" id="bairro" size="40" />
        </label><br />
        <label>Cidade:
            <input name="cidade" type="text" id="cidade" size="40" />
        </label><br />
        <label>Estado:
            <input name="uf" type="text" id="uf" size="2" />
        </label><br />
        <label>IBGE:
            <input name="ibge" type="text" id="ibge" size="8" />
        </label><br />
        <br>

    <input type="button" onclick="limparFormularioCEP()" class="btn-limpar" value="Limpar">
    </div>

    
    </form>


    <!-- Adicionando Javascript -->
    <script>
        function limparFormularioCEP() {
            document.getElementById('rua').value = '';
            document.getElementById('bairro').value = '';
            document.getElementById('cidade').value = '';
            document.getElementById('uf').value = '';
            document.getElementById('ibge').value = '';
            document.getElementById('cep').value = '';
        }

        function preencherFormularioCEP(conteudo) {
            if (!("erro" in conteudo)) {
                document.getElementById('rua').value = conteudo.logradouro;
                document.getElementById('bairro').value = conteudo.bairro;
                document.getElementById('cidade').value = conteudo.localidade;
                document.getElementById('uf').value = conteudo.uf;
                document.getElementById('ibge').value = conteudo.ibge;
            } else {
                limparFormularioCEP();
                alert("CEP não encontrado.");
            }
        }

        function buscarCEP() {
            var cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (cep !== '') {
                var validacep = /^[0-9]{8}$/;

                if (validacep.test(cep)) {
                    limparFormularioCEP();

                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', 'https://viacep.com.br/ws/' + cep + '/json/');
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            var conteudo = JSON.parse(xhr.responseText);
                            preencherFormularioCEP(conteudo);
                        } else {
                            limparFormularioCEP();
                            alert("CEP não encontrado.");
                        }
                    };
                    xhr.send();
                } else {
                    limparFormularioCEP();
                    alert("Formato de CEP inválido.");
                }
            } else {
                limparFormularioCEP();
            }
        }
    </script>


    @endsection
    