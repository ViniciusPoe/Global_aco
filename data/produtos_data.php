<?php
// Dados dos tubos
$tubos = [
    [
        'imagem' => 'tubo-fogo.jpg',
        'titulo' => 'Tubo Galvanizado a Fogo',
        'descricao' => 'O tubo galvanizado a fogo é imerso em zinco fundido, proporcionando uma camada espessa e resistente de proteção anticorrosiva.',
        'funcoes' => [
            'Sistemas hidráulicos e pneumáticos industriais.',
            'Estruturas externas expostas à intempéries.',
            'Instalações subterrâneas de água e gás.'
        ],
        'normas' => 'NBR 5580'
    ],
    [
        'imagem' => 'tubo-preto.jpg',
        'titulo' => 'Tubo Preto',
        'descricao' => 'Tubo de aço carbono sem revestimento, utilizado principalmente em aplicações estruturais e sistemas não expostos à corrosão.',
        'funcoes' => [
            'Estruturas metálicas e construções civis.',
            'Sistemas de proteção contra descargas atmosféricas.',
            'Passagem de cabos em instalações temporárias.'
        ],
        'normas' => 'NBR 5580'
    ],
    [
        'imagem' => 'eletroduto-galvanizado.jpg',
        'titulo' => 'Eletroduto Galvanizado a Fogo',
        'descricao' => 'Conduto elétrico com galvanização por imersão a quente, oferecendo máxima proteção contra corrosão para instalações elétricas.',
        'funcoes' => [
            'Instalações elétricas prediais e industriais.',
            'Infraestrutura para cabeamento de dados e energia.',
            'Locais com alta umidade ou ambientes agressivos.'
        ],
        'normas' => 'NBR 5597 - 5598'
    ],
    [
        'imagem' => 'tubo-sem-costura.jpg',
        'titulo' => 'Tubo de Aço sem Costura',
        'descricao' => 'Tubos de aço carbono sem solda, fabricados por processo de extrusão, ideais para aplicações que exigem resistência à pressão e durabilidade.',
        'funcoes' => [
            'Sistemas hidráulicos e pneumáticos de alta pressão.',
            'Indústria petroquímica e de processamento.',
            'Equipamentos mecânicos e estruturas especiais.'
        ],
        'normas' => 'NBR 5590'
    ]
];

