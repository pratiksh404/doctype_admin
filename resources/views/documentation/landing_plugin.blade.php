<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-landing">
                Documentation
            </button>
        </div>
        <div class="card-body">

            <div class="position-relative p-3 bg-gray"
                style="height: 180px;background-image:url('{{asset('img/plugin/landing/landing.jpg')}}');background-size: auto 180px;">
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-primary">
                        Landing Page
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-landing">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Doctype Admin Landing Page Plugin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset('img/plugin/blog/doctype_landing.png')}}" alt="Doctype Landing Page"
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
                                            <img class="d-block w-100" src="{{asset('img/plugin/landing/landing.jpg')}}"
                                                alt="Doctpe Blog">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/plugin/landing/setting.jpg')}}"
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
                                    <a href="https://github.com/pratiksh404/doctype_landing_page" target="_blank">Visit
                                        Offical Github Package Documentation.</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-5" style="max-height: 70vh;overflow-y:scroll">
                        <p class="has-line-data" data-line-start="0" data-line-end="1"><img
                                src="https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/doctype_landing.png"
                                alt="Doctype Admin Blog"></p>
                        <p class="has-line-data" data-line-start="2" data-line-end="4"><a
                                href="https://github.com/pratiksh404/doctype_landing_page/issues"><img
                                    src="https://img.shields.io/github/issues/pratiksh404/doctype_landing_page"
                                    alt="Issues"></a><br>
                            <a href="https://github.com/pratiksh404/doctype_landing_page/stargazers"><img
                                    src="https://img.shields.io/github/stars/pratiksh404/doctype_landing_page"
                                    alt="Stars"></a></p>
                        <h2 class="code-line" data-line-start=5 data-line-end=6><a
                                id="Laravel_7_Admin_Panel_Landing_Page_for_lazy_developers_5"></a>Laravel 7 Admin Panel
                            Landing Page for lazy
                            developers.</h2>
                        <h3 class="code-line" data-line-start=8 data-line-end=9><a id="Installation_8"></a>Installation
                        </h3>
                        <p class="has-line-data" data-line-start="10" data-line-end="11">Run Composer Require Command
                        </p>
                        <pre><code class="has-line-data" data-line-start="13" data-line-end="15" class="language-sh">composer require doctype_admin/landing_page
                        </code></pre>
                        <h3 class="code-line" data-line-start=16 data-line-end=17><a
                                id="Install_package_assets_16"></a>Install package assets
                        </h3>
                        <h4 class="code-line" data-line-start=18 data-line-end=19><a
                                id="Install_all_assets_18"></a>Install all assets</h4>
                        <pre><code class="has-line-data" data-line-start="21" data-line-end="23" class="language-sh">php artisan DoctypeAdminLanding:install <span class="hljs-operator">-a</span>
                        </code></pre>
                        <p class="has-line-data" data-line-start="24" data-line-end="25">This command will publish</p>
                        <ul>
                            <li class="has-line-data" data-line-start="26" data-line-end="27">config file named
                                landing.php</li>
                            <li class="has-line-data" data-line-start="27" data-line-end="28">views files</li>
                            <li class="has-line-data" data-line-start="28" data-line-end="29">migrations files</li>
                            <li class="has-line-data" data-line-start="29" data-line-end="30">seed files</li>
                            <li class="has-line-data" data-line-start="30" data-line-end="31">landing page assets</li>
                            <li class="has-line-data" data-line-start="31" data-line-end="33">larecipe</li>
                        </ul>
                        <h4 class="code-line" data-line-start=33 data-line-end=34><a
                                id="Install_config_file_only_33"></a>Install config file
                            only</h4>
                        <pre><code class="has-line-data" data-line-start="36" data-line-end="38" class="language-sh">php artisan DoctypeAdminLanding:install -c
                        </code></pre>
                        <h4 class="code-line" data-line-start=39 data-line-end=40><a
                                id="Install_view_files_only_39"></a>Install view files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="42" data-line-end="44" class="language-sh">php artisan DoctypeAdminLanding:install <span class="hljs-operator">-f</span>
                        </code></pre>
                        <h4 class="code-line" data-line-start=45 data-line-end=46><a
                                id="Install_migrations_files_only_45"></a>Install
                            migrations files only</h4>
                        <pre><code class="has-line-data" data-line-start="48" data-line-end="50" class="language-sh">php artisan DoctypeAdminLanding:install -m
                        </code></pre>
                        <h4 class="code-line" data-line-start=51 data-line-end=52><a
                                id="Install_seed_files_only_51"></a>Install seed files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="54" data-line-end="56" class="language-sh">php artisan DoctypeAdminLanding:install <span class="hljs-operator">-d</span>
                        </code></pre>
                        <h4 class="code-line" data-line-start=57 data-line-end=58><a
                                id="Install_seed_assets_only_57"></a>Install seed assets
                            only</h4>
                        <pre><code class="has-line-data" data-line-start="60" data-line-end="62" class="language-sh">php artisan DoctypeAdminLanding:install <span class="hljs-operator">-l</span>
                        </code></pre>
                        <h4 class="code-line" data-line-start=63 data-line-end=64><a
                                id="Install_seed_documentation_only_63"></a>Install seed
                            documentation only</h4>
                        <pre><code class="has-line-data" data-line-start="66" data-line-end="68" class="language-sh">php artisan DoctypeAdminLanding:install -g
                        </code></pre>
                        <h2 class="code-line" data-line-start=69 data-line-end=70><a
                                id="Then_migrate_database_69"></a>Then migrate database
                        </h2>
                        <pre><code class="has-line-data" data-line-start="72" data-line-end="74" class="language-sh">php artisan migrate
                        </code></pre>
                        <p class="has-line-data" data-line-start="75" data-line-end="76">This Package includes three
                            seed</p>
                        <ul>
                            <li class="has-line-data" data-line-start="77" data-line-end="78">LandingsTableSeeder</li>
                            <li class="has-line-data" data-line-start="78" data-line-end="79">FeaturesTableSeeder</li>
                            <li class="has-line-data" data-line-start="79" data-line-end="81">ServicesTableSeeder</li>
                        </ul>
                        <p class="has-line-data" data-line-start="81" data-line-end="82">publish the seeds if haven’t
                            then initialize them in
                            DatabaseSeeder.php</p>
                        <pre><code class="has-line-data" data-line-start="83" data-line-end="105" class="language-sh">&lt;?php
                        
                        use doctype_admin\Landing\Models\Service;
                        use Illuminate\Database\Seeder;
                        
                        class DatabaseSeeder extends Seeder
                        {
                            /**
                             * Seed the application<span class="hljs-string">'s database.
                             *
                             * @return void
                             */
                            public function run()
                            {
                                // $this-&gt;call(UserSeeder::class);
                                $this-&gt;call(LandingsTableSeeder::class);
                                $this-&gt;call(FeaturesTableSeeder::class);
                                $this-&gt;call(ServicesTableSeeder::class);
                            }
                        }
                        
                        </span></code></pre>
                        <h2 class="code-line" data-line-start=106 data-line-end=107><a id="Note_106"></a>Note</h2>
                        <p class="has-line-data" data-line-start="108" data-line-end="109">If seed class is not found
                            try running composer
                            dump-autoload</p>
                        <p class="has-line-data" data-line-start="110" data-line-end="111">Some of the minor text that
                            may not be changed
                            frequently and is not required to be stored in db is represented from config file feel free
                            to change them</p>
                        <h2 class="code-line" data-line-start=112 data-line-end=113><a
                                id="Package_Config_File_112"></a>Package Config File</h2>
                        <pre><code class="has-line-data" data-line-start="115" data-line-end="175" class="language-sh">&lt;?php
                        
                        <span class="hljs-built_in">return</span> [
                            /*
                                |--------------------------------------------------------------------------
                                | Prefix of landing page backend
                                |--------------------------------------------------------------------------
                                |
                                | Option to <span class="hljs-built_in">set</span> the prefix of link to the backend.
                                | Prefix <span class="hljs-string">"admin"</span> recommended
                                | 
                                */
                            <span class="hljs-string">'prefix'</span> =&gt; <span class="hljs-string">'admin'</span>,
                        
                            /*
                                |--------------------------------------------------------------------------
                                | Landing Page App Title
                                |--------------------------------------------------------------------------
                                | 
                                */
                            <span class="hljs-string">'app_name'</span> =&gt; <span class="hljs-string">'Doctype Admin'</span>,
                        
                            /*
                                |--------------------------------------------------------------------------
                                | Landing Page Service Description
                                |--------------------------------------------------------------------------
                                | 
                                */
                            <span class="hljs-string">'service_description'</span> =&gt; <span class="hljs-string">'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'</span>,
                        
                            /*
                                |--------------------------------------------------------------------------
                                | Describing App
                                |--------------------------------------------------------------------------
                                | 
                                */
                            <span class="hljs-string">'app_description_heading_1'</span> =&gt; <span class="hljs-string">'UNIQUE SCREENS THAT WORK PERFECTLY'</span>,
                            <span class="hljs-string">'app_description_1'</span> =&gt; <span class="hljs-string">'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'</span>,
                        
                            /*
                                |--------------------------------------------------------------------------
                                | Download Our App Descriprion
                                |--------------------------------------------------------------------------
                                | 
                                */
                            <span class="hljs-string">'download_our_app_Heading'</span> =&gt; <span class="hljs-string">'We are here to listen from you deliver exellence'</span>,
                            <span class="hljs-string">'download_our_app_description'</span> =&gt; <span class="hljs-string">'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.'</span>,
                        
                            /*
                                |--------------------------------------------------------------------------
                                | Describing App
                                |--------------------------------------------------------------------------
                                | 
                                */
                            <span class="hljs-string">'app_description_heading_2'</span> =&gt; <span class="hljs-string">'We’ve made a life that will change you'</span>,
                            <span class="hljs-string">'app_description_2'</span> =&gt; <span class="hljs-string">'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.'</span>,
                        
                        ];
                        
                        </code></pre>
                        <h3 class="code-line" data-line-start=176 data-line-end=177><a
                                id="Sidebar_Navigation_Cofiguration_176"></a>Sidebar
                            Navigation Cofiguration</h3>
                        <p class="has-line-data" data-line-start="177" data-line-end="179">In your admin panel go to
                            config/adminlte.php<br>
                            then in menu section add</p>
                        <pre><code class="has-line-data" data-line-start="180" data-line-end="213" class="language-sh"> [
                                    <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Landing Page'</span>,
                                    <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-chess-rook'</span>,
                                    <span class="hljs-string">'submenu'</span> =&gt; [
                                        [
                                            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Feature'</span>,
                                            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-fire'</span>,
                                            <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/feature'</span>,
                                        ],
                                        [
                                            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Service'</span>,
                                            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-concierge-bell'</span>,
                                            <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/service'</span>,
                                        ],
                                        [
                                            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Plans'</span>,
                                            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-money-check'</span>,
                                            <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/plan'</span>,
                                        ],
                                        [
                                            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Landing Setting'</span>,
                                            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-cog'</span>,
                                            <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/landing_setting'</span>,
                                        ],
                                        [
                                            <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Contact'</span>,
                                            <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-envelope-square'</span>,
                                            <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/contact'</span>,
                                        ],
                        
                                    ]
                                ],
                        </code></pre>
                        <h3 class="code-line" data-line-start=214 data-line-end=215><a
                                id="Admin_Panel_Screenshot_214"></a>Admin Panel
                            Screenshot</h3>
                        <p class="has-line-data" data-line-start="216" data-line-end="218"><img
                                src="https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/landing.jpg"
                                alt="Doctype Admin Landing"><br>
                            <img src="https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/setting.jpg"
                                alt="Doctype Admin Landing"></p>
                        <h3 class="code-line" data-line-start=220 data-line-end=221><a id="Todos_220"></a>Todos</h3>
                        <ul>
                            <li class="has-line-data" data-line-start="222" data-line-end="223">Turbolink</li>
                            <li class="has-line-data" data-line-start="223" data-line-end="224">Better UI</li>
                            <li class="has-line-data" data-line-start="224" data-line-end="225">Support Chat</li>
                        </ul>
                        <h2 class="code-line" data-line-start=227 data-line-end=228><a id="Package_Used_227"></a>Package
                            Used</h2>
                        <ul>
                            <li class="has-line-data" data-line-start="229" data-line-end="230"><a
                                    href="https://github.com/saleem-hadad/larecipe">https://github.com/saleem-hadad/larecipe</a>
                            </li>
                            <li class="has-line-data" data-line-start="230" data-line-end="232"><a
                                    href="http://image.intervention.io/">http://image.intervention.io/</a></li>
                        </ul>
                        <h2 class="code-line" data-line-start=232 data-line-end=233><a id="License_232"></a>License</h2>
                        <p class="has-line-data" data-line-start="234" data-line-end="235">MIT</p>
                        <p class="has-line-data" data-line-start="236" data-line-end="237"><strong>DOCTYPE NEPAL
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