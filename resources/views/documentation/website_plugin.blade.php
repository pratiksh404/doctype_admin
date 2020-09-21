<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-website">
                Documentation
            </button>
        </div>
        <div class="card-body">

            <div class="position-relative p-3 bg-gray"
                style="height: 180px;background-image:url('{{asset('img/plugin/website/page.jpg')}}');background-size: auto 180px;">
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-primary">
                        Website
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-website">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Doctype Admin Website Plugin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset('img/plugin/website/doctype_website.png')}}" alt="Doctype Website"
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
                                            <img class="d-block w-100" src="{{asset('img/plugin/website/page.jpg')}}"
                                                alt="Doctpe website">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/plugin/website/plan.jpg')}}"
                                                alt="Doctpe website">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{asset('img/plugin/website/portfolio.jpg')}}"
                                                alt="Doctpe website">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/plugin/website/team.jpg')}}"
                                                alt="Doctpe website">
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
                                    <a href="https://github.com/pratiksh404/doctype_website" target="_blank">Visit
                                        Offical Github Package Documentation.</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-5" style="max-height: 70vh;overflow-y:scroll">
                        <p class="has-line-data" data-line-start="2" data-line-end="3"><a
                                href="https://github.com/pratiksh404/doctype_website/issues"><img
                                    src="https://img.shields.io/github/issues/pratiksh404/doctype_website"
                                    alt="Issues"></a> <a
                                href="//packagist.org/packages/doctype_admin/doctype_website"><img
                                    src="https://poser.pugx.org/doctype_admin/doctype_website/v"
                                    alt="Latest Stable Version"></a> <a
                                href="https://github.com/pratiksh404/doctype_website/stargazers"><img
                                    src="https://img.shields.io/github/stars/pratiksh404/doctype_website"
                                    alt="Stars"></a> <img
                                src="https://poser.pugx.org/doctype_admin/doctype_website/downloads" alt="Downloads"> <a
                                href="https://github.com/pratiksh404/doctype_website/blob/master/LICENSE"><img
                                    src="https://img.shields.io/github/license/pratiksh404/doctype_website"
                                    alt="Issues"></a></p>
                        <h4 class="code-line" data-line-start=4 data-line-end=5><a id="Contains___4"></a>Contains : -
                        </h4>
                        <ul>
                            <li class="has-line-data" data-line-start="6" data-line-end="7">Counters</li>
                            <li class="has-line-data" data-line-start="7" data-line-end="8">Pages</li>
                            <li class="has-line-data" data-line-start="8" data-line-end="9">Portfolios</li>
                            <li class="has-line-data" data-line-start="9" data-line-end="10">Images</li>
                            <li class="has-line-data" data-line-start="10" data-line-end="11">Services</li>
                            <li class="has-line-data" data-line-start="11" data-line-end="12">FAQs</li>
                            <li class="has-line-data" data-line-start="12" data-line-end="14">Plans</li>
                        </ul>
                        <h3 class="code-line" data-line-start=14 data-line-end=15><a
                                id="Installation_14"></a>Installation</h3>
                        <p class="has-line-data" data-line-start="16" data-line-end="17">Run Composer Require Command
                        </p>
                        <pre><code class="has-line-data" data-line-start="19" data-line-end="21" class="language-sh">composer require doctype_admin/doctype_website
</code></pre>
                        <h3 class="code-line" data-line-start=22 data-line-end=23><a
                                id="Install_package_assets_22"></a>Install package assets
                        </h3>
                        <h4 class="code-line" data-line-start=24 data-line-end=25><a
                                id="Install_all_assets_24"></a>Install all assets</h4>
                        <pre><code class="has-line-data" data-line-start="27" data-line-end="29" class="language-sh">php artisan DoctypeAdminWebsite</span>:install <span class="hljs-operator">-a</span>
</code></pre>
                        <p class="has-line-data" data-line-start="30" data-line-end="31">This command will publish</p>
                        <ul>
                            <li class="has-line-data" data-line-start="32" data-line-end="33">config file named
                                website.php</li>
                            <li class="has-line-data" data-line-start="33" data-line-end="34">views files</li>
                            <li class="has-line-data" data-line-start="34" data-line-end="35">migrations files</li>
                            <li class="has-line-data" data-line-start="35" data-line-end="37">seed files</li>
                        </ul>
                        <h4 class="code-line" data-line-start=37 data-line-end=38><a
                                id="Install_config_file_only_37"></a>Install config file
                            only</h4>
                        <pre><code class="has-line-data" data-line-start="40" data-line-end="42" class="language-sh">php artisan DoctypeAdminWebsite</span>:install -c
