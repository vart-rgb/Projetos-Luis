#!/bin/bash

echo "Listando todos os processos de servidores web em execução..."
echo "---------------------------------------------------------"

# Encontra os processos de servidores e exibe a lista
PIDS=$(ps aux | grep -E "php -S|python -m http.server|node" | grep -v "grep" | awk '{print $2":"$11,$12,$13}')

# Verifica se há processos em execução
if [ -z "$PIDS" ]; then
    echo "Nenhum processo de servidor web encontrado."
    exit 0
fi

# Converte os PIDs em um array para facilitar a seleção
IFS=$'\n' read -r -a PID_ARRAY <<< "$PIDS"

echo "ID  PID: Comando"
echo "--- ----------------------------------------"
for i in "${!PID_ARRAY[@]}"; do
    echo "$i: ${PID_ARRAY[$i]}"
done

echo "---------------------------------------------------------"

# Pergunta ao usuário o que fazer
while true; do
    read -p "Deseja fechar algum processo? (S/N): " response
    case $response in
        [Ss]* )
            read -p "Digite o ID do processo que deseja fechar (ou 'q' para sair): " ID_TO_KILL
            if [ "$ID_TO_KILL" == "q" ]; then
                break
            fi

            if [ -n "${PID_ARRAY[ID_TO_KILL]}" ]; then
                # Extrai o PID do array
                PID_TO_KILL=$(echo "${PID_ARRAY[ID_TO_KILL]}" | awk -F':' '{print $1}')
                echo "Fechando o processo com PID: $PID_TO_KILL..."
                kill -9 "$PID_TO_KILL"
                if [ $? -eq 0 ]; then
                    echo "Processo $PID_TO_KILL fechado com sucesso."
                else
                    echo "Erro ao fechar o processo $PID_TO_KILL."
                fi
                break
            else
                echo "ID de processo inválido. Por favor, tente novamente."
            fi
            ;;
        [Nn]* )
            echo "Nenhum processo será fechado. Saindo..."
            break
            ;;
        * )
            echo "Resposta inválida. Por favor, responda 'S' ou 'N'."
            ;;
    esac
done

