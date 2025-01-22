const tarefas = JSON.parse(document.getElementById('tarefas').textContent);

tarefas.forEach(tarefa => {
    // Criar o card para cada tarefa
    const card = `
    <section>
        <form id="form" action="../php/updateTarefa.php" method="post">
            <p>
                <strong>Descrição:</strong>
                <input type="text" value="${tarefa.descricao}">
            </p>

            <p>
                <strong>Setor:</strong>
                <input type="text" value="${tarefa.setor}">
            </p>

            <p>
                <strong>Prioridade:</strong>
                <input type="text" value="${tarefa.prioridade}">
            </p>

            <p>
                <strong>Vinculado a:</strong>
                <input type="text" value="${tarefa.usuario}">
            </p>

            <p>
                <strong>Status:</strong>

                <select name="status" id="status" onchange="this.form.submit()">
                    <option value="${tarefa.status}">A fazer</option>
                    <option value="${tarefa.status}">Fazendo</option>
                    <option value="${tarefa.status}">Pronto</option>
                </select>
                <input type="hidden" name="id" value="${tarefa.id}">
            </p>
        </form>
    </section>
    `;

    // Inserir o card na coluna correta com base no status
    if (tarefa.status == 1) {
        document.getElementById('coluna1').innerHTML += card;
    } else if (tarefa.status == 2) {
        document.getElementById('coluna2').innerHTML += card;
    } else if (tarefa.status == 3) {
        document.getElementById('coluna3').innerHTML += card;
    }
});