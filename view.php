<?php

// CLASSE CONTENDO TODO CONTEUDO HTML DO SITE
class view_site{
    private $index = '<main>
        <div data-aos="fade-right" class="px-4 my-5 text-center">
                <h1 class="display-5 fw-bold text-body-emphasis">Bem vindo ao meu Portfólio/Web</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">
                            Deixando aberto o site para falar um pouco sobre mim, de como me organizo em projetos e do que gosto de fazer no dia-a-dia, vou postar alguns estudos e projetos que ando acompanhando/realizando em algumas matérias na área de Análise e Desenvolvimento de Sistemas. Também contem a página contato para conversarmos melhor caso queira me conhecer ou/e agendar para falar sobre serviços de TI como logicá de programação, algorítimo, banco de dados, softwares, rede de computadores, internet of things e sistemas operacionais, entre outros artigos. Espero que curtam! =p
                        </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="/index.php/contato" type="button" class="btn btn-primary btn-lg px-4 gap-3">Contato</a>
                            <a href="/index.php/posts" type="button" class="btn btn-outline-secondary btn-lg px-4">Posts</a>
                        </div>
                    </div>
                </div>

<div data-aos="zoom-in" class="album py-5 bg-body-tertiary">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card">
        <img class="bd-placeholder-img card-img-top" src="img/album1.jpg" alt="" width="100%" height="225">
        <div class="card-body">
        <h2 class="card-title">Breve conteudo</h2>
          <p class="card-text">BREVE ESPAÇO PARA CONTEUDO//</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img class="bd-placeholder-img card-img-top" src="img/album2.jpg" alt="" width="100%" height="225">
        <div class="card-body">
            <h2 class="card-title">Breve conteudo</h2>
          <p class="card-text">BREVE ESPAÇO PARA CONTEUDO//</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img class="bd-placeholder-img card-img-top" src="img/album3.jpg" alt="" width="100%" height="225">
        <div class="card-body">
        <h2 class="card-title">Breve conteudo</h2>
          <p class="card-text">BREVE ESPAÇO PARA CONTEUDO//</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        </main>';

    private $sobre = '<main>
        <div class="container px-4" id="custom-cards">
        <h2 class="pb-2 border-bottom">Sobre mim</h2>
        <p class="lead">
        Me chamo Kauê tenho 25 anos, há 10 anos que mecho em computador(mas não tinha conhecimento algum teórico só para uso de entretenimento), desde sempre me interessei bastante sobre a área de tecnologia enquanto mais novo fiz curso de técnico em comp. gráfica, porem houve um tempo de distanciamento do computador por conta de serviços e simplesmente não mexer, más a 5 anos que venho focando novamente na área gosto de ficar fazendo pesquisa na internet até achar um conteúdo relevante que, de alguma forma alcançar as soluções de projetos que consigo realizar e aperfeiçoar meu estudo, não só ficar de teoria. Sempre procuro cursos online de engenharia, arquitetura e softwares para me atualizar o máximo, pois atualmente é primordial se manter atualizado dos produtos que se encontrão em alta.
        </p>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div id="card1" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Sistemas operacional em questão de ter mais convívio Windows também por ser fácil a adotação na utilização de softwares, mas Linux as distribuições em que estudo são Red Hat e Debian.</h3>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div id="card2" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Gosto de estudar linguagens de programação e suas funções, mesmo sabendo que os paradigmas são mais importantes.</h3>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div id="card3" class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold texto-sobre">Curto jogos FPS e Ação online, já desisti do LOL(Mentira) :P</h3>
              </div>
            </div>
          </div>
        </div>
      </div></main>';

    private $posts = '<main class="container">
      <script>
      posts_();
      </script>
              <div class="row g-5">
                <div class="col-md-8">
                  <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Postagens
                  </h3>
                  <article id="blog" class="blog-post">

                  </article>      
                </div>

                <div class="col-md-4">
                  <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                      <h4 class="fst-italic">Sobre a pagina</h4>
                      <p class="mb-0">Esta página posto conteudos relacionados a TI em que acho interessante e projetos.</p>
                    </div>
            
                    <div class="p-4">
                      <h4 class="fst-italic">Redes sociais</h4>
                      <ol class="list-unstyled">
                        <li><a target="_blank" href="https://github.com/KaueCassola">GitHub</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </main>';
    private $contato = '<main>
    <div id="painel_contato" class="container">
        <div id="painel_contato2">
            <h1>Deixe seu contato</h1>
            <p>Enviaremos informações o mais rápido possivel.</p>
                <form method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                <label for="numero">Numero</label>
                <input type="tel" name="numero" id="numero">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"><br>
                <input type="submit" value="Enviar contato" onclick="click_contato()">
                </form>
            <p id="resposta"></p>
        </div>
    </div>
</main>';

        public function index_(){
            return $this->index;
        }
        public function sobre_(){
            return $this->sobre;
        }
        public function posts_(){
            return $this->posts;
        }
        public function contato_(){
            return $this->contato;
        }
    };


?>