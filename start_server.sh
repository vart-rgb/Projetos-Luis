#!/bin/bash

# Verificar se a porta foi fornecida
if [ -z "$1" ]; then
    echo "Uso: $0 <porta>"
    exit 1
fi

PORT=$1
LOG_DIR="$HOME/browser-sync_logs"
LOG_FILE="$LOG_DIR/log_$PORT.txt"

# Criar o diretório de logs se não existir
mkdir -p "$LOG_DIR"

# Verificar se o PHP está presente e se há arquivos PHP no diretório
if command -v php &>/dev/null && ls *.php &>/dev/null; then
    echo "Arquivos PHP encontrados. Usando servidor PHP embutido."
    nohup browser-sync start --proxy "localhost:8000" --port "$PORT" --files "**/*.html, **/*.php, **/*.css, **/*.js" --log-level "info" > "$LOG_FILE" 2>&1 &
    # Iniciar o servidor PHP em segundo plano (se necessário para o proxy)
    nohup php -S localhost:8000 &
else
    echo "Nenhum arquivo PHP encontrado. Iniciando o browser-sync diretamente."
    nohup browser-sync start --server --port "$PORT" --files "**/*.html, **/*.css, **/*.js" --log-level "info" > "$LOG_FILE" 2>&1 &
fi

# Obter o PID do último processo em segundo plano
PID=$!

echo "Servidor browser-sync iniciado na porta $PORT."
echo "Logs salvos em: $LOG_FILE"
echo "Para visualizar os logs em tempo real, use 'tail -f $LOG_FILE'"
echo "PID do processo: $PID"

# Exibir os logs em tempo real
tail -f "$LOG_FILE"