// Dados das conexões
$conexoes = [
    [
        'imagem' => 'niple.jpg',
        'titulo' => 'Niple Galvanizado',
        'descricao' => 'É uma conexão tubular curta, cilíndrica e roscada em ambas as extremidades (rosca macho), fabricada em materiais como aço carbono, galvanizado, inox ou latão. Sua principal função é unir tubos ou outras conexões em sistemas de tubulação, garantindo vedação e continuidade. Pode ser encontrado em diversos diâmetros (1/8" a 6") e classes de pressão (schedule 40, 80, etc.).',
        'funcoes' => [
            'Conexão de tubos em sistemas hidráulicos/pneumáticos',
            'Extensão de tubulações industriais',
            'Adaptação entre conexões diferentes',
            'Vedação com auxílio de fitas ou pastas'
        ],
    ],
    [
        'imagem' => 'niple-reducao.jpg',
        'titulo' => 'Niple de Redução Galvanizado',
        'descricao' => 'Possui roscas macho em ambas as extremidades, porém com diâmetros diferentes (ex.: 1" x 1/2"), permitindo a transição entre tubulações de dimensões distintas. É comum em sistemas onde há necessidade de derivações ou redução de vazão. Fabricado em aço carbono ou inox, pode ter redução concêntrica (alinhamento central) ou excêntrica (útil para evitar bolsas de ar em sistemas hidráulicos).',
        'funcoes' => [
            'Adaptação de tubulações com diâmetros diferentes',
            'Controle de vazão/pressão',
            'Conexão de instrumentos de medição',
            'Aplicações em sistemas de vácuo'
        ],
    ],
    [
        'imagem' => 'tee.jpg',
        'titulo' => 'Tee Galvanizado',
        'descricao' => 'é uma conexão em formato de "T" que permite a derivação de tubulações em sistemas hidráulicos, pneumáticos ou de conduítes elétricos. Fabricado em aço carbono com revestimento de zinco (galvanização a quente), oferece resistência à corrosão e durabilidade em ambientes externos ou úmidos.',
        'funcoes' => [
            'Derivação de tubulações',
            'Conexão de instrumentos de medição',
            'Redução de custos em montagens complexas',
            'Aplicações em conduítes elétricos'
        ],
    ],
    [
        'imagem' => 'tee-reducao.jpg',
        'titulo' => 'Tee de Redução Galvanizado',
        'descricao' => 'Conexão em "T" com pelo menos um ramal de diâmetro diferente do corpo principal. Pode ter redução no ramal lateral (ex.: corpo 2", ramal 1") ou em todas as saídas.',
        'funcoes' => [
            'Derivação de fluxo com controle de vazão',
            'Conexão de instrumentação em linhas principais',
            'Economia de materiais em projetos complexos',
        ],
    ],
    [
        'imagem' => 'cotovelo.jpg',
        'titulo' => 'Cotovelo Galvanizado',
        'descricao' => 'É uma conexão curva (geralmente em 90° ou 45°) que permite mudanças de direção em tubulações. Sua construção em aço galvanizado oferece proteção contra oxidação, sendo ideal para sistemas expostos à umidade.',
        'funcoes' => [
            'Mudança de direção em tubulações',
            'Redução de perda de carga em sistemas hidráulicos',
            'Proteção contra vibrações e tensões mecânicas',
            'Usado em dutos de ar condicionado e exaustores industriais.'
        ],
    ],
    [
        'imagem' => 'cotovelo-reducao.jpg',
        'titulo' => 'Cotovelo de Redução Galvanizado',
        'descricao' => 'Conexão curva (90° ou 45°) com diâmetros diferentes em cada extremidade, usada para mudar direção e reduzir o fluxo simultaneamente. Pode ser concêntrico (alinhamento central) ou excêntrico (desnível).',
        'funcoes' => [
            'Mudança de direção com redução de vazão',
            'Conexão de equipamentos com entradas distintas',
            'Otimização de espaço em instalações industriais',
        ],
    ],
    [
        'imagem' => 'uniao-bronze.jpg',
        'titulo' => 'União Galvanizada (Assento Bronze)',
        'descricao' => 'É uma conexão desmontável que permite a junção ou separação rápida de tubos sem necessidade de girar toda a tubulação. Composta por três partes (dois terminais roscados e uma porca de união), é amplamente utilizada em manutenções e sistemas que exigem desmontagem frequente. Conexão desmontável com anel interno de bronze para vedação autônoma (sem junta). Ideal para alta pressão e temperatura.',
        'funcoes' => [
            'Facilidade de manutenção',
            'Conexão de materiais diferentes',
            'Aplicações em sistemas de alta pressão'
        ],
    ],
    [
        'imagem' => 'uniao-plano.jpg',
        'titulo' => 'União Galvanizada (Assento Plano)',
        'descricao' => 'É uma conexão desmontável que permite a junção ou separação rápida de tubos sem necessidade de girar toda a tubulação. Composta por três partes (dois terminais roscados e uma porca de união), é amplamente utilizada em manutenções e sistemas que exigem desmontagem frequente. Versão econômica que requer junta (teflon, fibra) para vedação. Usada em baixa/média pressão.',
        'funcoes' => [
            'Facilidade de manutenção',
            'Conexão de materiais diferentes',
            'Vedação ajustável',
        ],
    ],
    [
        'imagem' => 'cruzeta.jpg',
        'titulo' => 'Cruzeta Galvanizada',
        'descricao' => 'É uma conexão em formato de cruz que permite a distribuição de fluxo em quatro direções. Utilizada em sistemas complexos onde múltiplas derivações são necessárias, como em redes de distribuição de água ou ar comprimido.',
        'funcoes' => [
            'Distribuição de fluido em múltiplas linhas',
            'Redução de conexões em sistemas ramificados',
            'Aplicações em sistemas de irrigação pivotantes'
        ],
    ],
    [
        'imagem' => 'plug.jpg',
        'titulo' => 'Plug (Bujão) Galvanizado',
        'descricao' => 'Peça de vedação roscada (macho) com cabeça hexagonal ou quadrada, fabricada em aço carbono com revestimento de zinco (galvanização a quente). Usado para fechar temporária ou permanentemente extremidades de tubos ou conexões.',
        'funcoes' => [
            'Vedação de aberturas em tubulações',
            'Proteção contra contaminação',
            'Manutenção preventiva',
            'Aplicações específicas'
        ],
    ],
    [
        'imagem' => 'luva.jpg',
        'titulo' => 'Luva Galvanizada',
        'descricao' => 'é uma conexão cilíndrica que une dois tubos do mesmo diâmetro. Pode ser roscada (para montagem desmontável) ou soldável (para sistemas permanentes).',
        'funcoes' => [
            'Reparo de tubulações danificadas',
            'Extensão de tubos',
            'Transição entre materiais diferentes',
        ],
    ],
    [
        'imagem' => 'luva-reducao.jpg',
        'titulo' => 'Luva de Redução Galvanizada',
        'descricao' => 'Conexão cilíndrica com diâmetros internos diferentes, usada para unir tubos ou conexões de tamanhos distintos. Pode ser roscada, soldável ou com flange.',
        'funcoes' => [
            'Reparo de tubulações com danos localizados',
            'Conexão de tubos não compatíveis',
            'Redução de turbulência em sistemas hidráulicos',
        ],
    ],
    [
        'imagem' => 'bucha-reducao.jpg',
        'titulo' => 'Bucha de Redução',
        'descricao' => 'Peça cônica ou escalonada que adapta conexões de diâmetros diferentes, com rosca interna em ambas as extremidades (ou uma rosca interna e outra externa). Fabricada em aço carbono, galvanizado, inox ou latão.',
        'funcoes' => [
            'Adaptação de diâmetros em sistemas roscados',
            'Transição entre materiais',
            'Economia de espaço em montagens compactas',
            'Aplicações em sistemas de vácuo'
        ],
    ],
    [
        'imagem' => 'flange.jpg',
        'titulo' => 'Flange Galvanizado',
        'descricao' => 'Disco metálico com furos periféricos para parafusos, usado para conectar tubos, válvulas ou equipamentos. Galvanizado para resistência à corrosão em ambientes externos ou úmidos.',
        'funcoes' => [
            'Conexão desmontável de alta pressão',
            'Vedação com juntas',
            'Adaptação entre equipamentos',
        ],
    ],
    [
        'imagem' => 'cap.jpg',
        'titulo' => 'Tampão (CAP) Galvanizado',
        'descricao' => 'Peça sem rosca que solda-se ou encaixa-se na extremidade de tubos para vedação permanente. Galvanizado para aplicações externas ou subterrâneas.',
        'funcoes' => [
            'Vedação definitiva de tubulações',
            'Proteção estrutural',
        ],
    ],
    [
        'imagem' => 'curva.jpg',
        'titulo' => 'Curva Galvanizada',
        'descricao' => 'Conexão curva (90°, 45° ou 180°) que permite mudanças de direção em tubulações. Galvanizada para resistência à corrosão.',
        'funcoes' => [
            'Redirecionamento de fluxo',
            'Instalações compactas',
        ],
    ],
];

