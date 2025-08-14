const agora = new Date();
const diasDaSemana = [
    'Domingo',
    'Segunda-Feira',
    'Terça-Feira',
    'Quarta-Feira',
    'Quinta-Feira',
    'Sexta-Feira',
    'Sábado'
  ];
  const nomeDoDia = diasDaSemana[agora.getDay()];

document.getElementById("divAgora").textContent = nomeDoDia;
