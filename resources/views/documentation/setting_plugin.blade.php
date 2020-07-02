<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-setting">
                Documentation
            </button>
        </div>
        <div class="card-body">

            <div class="position-relative p-3 bg-gray"
                style="height: 180px;background-image:url('{{asset('img/plugin/setting.jpg')}}');background-size: auto 180px;">
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-primary">
                        Setting
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-setting">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Doctype Admin Setting Plugin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{asset('img/plugin/setting/doctype_admin_settings.jpg')}}"
                                    alt="Doctpe Setting" class="img-fluid">
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
                                            <img class="d-block w-100"
                                                src="{{asset('img/plugin/setting/setting_make.jpg')}}"
                                                alt="Doctpe setting">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{asset('img/plugin/setting/setting_custom.jpg')}}"
                                                alt="Doctpe setting">
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
                                    <a href="https://github.com/pratiksh404/doctype_admin_settings"
                                        target="_blank">Visit
                                        Offical Github Package Documentation.</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-lg-5" style="max-height: 70vh;overflow-y:scroll">

                        <p class="has-line-data" data-line-start="0" data-line-end="3">
                            <a href="https://github.com/pratiksh404/doctype_admin_settings/issues"><img
                                    src="https://img.shields.io/github/issues/pratiksh404/doctype_admin_settings"
                                    alt="Issues"></a><br>
                            <a href="https://github.com/pratiksh404/doctype_admin_settings/stargazers"><img
                                    src="https://img.shields.io/github/stars/pratiksh404/doctype_admin_settings"
                                    alt="Stars"></a></p>
                        <h2 class="code-line" data-line-start=3 data-line-end=4><a
                                id="Laravel_7_Admin_Panel_Settings_Plugin_for_lazy_developers_3"></a>Laravel 7 Admin
                            Panel Settings Plugin for
                            lazy developers.</h2>
                        <h4 class="code-line" data-line-start=5 data-line-end=6><a id="Contains___5"></a>Contains : -
                        </h4>
                        <ul>
                            <li class="has-line-data" data-line-start="7" data-line-end="9">Setting Management System
                            </li>
                        </ul>
                        <h3 class="code-line" data-line-start=9 data-line-end=10><a id="Installation_9"></a>Installation
                        </h3>
                        <p class="has-line-data" data-line-start="11" data-line-end="12">Run Composer Require Command
                        </p>
                        <pre><code class="has-line-data" data-line-start="14" data-line-end="16" class="language-sh">composer require doctype_admin/Settings
                    </code></pre>
                        <h2 class="code-line" data-line-start=17 data-line-end=18><a
                                id="Then_migrate_database_17"></a>Then migrate database
                        </h2>
                        <pre><code class="has-line-data" data-line-start="20" data-line-end="22" class="language-sh">php artisan migrate
                    </code></pre>

                        <p class="has-line-data" data-line-start="28" data-line-end="29">To use seed
                            use(publish them first) </p>
                        <pre><code class="has-line-data" data-line-start="31" data-line-end="34" class="language-sh">php artisan db:seed --class=SettingsTableSeeder 
                    </code></pre>
                        <h3 class="code-line" data-line-start=35 data-line-end=36><a
                                id="If_you_want_to_modify_Stuffs_do_35"></a>If you want to
                            modify Stuffs do…</h3>
                        <h3 class="code-line" data-line-start=36 data-line-end=37><a
                                id="Install_package_assets_36"></a>Install package assets
                        </h3>
                        <h4 class="code-line" data-line-start=38 data-line-end=39><a
                                id="Install_all_assets_38"></a>Install all assets</h4>
                        <pre><code class="has-line-data" data-line-start="41" data-line-end="43" class="language-sh">php artisan DoctypeAdminSetting:install <span class="hljs-operator">-a</span>
                    </code></pre>
                        <p class="has-line-data" data-line-start="44" data-line-end="45">This command will publish</p>
                        <ul>
                            <li class="has-line-data" data-line-start="46" data-line-end="47">config file named
                                Setting.php</li>
                            <li class="has-line-data" data-line-start="47" data-line-end="48">views files of setting
                            </li>
                            <li class="has-line-data" data-line-start="48" data-line-end="49">migrations files</li>
                            <li class="has-line-data" data-line-start="49" data-line-end="51">seed files</li>
                        </ul>
                        <h4 class="code-line" data-line-start=51 data-line-end=52><a
                                id="Install_config_file_only_51"></a>Install config file
                            only</h4>
                        <pre><code class="has-line-data" data-line-start="54" data-line-end="56" class="language-sh">php artisan DoctypeAdminSetting:install -c
                    </code></pre>
                        <h4 class="code-line" data-line-start=57 data-line-end=58><a
                                id="Install_view_files_only_57"></a>Install view files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="60" data-line-end="62" class="language-sh">php artisan DoctypeAdminSetting:install <span class="hljs-operator">-f</span>
                    </code></pre>
                        <h4 class="code-line" data-line-start=63 data-line-end=64><a
                                id="Install_migrations_files_only_63"></a>Install
                            migrations files only</h4>
                        <pre><code class="has-line-data" data-line-start="66" data-line-end="68" class="language-sh">php artisan DoctypeAdminSetting:install -m
                    </code></pre>
                        <h4 class="code-line" data-line-start=69 data-line-end=70><a
                                id="Install_seed_files_only_69"></a>Install seed files only
                        </h4>
                        <pre><code class="has-line-data" data-line-start="72" data-line-end="74" class="language-sh">php artisan DoctypeAdminSetting:install <span class="hljs-operator">-d</span>
                    </code></pre>
                        <h2 class="code-line" data-line-start=76 data-line-end=77><a id="Note_76"></a>Note</h2>
                        <p class="has-line-data" data-line-start="78" data-line-end="79">If seed class is not found try
                            running composer
                            dump-autoload</p>
                        <h2 class="code-line" data-line-start=81 data-line-end=82><a
                                id="To_add_the_package_route_link_to_be_accesable_from_sidemenu_just_add_following_on_configadminltephp_under_key_menu_81"></a>To
                            add the package route link to be accesable from sidemenu just add following on
                            config/adminlte.php under key ‘menu’
                        </h2>
                        <pre><code class="has-line-data" data-line-start="84" data-line-end="90" class="language-sh">        [
                                <span class="hljs-string">'text'</span> =&gt; <span class="hljs-string">'Setting'</span>,
                                <span class="hljs-string">'icon'</span> =&gt; <span class="hljs-string">'fas fa-cog'</span>,
                                <span class="hljs-string">'url'</span> =&gt; <span class="hljs-string">'admin/setting'</span>
                            ],
                    </code></pre>
                        <h2 class="code-line" data-line-start=90 data-line-end=91><a
                                id="Setting_Plugin_Consists_following_input_fields_90"></a>Setting Plugin Consists
                            following input fields</h2>
                        <ul>
                            <li class="has-line-data" data-line-start="91" data-line-end="92">Text Field</li>
                            <li class="has-line-data" data-line-start="92" data-line-end="93">Rich Textarea</li>
                            <li class="has-line-data" data-line-start="93" data-line-end="94">Image</li>
                            <li class="has-line-data" data-line-start="94" data-line-end="95">Select</li>
                            <li class="has-line-data" data-line-start="95" data-line-end="96">Radio</li>
                            <li class="has-line-data" data-line-start="96" data-line-end="98">Checkbox</li>
                        </ul>
                        <h2 class="code-line" data-line-start=98 data-line-end=99><a
                                id="How_to_access_setting_value__98"></a>How to access
                            setting value ?</h2>
                        <p class="has-line-data" data-line-start="99" data-line-end="100">We can access setting’s
                            assigned value globally by
                            simply using blade directive like</p>
                        <pre><code class="has-line-data" data-line-start="101" data-line-end="103" class="language-sh">@verbatim {{@setting(<span class="hljs-string">'setting_name'</span>)}} // setting_name is one you make @endverbatim <span class="hljs-keyword">while</span> you are creating setting (should be lower <span class="hljs-built_in">cap</span> with space replaced by underscore(_) : Recommended)
                    </code></pre>
                        <h2 class="code-line" data-line-start=103 data-line-end=104><a id="eg_103"></a>e.g</h2>
                        <p class="has-line-data" data-line-start="104" data-line-end="105">if we have a setting and you
                            name that setting “Site
                            name” then to use the value assigned to that setting use</p>
                        <pre><code class="has-line-data" data-line-start="106" data-line-end="108" class="language-sh"> @verbatim {{@setting(<span class="hljs-string">'site_name'</span>)}} @endverbatim
                    </code></pre>
                        <h2 class="code-line" data-line-start=109 data-line-end=110><a
                                id="Customization_109"></a>Customization</h2>
                        <p class="has-line-data" data-line-start="110" data-line-end="111">It uses JSON object to
                            customize the input fields.
                        </p>
                        <h2 class="code-line" data-line-start=113 data-line-end=114><a
                                id="Customization_Objects_113"></a>Customization Objects
                        </h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Objects</th>
                                    <th>Function</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>value</td>
                                    <td>Retives all featured posts</td>
                                </tr>
                                <tr>
                                    <td>placeholder</td>
                                    <td>Gives the input field placeholder</td>
                                </tr>
                                <tr>
                                    <td>class</td>
                                    <td>Adds the given class</td>
                                </tr>
                                <tr>
                                    <td>id</td>
                                    <td>Adds the given id</td>
                                </tr>
                                <tr>
                                    <td>style</td>
                                    <td>Gives the styling</td>
                                </tr>
                                <tr>
                                    <td>default</td>
                                    <td>Makes the mention value as default value eg like in select dropdown or checkbox
                                    </td>
                                </tr>
                                <tr>
                                    <td>checked</td>
                                    <td>Makes the checkbox checked as default</td>
                                </tr>
                                <tr>
                                    <td>options</td>
                                    <td>Options given for select options, radio options</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="code-line" data-line-start=126 data-line-end=127><a id="Example_126"></a>Example</h2>
                        <p class="has-line-data" data-line-start="128" data-line-end="129">Simple Text Field Setting
                            Customization</p>
                        <pre><code class="has-line-data" data-line-start="130" data-line-end="140" class="language-sh">{
                      <span class="hljs-string">"class"</span> : <span class="hljs-string">"my_class"</span>,
                      <span class="hljs-string">"id"</span> : <span class="hljs-string">"my_id"</span>,
                      <span class="hljs-string">"value"</span> : <span class="hljs-string">"Doctype Admin"</span>,
                      <span class="hljs-string">"placeholder"</span> : <span class="hljs-string">"Site Title Here!!"</span>,
                      <span class="hljs-string">"style"</span> : {
                        <span class="hljs-string">"color"</span> : <span class="hljs-string">"red"</span>
                      }
                    }
                    </code></pre>
                        <p class="has-line-data" data-line-start="141" data-line-end="142">Simple Rich Textarea Setting
                            Customization</p>
                        <pre><code class="has-line-data" data-line-start="143" data-line-end="151" class="language-sh">{
                      <span class="hljs-string">"class"</span> : <span class="hljs-string">"my_class"</span>,
                      <span class="hljs-string">"id"</span> : <span class="hljs-string">"another_id"</span>,
                      <span class="hljs-string">"placeholder"</span> : <span class="hljs-string">"Rich Text Placeholder"</span>,
                      <span class="hljs-string">"style"</span> : {
                        <span class="hljs-string">"color"</span> : <span class="hljs-string">"red"</span>
                      }
                    </code></pre>
                        <p class="has-line-data" data-line-start="152" data-line-end="153">Simple Select Field Setting
                            Customization</p>
                        <pre><code class="has-line-data" data-line-start="154" data-line-end="162" class="language-sh">{
                      <span class="hljs-string">"default"</span> : <span class="hljs-string">"1"</span>,
                      <span class="hljs-string">"options"</span> : {
                        <span class="hljs-string">"1"</span> : <span class="hljs-string">"option 1"</span>,
                        <span class="hljs-string">"2"</span> : <span class="hljs-string">"option 2"</span>
                      }
                    }
                    </code></pre>
                        <p class="has-line-data" data-line-start="163" data-line-end="165">Simple Radio Field Setting
                            Customization<br>
                            Note type object is mandatory defining whetjer the value to be stored is integer or string
                            type</p>
                        <pre><code class="has-line-data" data-line-start="166" data-line-end="178" class="language-sh">{
                      <span class="hljs-string">"type"</span> : <span class="hljs-string">"integer"</span>,
                       <span class="hljs-string">"checked"</span> : <span class="hljs-string">"1"</span>,
                      <span class="hljs-string">"options"</span> : {
                      <span class="hljs-string">"1"</span> : <span class="hljs-string">"Pratik Shrestha"</span>,
                      <span class="hljs-string">"2"</span> : <span class="hljs-string">"DRH2SO4"</span>
                                },
                    <span class="hljs-string">"style"</span>: {
                      <span class="hljs-string">"color"</span> : <span class="hljs-string">"red"</span>
                          }
                    }
                    </code></pre>
                        <p class="has-line-data" data-line-start="179" data-line-end="180">Simple Image Field Setting
                            Customization</p>
                        <pre><code class="has-line-data" data-line-start="181" data-line-end="191" class="language-sh">{
                      <span class="hljs-string">"image"</span> : {
                        <span class="hljs-string">"fit"</span> : {
                          <span class="hljs-string">"width"</span> : <span class="hljs-string">"300"</span>,
                          <span class="hljs-string">"height"</span> : <span class="hljs-string">"300"</span>
                        },
                        <span class="hljs-string">"quality"</span> : <span class="hljs-string">"80"</span>
                      }
                    }
                    </code></pre>
                        <h2 class="code-line" data-line-start=193 data-line-end=194><a id="Note_193"></a>Note</h2>
                        <p class="has-line-data" data-line-start="195" data-line-end="196">When using select and radio
                            giving options object in
                            customization is mandatory</p>
                        <h3 class="code-line" data-line-start=204 data-line-end=205><a id="Todos_204"></a>Todos</h3>
                        <ul>
                            <li class="has-line-data" data-line-start="206" data-line-end="207">Better Confile File
                                Control</li>
                            <li class="has-line-data" data-line-start="207" data-line-end="208">Maintainabilty</li>
                            <li class="has-line-data" data-line-start="208" data-line-end="209">More flexible
                                customization</li>
                            <li class="has-line-data" data-line-start="209" data-line-end="211">Adding Exceptions</li>
                        </ul>
                        <h2 class="code-line" data-line-start=211 data-line-end=212><a id="Package_Used_211"></a>Package
                            Used</h2>
                        <ul>
                            <li class="has-line-data" data-line-start="212" data-line-end="214"><a
                                    href="http://image.intervention.io/">http://image.intervention.io/</a></li>
                        </ul>
                        <h2 class="code-line" data-line-start=214 data-line-end=215><a id="License_214"></a>License</h2>
                        <p class="has-line-data" data-line-start="216" data-line-end="217">MIT</p>
                        <p class="has-line-data" data-line-start="218" data-line-end="219"><strong>DOCTYPE NEPAL
                                ||DR.H2SO4</strong></p>

                        <img class="img-fluid" src="{{asset('img/plugin/setting/setting.jpg')}}" alt="Doctpe setting">

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