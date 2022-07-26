Quando eu clonei o projeto, precisei instalar o breeze novamente.
Então com a nova instalação eu perderei minhas rotas, por isso deixarei elas salvar na minha branch Master.
Devido a problemas de atualização com o vite, após a instalação do mesmo faça o seguinte passo-a-passo:
        remova a seguinte linha de "vite.config.js":
            'resources/css/app.css',

        inclua a seguinte linha em "app.js":
            import '../css/app.css';

        Em seu arquivo app.blade.php, remova 'resources/css/app.css' de, você ficará com:
            @vite(['resources/js/app.js'])

        Agora execute: npm run build

