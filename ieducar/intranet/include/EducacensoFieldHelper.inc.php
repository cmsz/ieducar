<?php

class EducacensoFieldHelper {
 
    public static $rows = array (
            "00" => "Escola",
            "10" => "Escola/Estrutura",
            "20" => "Turma",
            "30" => "Profissional",
            "40" => "Profissional/Documentos",
            "50" => "Profissional/Variaveis",
            "51" => "Profissional/Docentes",
            "60" => "Alunos",
            "70" => "Alunos/Documentos",
            "80" => "Alunos/Matricula" 
    );
    public static $fields = array (
            "00" => array ( // Escola
                    1 => "tipo_registro",
                    2 => "codigo_inep",
                    3 => "situacao_funcionamento",
                    4 => "inicio_ano_letivo",
                    5 => "termino_ano_letivo",
                    6 => "nome",
                    7 => "latitude",
                    8 => "longitude",
                    9 => "cep",
                    10 => "endereco",
                    11 => "endereco_numero",
                    12 => "complemento",
                    13 => "bairro",
                    14 => "_uf",
                    15 => "_municipio",
                    16 => "_distrito",
                    17 => "_ddd",
                    18 => "telefone",
                    19 => "telefone_publico",
                    20 => "telefone_outro",
                    21 => "fax",
                    22 => "email",
                    23 => "_orgao_ensino",
                    24 => "dependencia_administrativa",
                    25 => "zona_localizacao",
                    26 => "categoria_escola_privada",
                    27 => "conveniada_poder_publico",
                    28 => "mantenedora_setor_privado_pessoa_fisica",
                    29 => "mantenedora_setor_privado_sindicato_cooperativa",
                    30 => "mantenedora_setor_privado_ong_oscip",
                    31 => "mantenedora_instituicoes_sem_fins_lucrativos",
                    32 => "mantenedora_sistema_s",
                    33 => "cnpj_mantenedora",
                    34 => "cnpj_escola_privada",
                    35 => "regulamentacao" 
            ),
            "10" => array ( // Escola/Estrutura
                    1 => "tipo_registro",
                    2 => "codigo_inep",
                    3 => "cpf_gestor",
                    4 => "nome_gestor",
                    5 => "cargo_gestor",
                    6 => "email_gestor",
                    7 => "local_funcionamento_predio",
                    8 => "local_funcionamento_igreja",
                    9 => "local_funcionamento_empresa",
                    10 => "local_funcionamento_casa_professor",
                    11 => "local_funcionamento_outra_escola",
                    12 => "local_funcionamento_paiol",
                    13 => "local_funcionamento_unidade_socioeducativa",
                    14 => "local_funcionamento_unidade_prisional",
                    15 => "local_funcionamento_outros",
                    16 => "forma_ocupacao_predio",
                    17 => "predio_compartilhado",
                    18 => "codigo_inep_escola_compartilhada_1",
                    19 => "codigo_inep_escola_compartilhada_2",
                    20 => "codigo_inep_escola_compartilhada_3",
                    21 => "codigo_inep_escola_compartilhada_4",
                    22 => "codigo_inep_escola_compartilhada_5",
                    23 => "codigo_inep_escola_compartilhada_6",
                    24 => "agua_consumida",
                    25 => "agua_abastecimento_rede_publica",
                    26 => "agua_abastecimento_poco_artesiano",
                    27 => "agua_abastecimento_cisterna",
                    28 => "agua_abastecimento_corrego",
                    29 => "agua_abastecimento_inexistente",
                    30 => "energia_eletrica_rede_publica",
                    31 => "energia_eletrica_gerador",
                    32 => "energia_eletrica_outros",
                    33 => "energia_eletrica_inexistente",
                    34 => "esgoto_rede_publica",
                    35 => "esgoto_fossa",
                    36 => "esgoto_inexistente",
                    37 => "destinacao_lixo_coleta",
                    38 => "destinacao_lixo_queima",
                    39 => "destinacao_lixo_descarte",
                    40 => "destinacao_lixo_recicla",
                    41 => "destinacao_lixo_enterra",
                    42 => "destinacao_lixo_outros",
                    43 => "dependencias_diretoria",
                    44 => "dependencias_sala_professores",
                    45 => "dependencias_secretaria",
                    46 => "dependencias_laboratorio_informatica",
                    47 => "dependencias_laboratorio_ciencias",
                    48 => "dependencias_recursos_multifuncionais",
                    49 => "dependencias_quadra_esportes_coberta",
                    50 => "dependencias_quadra_esportes_descoberta",
                    51 => "dependencias_cozinha",
                    52 => "dependencias_biblioteca",
                    53 => "dependencias_sala_leitura",
                    54 => "dependencias_parque_infantil",
                    55 => "dependencias_bercario",
                    56 => "dependencias_banheiro_externo",
                    57 => "dependencias_banheiro_interno",
                    58 => "dependencias_banheiro_infantil",
                    59 => "dependencias_banheiro_deficientes",
                    60 => "dependencias_acessibilidade_fisica",
                    61 => "dependencias_banheiro_chuveiro",
                    62 => "dependencias_refeitorio",
                    63 => "dependencias_despensa",
                    64 => "dependencias_almoxarifado",
                    65 => "dependencias_auditorio",
                    66 => "dependencias_patio_coberto",
                    67 => "dependencias_patio_descoberto",
                    68 => "dependencias_alojamento_aluno",
                    69 => "dependencias_alojamento_professor",
                    70 => "dependencias_area_verde",
                    71 => "dependencias_lavanderia",
                    72 => "dependencias_outros",
                    73 => "numero_salas_aula",
                    74 => "numero_salas_aula_utilizadas",
                    75 => "equipamentos_tv",
                    76 => "equipamentos_vcr",
                    77 => "equipamentos_dvd",
                    78 => "equipamentos_parabolica",
                    79 => "equipamentos_copiadora",
                    80 => "equipamentos_retroprojetor",
                    81 => "equipamentos_impressora",
                    82 => "equipamentos_som",
                    83 => "equipamentos_data_show",
                    84 => "equipamentos_fax",
                    85 => "equipamentos_camera",
                    86 => "computadores",
                    87 => "computadores_administrativo",
                    88 => "computadores_alunos",
                    89 => "acesso_internet",
                    90 => "banda_larga",
                    91 => "total_funcionarios",
                    92 => "alimentacao_escolar",
                    93 => "aee",
                    94 => "atividade_complementar",
                    95 => "modalidade_regular",
                    96 => "modalidade_especial",
                    97 => "modalidade_eja",
                    98 => "etapas_regular_creche",
                    99 => "etapas_regular_infantil",
                    100 => "etapas_fundamental_8",
                    101 => "etapas_fundamental_9",
                    102 => "etapas_medio",
                    103 => "etapas_medio_integrado",
                    104 => "etapas_medio_magisterio",
                    105 => "etapas_medio_profissional",
                    106 => "etapas_especial_infantil_creche",
                    107 => "etapas_especial_infantil_pre",
                    108 => "etapas_especial_fundamental_8",
                    109 => "etapas_especial_fundamental_9",
                    110 => "etapas_especial_medio",
                    111 => "etapas_especial_medio_integrado",
                    112 => "etapas_especial_medio_magisterio",
                    113 => "etapas_especial_medio_profissional",
                    114 => "etapas_especial_eja_fundamental",
                    115 => "etapas_especial_eja_medio",
                    116 => "etapas_eja_fundamental",
                    117 => "etapas_eja_fundamental_projovem",
                    118 => "etapas_eja_medio",
                    119 => "ensino_fundamental_ciclos",
                    120 => "localizacao_diferenciada",
                    121 => "material_didatico_diversidade_nao_utiliza",
                    122 => "material_didatico_quilombola",
                    123 => "material_didatico_indigena",
                    124 => "educacao_indigena",
                    125 => "lingua_indigena",
                    126 => "lingua_portuguesa",
                    127 => "codigo_lingua_indigena",
                    128 => "cede_espaco_brasil_alfabetizado",
                    129 => "abre_finais_de_semana",
                    130 => "formacao_alternancia" 
            ),
            "20" => array ( // Turma
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_turma",
                    4 => "codigo_turma_escola",
                    5 => "nome_turma",
                    6 => "horario_inicial_hora",
                    7 => "horario_inicial_minuto",
                    8 => "horario_final_hora",
                    9 => "horario_final_minuto",
                    10 => "dias_domingo",
                    11 => "dias_segunda",
                    12 => "dias_terca",
                    13 => "dias_quarta",
                    14 => "dias_qunita",
                    15 => "dias_sexta",
                    16 => "dias_sabado",
                    17 => "tipo_atendimento",
                    18 => "participa_mais_educacao",
                    19 => "_codigo_atividade_1",
                    20 => "_codigo_atividade_2",
                    21 => "_codigo_atividade_3",
                    22 => "_codigo_atividade_4",
                    23 => "_codigo_atividade_5",
                    24 => "_codigo_atividade_6",
                    25 => "ensino_braille",
                    26 => "ensino_recursos_opticos_nao_opticos",
                    27 => "desenvolvimento_processos_mentais",
                    28 => "tecnicas_orientacao_mobilidade",
                    29 => "ensino_libras",
                    30 => "ensino_caa",
                    31 => "enriquecimento_curricular",
                    32 => "soroban",
                    33 => "informatica_acessivel",
                    34 => "ensino_lingua_portuguesa_escrita",
                    35 => "estrategias_autonomia",
                    36 => "modalidade",
                    37 => "_etapa_ensino",
                    38 => "_curso_profissional",
                    39 => "disciplinas_quimica",
                    40 => "disciplinas_fisica",
                    41 => "disciplinas_matematica",
                    42 => "disciplinas_biologia",
                    43 => "disciplinas_ciencias",
                    44 => "disciplinas_linguas_portugues",
                    45 => "disciplinas_linguas_ingles",
                    46 => "disciplinas_linguas_espanhol",
                    47 => "disciplinas_linguas_frances",
                    48 => "disciplinas_linguas_outras",
                    49 => "disciplinas_artes",
                    50 => "disciplinas_educacao_fisica",
                    51 => "disciplinas_historia",
                    52 => "disciplinas_geografia",
                    53 => "disciplinas_filosofia",
                    54 => "disciplinas_estudos_sociais",
                    55 => "disciplinas_sociologia",
                    56 => "disciplinas_informatica",
                    57 => "disciplinas_profissoinalizantes",
                    58 => "disciplinas_especiais",
                    59 => "disciplinas_socioculturais",
                    60 => "disciplinas_libras",
                    61 => "disciplinas_pedagogicas",
                    62 => "disciplinas_ensino_religioso",
                    63 => "disciplinas_lingua_indigena",
                    64 => "disciplinas_outras",
                    65 => "turma_sem_profissisonal" 
            ),
            "30" => array ( // Profissional sala de aula
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_profissional",
                    4 => "codigo_profissional_escola",
                    5 => "nome_profissional",
                    6 => "email",
                    7 => "numero_nis",
                    8 => "data_nascimento",
                    9 => "sexo",
                    10 => "raca",
                    11 => "nome_mae",
                    12 => "nacionalidade",
                    13 => "_pais_origem",
                    14 => "_uf_nascimento",
                    15 => "_municipio_nascimento",
                    16 => "deficiencia",
                    17 => "deficiencia_cegueira",
                    18 => "deficiencia_baixa_visao",
                    19 => "deficiencia_surdez",
                    20 => "deficiencia_auditiva",
                    21 => "deficiencia_surdocegueira",
                    22 => "deficiencia_fisica",
                    23 => "deficiencia_intelectual",
                    24 => "deficiencia_multipla" 
            ),
            "40" => array ( // Profissional: documentos e endere�o
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_profissional",
                    4 => "codigo_profissional_escole",
                    5 => "cpf",
                    6 => "zona_localizacao",
                    7 => "cep",
                    8 => "endereco",
                    9 => "numero",
                    10 => "complemento",
                    11 => "bairro",
                    12 => "_uf",
                    13 => "_municipio"
            ),
            "50" => array ( // Profissional/Dados variaveis
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_profissional",
                    4 => "codigo_profissional_escola",
                    5 => "escolaridade",
                    6 => "situacao_curso_superior_1",
                    7 => "formacao_complementacao_1",
                    8 => "_codigo_curso_1",
                    9 => "ano_inicio_curso_1",
                    10 => "ano_conclusao_curso_1",
                    11 => "tipo_instituicao_curso_1",
                    12 => "_instituicao_curso_1",
                    13 => "situacao_curso_superior_2",
                    14 => "formacao_complementacao_2",
                    15 => "_codigo_curso_2",
                    16 => "ano_inicio_curso_2",
                    17 => "ano_conclusao_curso_2",
                    18 => "tipo_instituicaocurso_2",
                    19 => "_instituicao_curso_2",
                    20 => "situacao_curso_superior_3",
                    21 => "formacao_complementacao_3",
                    22 => "_codigo_curso_3",
                    23 => "ano_inicio_curso_3",
                    24 => "ano_conclusao_curso_3",
                    25 => "tipo_instituicao_curso_3",
                    26 => "_instituicao_curso_3",
                    27 => "pos_especializacao",
                    28 => "pos_mestrado",
                    29 => "pos_doutorado",
                    30 => "pos_nenhum",
                    31 => "curso_creche",
                    32 => "curso_pre_escola",
                    33 => "curso_anos_iniciais_fundamental",
                    34 => "curso_anos_finais_fundamental",
                    35 => "curso_ensino_medio",
                    36 => "curso_eja",
                    37 => "curso_educacao_especial",
                    38 => "curso_educacao_indigena",
                    39 => "curso_educacao_campo",
                    40 => "curso_educacao_ambiental",
                    41 => "curso_direitos_humanos",
                    42 => "curso_genero",
                    43 => "curso_direitos_crianca_adolescente",
                    44 => "curso_relacoes_etinicorraciais",
                    45 => "curso_outros",
                    46 => "curso_nenhum" 
            ),
            "51" => array ( // Profissional/Dados docencia
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_profissional",
                    4 => "codigo_profissional_escola",
                    5 => "codigo_inep_turma",
                    6 => "codigo_turma_escola",
                    7 => "funcao",
                    8 => "situacao_funcional",
                    9 => "codigo_disciplina_1",
                    10 => "codigo_disciplina_2",
                    11 => "codigo_disciplina_3",
                    12 => "codigo_disciplina_4",
                    13 => "codigo_disciplina_5",
                    14 => "codigo_disciplina_6",
                    15 => "codigo_disciplina_7",
                    16 => "codigo_disciplina_8",
                    17 => "codigo_disciplina_9",
                    18 => "codigo_disciplina_10",
                    19 => "codigo_disciplina_11",
                    20 => "codigo_disciplina_12",
                    21 => "codigo_disciplina_13" 
            ),
            "60" => array ( // Alunos
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_aluno",
                    4 => "codigo_aluno_escola",
                    5 => "nome",
                    6 => "nis",
                    7 => "data_nascimento",
                    8 => "sexo",
                    9 => "raca",
                    10 => "filiacao",
                    11 => "nome_mae",
                    12 => "nome_pai",
                    13 => "nacionalidade",
                    14 => "_pais_origem",
                    15 => "_uf_nascimento",
                    16 => "_municipio_nascimento",
                    17 => "deficiencia",
                    18 => "deficiencia_cegueira",
                    19 => "deficiencia_baixa_visao",
                    20 => "deficiencia_surdez",
                    21 => "deficiencia_auditiva",
                    22 => "deficiencia_surdocegueira",
                    23 => "deficiencia_fisica",
                    24 => "deficiencia_intelectual",
                    25 => "deficiencia_multipla",
                    26 => "deficiencia_autismo",
                    27 => "deficiencia_asperger",
                    28 => "deficiencia_rett",
                    29 => "deficiencia_transtorno_desintegrativo",
                    30 => "deficiencia_superdotacao",
                    31 => "necessidade_auxilio_ledor",
                    32 => "necessidade_auxilio_transcricao",
                    33 => "necessidade_guia_interprete",
                    34 => "necessidade_interprete_libras",
                    35 => "necessidade_leitura_labial",
                    36 => "necessidade_ampliacao_16",
                    37 => "necessidade_ampliacao_20",
                    38 => "necessidade_ampliacao_24",
                    39 => "necessidade_braille",
                    40 => "necessidade_nenhum" 
            ),
            "70" => array ( // Alunos/documentos e endereco
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_aluno",
                    4 => "codigo_aluno_escola",
                    5 => "numero_identidade",
                    6 => "complemento_identidade",
                    7 => "_orgao_emissor",
                    8 => "_uf_emissor",
                    9 => "data_expedicao",
                    10 => "certidao_civil",
                    11 => "tipo_certidao_civil",
                    12 => "termo_certidao_civil",
                    13 => "folha_certidao_civil",
                    14 => "livro_certidao_civil",
                    15 => "data_emissao_certidao_civil",
                    16 => "_uf_cartorio",
                    17 => "_municipio_cartorio",
                    18 => "_codigo_cartorio",
                    19 => "numero_matricula",
                    20 => "numero_cpf",
                    21 => "numero_documento_estrangeiro",
                    22 => "numero_nis",
                    23 => "justificativa_falta_documentacao",
                    24 => "zona_localizacao_residencia",
                    25 => "cep",
                    26 => "endereco",
                    27 => "numero",
                    28 => "complemento",
                    29 => "bairro",
                    30 => "_uf",
                    31 => "_municipio" 
            ),
            "80" => array ( // Alunos/vinculo
                    1 => "tipo_registro",
                    2 => "codigo_inep_escola",
                    3 => "codigo_inep_aluno",
                    4 => "codigo_aluno_escola",
                    5 => "codigo_inep_turma",
                    6 => "codigo_escola_turma",
                    7 => "codigo_matricula",
                    8 => "turma_unificada",
                    9 => "_etapa",
                    10 => "escolarizacao_outro_espaco",
                    11 => "transporte_publico",
                    12 => "poder_publico_responsavel_transporte",
                    13 => "tipo_rodoviario_van",
                    14 => "tipo_rodoviario_microonibus",
                    15 => "tipo_rodoviario_onibus",
                    16 => "tipo_rodoviario_bicicleta",
                    17 => "tipo_rodoviario_tracao_animal",
                    18 => "tipo_rodoviario_outro",
                    19 => "tipo_aquaviario_5-",
                    20 => "tipo_aquaviario_5_15",
                    21 => "tipo_aquaviario_15_35",
                    22 => "tipo_aquaviario_35+",
                    23 => "tipo_ferroviario_trem_metro",
                    24 => "forma_ingresso" 
            ) 
    );
    