</code></pre>
                        <h4 class="code-line" data-line-start=43 data-line-end=44><a
                                id="Install_view_files_only_43"></a>Install view files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="46" data-line-end="48" class="language-sh">php artisan DoctypeAdminWebsite</span>:install <span class="hljs-operator">-f</span>
</code></pre>
                        <h4 class="code-line" data-line-start=49 data-line-end=50><a
                                id="Install_migrations_files_only_49"></a>Install
                            migrations files only</h4>
                        <pre><code class="has-line-data" data-line-start="52" data-line-end="54" class="language-sh">php artisan DoctypeAdminWebsite</span>:install -m
</code></pre>
                        <h4 class="code-line" data-line-start=55 data-line-end=56><a
                                id="Install_seed_files_only_55"></a>Install seed files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="58" data-line-end="60" class="language-sh">php artisan DoctypeAdminWebsite</span>:install <span class="hljs-operator">-d</span>
</code></pre>
                        <h2 class="code-line" data-line-start=61 data-line-end=62><a
                                id="Then_migrate_database_61"></a>Then migrate database
                        </h2>
                        <pre><code class="has-line-data" data-line-start="64" data-line-end="66" class="language-sh">php artisan migrate
</code></pre>
                        <p class="has-line-data" data-line-start="67" data-line-end="68">This Package includes two seed
                        </p>
                        <ul>
                            <li class="has-line-data" data-line-start="69" data-line-end="70">CountersTableSeeder</li>
                            <li class="has-line-data" data-line-start="70" data-line-end="71">FaqsTableSeeder</li>
                            <li class="has-line-data" data-line-start="71" data-line-end="72">PagesTableSeeder</li>
                            <li class="has-line-data" data-line-start="72" data-line-end="73">PlansTableSeeder</li>
                            <li class="has-line-data" data-line-start="73" data-line-end="74">PortfoliosTableSeeder</li>
                            <li class="has-line-data" data-line-start="74" data-line-end="75">ServicesTableSeeder</li>
                            <li class="has-line-data" data-line-start="75" data-line-end="77">TeamsTableSeeder</li>
                        </ul>
                        <h2 class="code-line" data-line-start=77 data-line-end=78><a id="Note_77"></a>Note</h2>
                        <p class="has-line-data" data-line-start="79" data-line-end="80">If seed class is not found try
                            running composer
                            dump-autoload</p>
                        <h2 class="code-line" data-line-start=81 data-line-end=82><a
                                id="To_add_the_package_route_link_to_be_accesable_from_sidemenu_just_add_following_on_configadminltephp_undr_key_menu_81"></a>To
                            add the package route link to be accesable from sidemenu just add following on
                            config/adminlte.php undr key ‘menu’
                        </h2>
                        <pre><code class="has-line-data" data-line-start="84" data-line-end="132" class="language-sh">     [
            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Website'</span>,
            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-globe'</span>,
            <span class="hljs-string">'submenu'</span> =&gt; [
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Counters'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-clock'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/counter'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Team'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-people-arrows'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/team'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Page'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-file'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/plan'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Portfolio'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-camera'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/portfolio'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Image'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-images'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/image'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Service'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-concierge-bell'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/service'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'FAQ'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-question'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/faq'</span>,
                ],
                [
                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Plan'</span>,
                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-plus'</span>,
                    <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/website/plan'</span>,
                ],

            ]
        ],
</code></pre>
                        <h2 class="code-line" data-line-start=146 data-line-end=147><a id="Package_Used_146"></a>Package
                            Used</h2>
                        <ul>
                            <li class="has-line-data" data-line-start="148" data-line-end="150"><a
                                    href="http://image.intervention.io/">http://image.intervention.io/</a></li>
                        </ul>
                        <h2 class="code-line" data-line-start=150 data-line-end=151><a id="License_150"></a>License</h2>
                        <p class="has-line-data" data-line-start="152" data-line-end="153">MIT</p>
                        <p class="has-line-data" data-line-start="154" data-line-end="155"><strong>DOCTYPE NEPAL
                                ||DR.H2SO4</strong></p>
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