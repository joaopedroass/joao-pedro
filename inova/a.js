function atualizarHorarios() {
    const turno = document.getElementById("turno").value;
    const aulaSelect = document.getElementById("aula");

    // Limpa as opções anteriores
    aulaSelect.innerHTML = '';

    // Opções de horários por turno
    const horarios = {
        M: [
            { value: "1", label: "7:30-8:20" },
            { value: "2", label: "8:20-9:10" },
            { value: "3", label: "9:10-10:00" },
            { value: "4", label: "10:20-11:10" },
            { value: "5", label: "11:10-12:00" },
            { value: "6", label: "13:00-13:50" },
            { value: "7", label: "13:50-14:40" },
            { value: "8", label: "14:40-15:30" },
        ],
        N: [
            { value: "6", label: "13:00-13:50" },
            { value: "7", label: "13:50-14:40" },
            { value: "8", label: "14:40-15:30" },
        ]
    };

    // Adiciona uma opção padrão
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = "Selecione o horário";
    aulaSelect.appendChild(defaultOption);

    // Preenche os horários conforme o turno
    if (horarios[turno]) {
        horarios[turno].forEach(horario => {
            const option = document.createElement("option");
            option.value = horario.value;
            option.text = horario.label;
            aulaSelect.appendChild(option);
        });
    }
  }
