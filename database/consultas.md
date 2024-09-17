BUSCA TODOS OS VÍDEOS DE UM CANAL
-> ÚTIL PARA QUANDO O USUÁRIO ACESSAR UM CANAL, A PÁGINA DO CANAL EXIBE OS VÍDEOS EM ORDEM DESCENDENTE, COM O MAIS RECENTE NO TOPO
--> APLICADO NA ROTA '/profile/{id}'

$videos = Video::select('videos.id', 'videos.title', 'videos.description', 'videos.path', 'videos.created_at', 'users.name')
->join('users', 'videos.user_id', '=', 'users.id')
->where('users.id', 6)
->orderBy('videos.created_at', 'desc')
->get();
