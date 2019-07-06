<?php include("../html/head.php") ?>
<?php include("../html/header.php") ?>
        <main>
            <section>
                <?php include("../html/navMenu.php") ?>
                <article>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Cadastra de Objetos</a></li>
                            <li class="breadcrumb-item"><a href="lista.php">Categoria</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Novo</li>
                        </ol>
                    </nav>
                    <form>
                        <div id="descricao">
                            <h1>Descricao da Categoria:</h1>
                            <input type="text" list="dadostipo">
                            <datalist id="dadostipo">
                                <option>teste</option>
                                <option>teste2</option>
                                <option>teste3</option>
                            </datalist>
                            <input type="text" class="form-control" placeholder="Digiter a descricao..">
                            <a href="Lista.php" class="btn btn-outline-secondary">Cancelar</a>
                            <input type="submit" class="btn btn-success" value="Salvar">
                        </div>
                    </form>
                </article>
            </section>
        </main>
<?php  include("../html/footer.php") ?>