// Dados dos materiais de incêndio
$incendios = [
    [
        'imagem' => 'adaptador-storz.jpg',
        'titulo' => 'Adaptador Storz (Latão)',
        'descricao' => 'É uma conexão de transição em latão para adaptar mangueiras com acoplamento Storz a diferentes sistemas de tubulação.',
        'funcoes' => [
            'Conversão entre conexões Storz e roscadas em sistemas hidráulicos',
            'Uso em redes de incêndio e sistemas industriais de alta pressão',
            'Conexão rápida entre equipamentos de combate a incêndio'
        ],
    ],
    [
        'imagem' => 'esguicho-solido.jpg',
        'titulo' => 'Esguicho Jato Sólido',
        'descricao' => 'É um dispositivo de saída de água com bocal fixo para jato concentrado de alta pressão.',
        'funcoes' => [
            'Direcionamento preciso de jatos de água em operações de combate a incêndio',
            'Lavagem industrial de alta pressão',
            'Aplicação em sistemas de irrigação de longo alcance'
        ],
    ],
    [
        'imagem' => 'esguicho-regulavel.jpg',
        'titulo' => 'Esguicho Regulável',
        'descricao' => 'É um esguicho com mecanismo de ajuste que permite variar o padrão do jato entre sólido e neblina.',
        'funcoes' => [
            'Controle de vazão e padrão de jato em operações de combate a incêndio',
            'Redução de consumo de água através de ajuste preciso',
            'Proteção térmica com névoa em situações de calor intenso'
        ],
    ],
    [
        'imagem' => 'tampa.jpg',
        'titulo' => 'Tampa Ferro Fundido',
        'descricao' => 'É uma proteção robusta em ferro fundido para pontos de acesso em sistemas de hidrantes e redes subterrâneas.',
        'funcoes' => [
            'Vedação e proteção de hidrantes subterrâneos',
            'Prevenção contra acesso não autorizado a válvulas',
            'Proteção contra impactos e intempéries em instalações externas'
        ],
    ],
    [
        'imagem' => 'tampao.jpg',
        'titulo' => 'Tampão Storz C/Corrente (Latão)',
        'descricao' => 'É um tampão de proteção com corrente integrada para conexões Storz, fabricado em latão para durabilidade e resistência à corrosão.',
        'funcoes' => [
            'Proteção de conexões Storz contra sujeira e danos',
            'Impede perda do tampão graças à corrente de segurança',
            'Uso em sistemas de combate a incêndio e indústria'
        ],
    ],
    [
        'imagem' => 'mangueira1.jpg',
        'titulo' => 'Mangueira Tipo 1',
        'descricao' => 'É uma mangueira industrial de alta resistência com revestimento interno especial para transporte de fluidos agressivos.',
        'funcoes' => [
            'Condução de produtos químicos e óleos industriais',
            'Uso em sistemas hidráulicos de alta pressão',
            'Aplicações em indústrias petroquímicas e alimentícias'
        ],
    ],
    [
        'imagem' => 'mangueira2.jpg',
        'titulo' => 'Mangueira Tipo 2',
        'descricao' => 'É uma mangueira flexível com reforço textil para aplicações gerais onde se requer resistência média e flexibilidade.',
        'funcoes' => [
            'Distribuição de água em sistemas de irrigação',
            'Uso em lavanderias industriais e serviços de limpeza',
            'Aplicações agrícolas e de construção civil'
        ],
    ],
    [
        'imagem' => 'abrigo-sobrepor.jpg',
        'titulo' => 'Abrigo Sobrepor',
        'descricao' => 'É uma caixa de proteção para hidrantes de sobrepor, fabricada em material resistente às intempéries.',
        'funcoes' => [
            'Proteção de hidrantes em instalações externas',
            'Facilidade de acesso em situações de emergência',
            'Preservação dos equipamentos contra vandalismo'
        ],
    ],
    [
        'imagem' => 'abrigo-embutir.jpg',
        'titulo' => 'Abrigo Embutir',
        'descricao' => 'É uma caixa de hidrante para instalação embutida em paredes, com acabamento estético e funcional.',
        'funcoes' => [
            'Proteção de hidrantes em áreas internas',
            'Integração arquitetônica em edifícios comerciais',
            'Otimização de espaço em corredores e áreas comuns'
        ],
    ],
    [
        'imagem' => 'chave.jpg',
        'titulo' => 'Chave Storz Dupla',
        'descricao' => 'É uma versão reforçada com dupla alavanca para conexões Storz de grande diâmetro (acima de 4") em sistemas de alta pressão.',
        'funcoes' => [
            'Acionamento de conexões Storz pesadas (DN100-DN150)',
            'Redução do esforço operacional em sistemas pressurizados',
            'Aplicação em indústrias petroquímicas e sistemas de hidrantes'
        ],
    ]
];

