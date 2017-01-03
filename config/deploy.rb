# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'love northampton'
set :repo_url, 'git@bitbucket.org:weaveoftheride/metapatterns.git'

# Default branch is :master
#ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name

# Default value for :scm is :git
#set :scm, :git
#path "/usr/local/cpanel/3rdparty/libexec/git-core"
#set :scm_command, "/usr/local/cpanel/3rdparty/libexec/git-core"
# Default value for :format is :pretty
# set :format, :pretty


# Use :debug for more verbose output when troubleshooting
set :log_level, :debug


# Default value for :linked_files is []
set :linked_files, fetch(:linked_files, []).push('.env')


# Default value for linked_dirs is []
# set :linked_dirs, fetch(:linked_dirs, []).push('log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'vendor/bundle', 'public/system')
 set :linked_dirs, fetch(:linked_dirs, []).push('web/app/uploads', 'vendor')

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 1



namespace :composer do
    before 'install', 'change_dir'

    desc 'Composer update'
    task :change_dir do
        on roles(:app) do
            execute "cd #{release_path}/ && ~/bin/composer/composer.phar update"
        end
    end
end



namespace :deploy do

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end