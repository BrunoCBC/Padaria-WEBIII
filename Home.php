<?php $title = "Home - Padaria"; include 'header.php'; ?>

<div class="container mt-5 container-home">
    <h1 class="text-center title-home">Bem-vindo à Nossa Padaria!</h1>
    <p class="text-center subtitle-home">Aqui você encontra os melhores pães e doces da cidade, feitos com amor e ingredientes frescos.</p>

    <div class="row mt-4 row-home">
        <div class="col-md-4 col-card">
            <div class="card card-home">
                <img src="https://amopaocaseiro.com.br/wp-content/uploads/2020/01/pao-caseiro-para-iniciantes_02-840x560.jpg" class="card-img-top img-card-home" alt="Pão">
                <div class="card-body">
                    <h5 class="card-title title-card">Pão Fresco</h5>
                    <p class="card-text text-card">Saboroso e crocante, o nosso pão fresco é feito diariamente.</p>
                    <a href="ListarCliente.php" class="btn custom-btn">Ver Clientes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-card">
            <div class="card card-home">
                <img src="https://www.receitasnestle.com.br/sites/default/files/styles/recipe_detail_desktop/public/srh_recipes/9f66a2bff2f5962577879b44aa153cc2.jpg?itok=uDdhXtPG" class="card-img-top img-card-home" alt="Bolo">
                <div class="card-body">
                    <h5 class="card-title title-card">Bolos Caseiros</h5>
                    <p class="card-text text-card">Bolos preparados com receitas tradicionais, para todas as ocasiões.</p>
                    <a href="form_cadastroCliente.php" class="btn custom-btn">Cadastrar Cliente</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-card">
            <div class="card card-home">
                <img src="https://www.gastronomia.com.br/wp-content/uploads/2023/11/comida-com-d-donuts-doce-de-leite-damasco-e-muito-mais.jpg" class="card-img-top img-card-home" alt="Doces">
                <div class="card-body">
                    <h5 class="card-title title-card">Doces Variados</h5>
                    <p class="card-text text-card">Uma seleção deliciosa de doces para alegrar o seu dia.</p>
                    <a href="ListarCliente.php" class="btn custom-btn">Ver Clientes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
