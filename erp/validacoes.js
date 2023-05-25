// Função para validar o formulário de cadastro de veículos
function validarFormulario() {
    var placa = document.getElementById('placa').value;
    var renavam = document.getElementById('renavam').value;
    var cpfCnpj = document.getElementById('cpfCnpj').value;
    var tipoVeiculo = document.getElementById('tipoVeiculo').value;
    var antt = document.getElementById('antt').value;
  
    // Verifica se os campos estão vazios
    if (placa === '' || renavam === '' || cpfCnpj === '' || tipoVeiculo === '' || antt === '') {
      alert('Por favor, preencha todos os campos.');
      return false;
    }
  
    // Realize outras validações conforme necessário
  
    // Retorne true se o formulário estiver válido
    return true;
  }
  