//Dados das Valvulas

$valvulas = [
    [
        'imagem' => 'valvula-horizontal.jpg',
        'titulo' => 'Valvula Horizontal',
        'descricao' => 'É uma válvula projetada para instalação em posição horizontal, com eixo de acionamento paralelo ao solo. Pode ser dos tipos gaveta, globo ou borboleta.',
        'funcoes' => [
            'Instalação em tubulações paralelas ao solo onde espaço vertical é crítico',
            'Conexão de bombas centrífugas horizontais em sistemas de água resfriada',
            'Utilizado em Linhas de sucção de bombas horizontais, Sistemas de irrigação por aspersão, Tubulações enterradas com caixas de inspeção'
        ],
    ],
    [
        'imagem' => 'valvula-vertical.jpg',
        'titulo' => 'Valvula Vertical',
        'descricao' => 'É uma válvula com eixo de acionamento perpendicular ao solo, ideal para instalações com restrição de espaço lateral.',
        'funcoes' => [
            'Instalação em colunas de descarga de bombas submersas',
            'Controle de fluxo em torres de resfriamento industrial',
            'Utilizado em Poços verticais e estações elevatórias, Sistemas de combate a incêndio em edifícios ,Plataformas offshore com espaço limitado '
        ],
    ],
    [
        'imagem' => 'registro-gaveta.jpg',
        'titulo' => 'Registro Gaveta',
        'descricao' => 'É uma válvula linear com disco paralelo ao fluxo quando aberta, proporcionando baixa perda de carga.',
        'funcoes' => [
            'Bloqueio de seções para manutenção em redes de água potáve',
            'Operação ON/OFF em linhas de óleo combustível',
            'Utilizado em Sistemas de Água Potável, Indústria Naval, Mineração'
        ],
    ],
    [
        'imagem' => 'valvula-esfera.jpg',
        'titulo' => 'Valvula Esfera',
        'descricao' => 'É uma válvula quarter-turn com esfera perfurada que gira 90° para controle do fluxo..',
        'funcoes' => [
            'Controle emergencial em gasodutos',
            'Melhor desempenho contra vazamentos',
            'Utilizado em Sistemas de óleo e gás, Linhas de produtos químicos, Controle emergencial (fechamento rápido)'
        ],
    ],
    [
        'imagem' => 'registro-globo.jpg',
        'titulo' => 'Registro Globo',
        'descricao' => 'É uma válvula linear de movimento múltiplo projetada para regulação precisa de fluxo',
        'funcoes' => [
            'Controle de pressão em redes de vapor',
            'Ajuste de vazão em trocadores de calor ',
            'Utilizado em Sistemas de Vapor Industrial, Processos Químicos, Oleodutos'
        ],
    ],
];
?>