<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-blog">
                Documentation
            </button>
        </div>
        <div class="card-body">

            <div class="position-relative p-3 bg-gray"
                style="height: 180px;background-image:url('{{asset('img/plugin/blog/blog.jpg')}}');background-size: auto 180px;">
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-primary">
                        Blog
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-blog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Doctype Admin Blog Plugin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset('img/plugin/blog/doctype_blog.png')}}" alt="Doctpe Blog"
                                    class="img-fluid">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('img/plugin/blog/blog.jpg')}}"
                                                alt="Doctpe Blog">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/plugin/blog/category.jpg')}}"
                                                alt="Doctpe Blog">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/plugin/blog/post.jpg')}}"
                                                alt="Doctpe Blog">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <hr>
                                <b class="d-flex justify-content-center">OR</b>
                                <div class="d-flex justify-content-center">

                                    <br>
                                    <a href="https://github.com/pratiksh404/doctype_admin_blog" target="_blank">Visit
                                        Offical Github Package Documentation.</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-5" style="max-height: 70vh;overflow-y:scroll">
                        <p class="has-line-data" data-line-start="2" data-line-end="4">
                            <a href="https://github.com/pratiksh404/doctype_admin_blog/issues"><img
                                    src="https://img.shields.io/github/issues/pratiksh404/doctype_admin_blog"
                                    alt="Issues" /></a><br />
                            <a href="https://github.com/pratiksh404/doctype_admin_blog/stargazers"><img
                                    src="https://img.shields.io/github/stars/pratiksh404/doctype_admin_blog"
                                    alt="Stars" /></a>
                        </p>
                        <h2 class="code-line" data-line-start="5" data-line-end="6">
                            <a id="Laravel_7_Admin_Panel_for_lazy_developers_5"></a>Laravel 7 Admin Panel
                            for lazy developers.
                        </h2>
                        <h4 class="code-line" data-line-start="7" data-line-end="8">
                            <a id="Contains___7"></a>Contains : -
                        </h4>
                        <ul>
                            <li class="has-line-data" data-line-start="9" data-line-end="10">
                                Post Management
                            </li>
                            <li class="has-line-data" data-line-start="10" data-line-end="12">
                                Category Management
                            </li>
                        </ul>
                        <h3 class="code-line" data-line-start="12" data-line-end="13">
                            <a id="Installation_12"></a>Installation
                        </h3>
                        <p class="has-line-data" data-line-start="14" data-line-end="15">
                            Run Composer Require Command
                        </p>
                        <pre><code class="has-line-data" data-line-start="17" data-line-end="19" class="language-sh">composer require doctype_admin/blog
        </code></pre>
                        <h3 class="code-line" data-line-start="20" data-line-end="21">
                            <a id="Install_package_assets_20"></a>Install package assets
                        </h3>
                        <h4 class="code-line" data-line-start="22" data-line-end="23">
                            <a id="Install_all_assets_22"></a>Install all assets
                        </h4>
                        <pre><code class="has-line-data" data-line-start="25" data-line-end="27" class="language-sh">php artisan DoctypeAdminB<span class="hljs-built_in">log</span>:install <span class="hljs-operator">-a</span>
        </code></pre>
                        <p class="has-line-data" data-line-start="28" data-line-end="29">
                            This command will publish
                        </p>
                        <ul>
                            <li class="has-line-data" data-line-start="30" data-line-end="31">
                                config file named Blog.php
                            </li>
                            <li class="has-line-data" data-line-start="31" data-line-end="32">
                                views files of post and category
                            </li>
                            <li class="has-line-data" data-line-start="32" data-line-end="33">
                                migrations files
                            </li>
                            <li class="has-line-data" data-line-start="33" data-line-end="35">
                                seed files
                            </li>
                        </ul>
                        <h4 class="code-line" data-line-start="35" data-line-end="36">
                            <a id="Install_config_file_only_35"></a>Install config file only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="38" data-line-end="40" class="language-sh">php artisan DoctypeAdminB<span class="hljs-built_in">log</span>:install -c
        </code></pre>
                        <h4 class="code-line" data-line-start="41" data-line-end="42">
                            <a id="Install_view_files_only_41"></a>Install view files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="44" data-line-end="46" class="language-sh">php artisan DoctypeAdminB<span class="hljs-built_in">log</span>:install <span class="hljs-operator">-f</span>
        </code></pre>
                        <h4 class="code-line" data-line-start="47" data-line-end="48">
                            <a id="Install_migrations_files_only_47"></a>Install migrations files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="50" data-line-end="52" class="language-sh">php artisan DoctypeAdminB<span class="hljs-built_in">log</span>:install -m
        </code></pre>
                        <h4 class="code-line" data-line-start="53" data-line-end="54">
                            <a id="Install_seed_files_only_53"></a>Install seed files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="56" data-line-end="58" class="language-sh">php artisan DoctypeAdminB<span class="hljs-built_in">log</span>:install <span class="hljs-operator">-s</span>
        </code></pre>
                        <h2 class="code-line" data-line-start="59" data-line-end="60">
                            <a id="Then_migrate_database_59"></a>Then migrate database
                        </h2>
                        <pre><code class="has-line-data" data-line-start="62" data-line-end="64" class="language-sh">php artisan migrate
        </code></pre>
                        <p class="has-line-data" data-line-start="65" data-line-end="66">
                            If you want to migrate file with seed
                        </p>
                        <pre><code class="has-line-data" data-line-start="68" data-line-end="70" class="language-sh">php artisan migrate --seed
        </code></pre>
                        <p class="has-line-data" data-line-start="71" data-line-end="72">
                            This Package includes two seed
                        </p>
                        <ul>
                            <li class="has-line-data" data-line-start="73" data-line-end="74">
                                PostsTableSeeder
                            </li>
                            <li class="has-line-data" data-line-start="74" data-line-end="77">
                                CategoriesTableSeeder<br />
                                To use specific seed use
                            </li>
                        </ul>
                        <pre><code class="has-line-data" data-line-start="78" data-line-end="81" class="language-sh">php artisan db:seed --class=PostsTableSeeder
        php artisan db:seed --class=CategoriesTableSeeder
        </code></pre>
                        <br>
                        Mention the links to the side menu
                        <br>
                        <pre>
            <code>
                [
                    'text' => 'Blog',
                    'icon' => 'fas fa-blog',
                    'submenu' => [
                        [
                            'text' => 'Posts',
                            'icon' => 'fas fa-file',
                            'url' => 'admin/blog/post',
                        ],
                        [
                            'text' => 'Categories',
                            'icon' => 'fas fa-bezier-curve',
                            'url' => 'admin/blog/category',
                        ]
                        ]
                ],
            </code>
        </pre>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->