import csv
import mysql.connector

# Configurações de conexão com a base de dados
db_config = {
    'host': 'localhost',    # Host do MySQL
    'user': 'root',  # O nome de utilizador do MySQL
    'password': '',  # A senha do MySQL
    'database': 'projeto_uzo'  # Nome da base de dados
}

# Nome do arquivo CSV
csv_file = 'Uzo/bd/codigos_postais_formatado.csv'

try:
    # Estabelecer conexão com a base de dados
    connection = mysql.connector.connect(**db_config)

    # Preparar o cursor (objeto que permite executar comandos SQL na base de dados)
    cursor = connection.cursor()

    # Ler o arquivo CSV e inserir os dados na tabela
    # "with" permite abrir e usar um arquivo de forma segura. Após o final da condição, fecha o arquivo
    # mode 'r' = read (modo leitura) | newline='' - quebras de linha como string vazia
    # errors 'replace' - indica que caracteres inválidos serão substituídos por um caractere de substituição padrão
    with open(csv_file, mode='r', newline='', encoding='utf-8', errors='replace') as file:
        # Esta função cria um leitor que interpreta cada linha do arquivo CSV como um dicionário onde as chaves são os nomes das colunas.
        csv_reader = csv.DictReader(file, delimiter=';')
        for row in csv_reader:
            morada = row['morada']
            num_cod_postal = int(row['num_cod_postal'])
            ext_cod_postal = int(row['ext_cod_postal'])
            desig_postal = row['desig_postal']

            # Inserir dados na tabela codigos_postais
            insert_query = "INSERT INTO codigos_postais (morada, num_cod_postal, ext_cod_postal, desig_postal) VALUES (%s, %s, %s, %s)"
            values = (morada, num_cod_postal, ext_cod_postal, desig_postal)
            cursor.execute(insert_query, values)

    # Commit das mudanças na base de dados
    connection.commit()

    print("Dados inseridos com sucesso na tabela 'codigos_postais'. (python)")

except mysql.connector.Error as err:
    print(f"Erro: {err}")

finally:
    # Fechar o cursor e a conexão
    if cursor:
        cursor.close()
    if connection:
        connection.close()