    private static $etapas = array(
            1 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Creche (0 a 3 anos)",
                    'etapa' => 1,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
            ),
            2 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Pr�-escola (4 e 5 anos)",
                    'etapa' => 2,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
            ),
            3 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Unificada (0 a 5 anos)",
                    'etapa' => 3,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
            ),
            4 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "1� S�rie",
                    'etapa' => 1,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            5 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "2� S�rie",
                    'etapa' => 2,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            6 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "3� S�rie",
                    'etapa' => 3,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            7 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "4� S�rie",
                    'etapa' => 4,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            8 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "5� S�rie",
                    'etapa' => 5,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            9 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "6� S�rie",
                    'etapa' => 6,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            10 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "7� S�rie",
                    'etapa' => 7,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            11 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "8� S�rie",
                    'etapa' => 8,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
            ),
            12 => array(
                    'curso' => "Ensino Fundamental de 8 anos - Multi",
                    'serie' => "Multi",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
            ),
            13 => array(
                    'curso' => "Ensino Fundamental de 8 anos - Corre��o de Fluxo",
                    'serie' => "Corre��o de Fluxo",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
            ),
            14 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "1� Ano",
                    'etapa' => 1,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            15 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "2� Ano",
                    'etapa' => 2,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            16 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "3� Ano",
                    'etapa' => 3,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            17 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "4� Ano",
                    'etapa' => 4,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            18 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "5� Ano",
                    'etapa' => 5,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            19 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "6� Ano",
                    'etapa' => 6,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            20 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "7� Ano",
                    'etapa' => 7,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            21 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "8� Ano",
                    'etapa' => 8,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            22 => array(
                    'curso' => "Ensino Fundamental de 9 anos - Multi",
                    'serie' => "Multi",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
            ),
            23 => array(
                    'curso' => "Ensino Fundamental de 9 anos - Corre��o de Fluxo",
                    'serie' => "Corre��o de Fluxo",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
            ),
            24 => array(
                    'curso' => "Ensino Fundamental de 8 e 9 anos",
                    'serie' => "Multi 8 e 9 anos",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
            ),
            25 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "1� S�rie",
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            26 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "2� S�rie",
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            27 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "3� S�rie",
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            28 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "4� S�rie",
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            29 => array(
                    'curso' => "Ensino M�dio N�o-seriado",
                    'serie' => "N�o Seriada",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
            ),
            30 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 1� S�rie",
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            31 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 2� S�rie",
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            32 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 3� S�rie",
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            33 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 4� S�rie",
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            34 => array('curso' => "Ensino M�dio Integrado N�o-Seriado",
                    'serie' => "Integrado N�o Seriada",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
            ),
            35 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 1� S�rie", 
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            36 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 2� S�rie", 
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            37 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 3� S�rie", 
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            38 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 4� S�rie", 
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
            ),
            39 => array(
                    'curso' => "Educa��o Profissional (Concomitante)", 
                    'serie' => "N�o-seriado", 
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
            ),
            40 => array(
                    'curso' => "Educa��o Profissional (Subseq�ente)", 
                    'serie' => "N�o-seriado", 
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
            ),
            41 => array(
                    'curso' => "Ensino Fundamental de 9 anos", 
                    'serie' => "9� Ano", 
                    'etapa' => 9,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
            ),
            43 => array(
                    'curso' => "EJA Presencial", 
                    'serie' => "Anos iniciais", 
                    'etapa' => 1,
                    'etapas' => 2,
                    'nivel' => 'M�dio'
            ),
            44 => array(
                    'curso' => "EJA Presencial", 
                    'serie' => "Anos finais", 
                    'etapa' => 2,
                    'etapas' => 2,
                    'nivel' => 'M�dio'
            )
    );
    
    public static function row_type($row) {
        return self::$rows [$row ['tipo_registro']];
    }
    
    public static function parse_row($row) {
        if (! array_key_exists ( $row [0], self::$fields ))
            throw new CoreExt_Exception_InvalidArgumentException ( "N�o sei o que fazer com linhas de c�digo " . $row [0] );
    
        $result = array ();
        foreach ( self::$fields [$row [0]] as $pos => $name ) {
            $result [$name] = $row [$pos - 1];
        }
        return $result;
    }
    
    public static function curso_serie_by_etapa_ensino($id_etapa_ensino) {
        return self::$etapas[$id_etapa_ensino];
    }

}