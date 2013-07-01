set :application, "manager"
set :domain,      "mushofutbol.com"
set :deploy_to,   "/home/www-data/#{application}"
set :app_path,    "app"
set :web_path,    "web"

set :repository,  "https://github.com/JHernan/ManagerMF.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

set :user, "root"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :use_sudo,      false
set  :keep_releases,  3

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,   [app_path + "/logs", web_path + "/uploads", "vendor"]

set :use_composer, true

# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL
