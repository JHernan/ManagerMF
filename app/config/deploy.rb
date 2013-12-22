set :application, "manager"
set :domain,      "mushofutbol.com"
set :deploy_to,   "/home/www-data/#{application}"
set :app_path,    "app"
set :web_path,    "web"

set :repository,  "https://github.com/JHernan/ManagerMF.git"
set :scm,         :git

set :model_manager, "doctrine"

set :user,        "root"
set :group,       "www-data"
set :runner,      "www-data"
server domain, :app, :web, :primary => true

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is wdhere Symfony2 migrations will run

ssh_options[:forward_agent] = true
default_run_options[:pty] = true
set  :use_sudo,      false
set  :keep_releases,  3
set :use_composer, true
set :dump_assetic_assets, true

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,   [app_path + "/cache", app_path + "/logs", web_path + "/uploads", "vendor"]
set :writable_dirs,     ["app/cache", "app/logs"]
set :webserver_user,    "www-data"
set :permission_method, :chown
set :use_set_permissions, true

set :deploy_via, :remote_cache

set :normalize_asset_timestamps, false

# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL

after "deploy:setup", :fix_permissions
before "deploy:create_symlink", :fix_permissions

task :fix_permissions do
  run "chown www-data:www-data -R #{deploy_to}"
end